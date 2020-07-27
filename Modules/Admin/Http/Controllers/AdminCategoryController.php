<?php
namespace App\Http\Requests;
namespace Modules\Admin\Http\Controllers;
//namespace App\Models;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestCategory;
use App\Models\Category;

//use App\Models\Category;

class AdminCategoryController extends Controller {
	public function index() {
		$category_rooms = Category::select('id', 'c_name', 'c_title_seo', 'c_active', 'c_home')->get();
		$viewData = [
			'category_rooms' => $category_rooms,
		];
		return view('admin::category.index', $viewData);
	}
	public function create() {
		return view('admin::category.create');
	}
	public function store(RequestCategory $requestCategory) {
		//dd($requestCategory->all());
		$this->insertOrUpdate($requestCategory);
		return redirect()->back()->with('success', 'Thêm mới thành công');
	}
	public function edit($id) {
		$category = Category::find($id);
		return view('admin::category.update', compact('category'));
	}
	public function update(RequestCategory $requestCategory, $id) {

		$this->insertOrUpdate($requestCategory, $id);
		return redirect()->back()->with('success', 'Cập nhập thành công');
	}
	public function insertOrUpdate($requestCategory, $id = '') {
		$code = 1;
		try {
			$category = new Category();
			if ($id) {
				$category = Category::find($id);
			}
			$category->c_name = $requestCategory->name;
			$category->c_slug = str_slug($requestCategory->name);
			$category->c_icon = $requestCategory->icon;
			$category->c_title_seo = $requestCategory->title ? $requestCategory->title : $requestCategory->name;
			$category->c_description_seo = str_slug($requestCategory->description);
			$category->save();
		} catch (\Exception $exception) {
			$code = 0;
			Log::error("Error" . $exception->getMessage());
		}
		return $code;
	}
	public function action($action, $id) {
		$message = '';
		if ($action) {
			$category = Category::find($id);
			switch ($action) {
			case 'delete':
				$category->delete();
				$message = 'Xóa dữ liệu thành công';
				break;
			case 'active':
				$category->c_active = $category->c_active ? 0 : 1;
				$message = 'Thay dổi trạng thái thành công';
				$category->save();
				break;
			case 'home':
				$category->c_home = $category->c_home ? 0 : 1;
				$message = 'Thay dổi trạng thái thành công';
				$category->save();
				break;
			}
		}
		return redirect()->back()->with('success', $message);
	}
}
?>