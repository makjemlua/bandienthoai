<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends FrontendController {
	public function __contruct() {
		parent::__construct();
	}
	public function index(Request $request) {

		$productsNew = Product::where([
			'pro_active' => Product::STATUS_PUBLIC,
		])->orderBy('id', 'DESC')->get();

		$productHot = Product::where([
			'pro_hot' => Product::HOT_ON,
			'pro_active' => Product::STATUS_PUBLIC,
		])->limit(5)->get();

		$categoriesHome = Category::with('products')->where('c_home', Category::HOME)->limit(3)->get();

		$productsSale = Product::where([
			'pro_active' => Product::STATUS_PUBLIC,
		])->orderBy('pro_sale', 'DESC')->get();

		$categories = $this->getCategories();

		$productSuggest = [];
		if (get_data_user('web')) {
			$transactions = Transaction::where([
				'tr_user_id' => get_data_user('web'),
				'tr_status' => Transaction::STATUS_DONE,
			])->pluck('id');
			if (!empty($transactions)) {
				$listID = Order::whereIn('or_transaction_id', $transactions)->distinct()->pluck('or_product_id');
				if (!empty($listID)) {
					$listCategory = Product::whereIn('id', $listID)->distinct()->pluck('pro_category_id');
					if ($listCategory) {
						$productSuggest = Product::whereIn('pro_category_id', $listCategory)->limit(5)->get();
					}
				}
			}
		}

		$viewData = [
			'productsNew' => $productsNew,
			'productHot' => $productHot,
			'categoriesHome' => $categoriesHome,
			'productsSale' => $productsSale,
			'categories' => $categories,
			'productSuggest' => $productSuggest,
		];
		return view('home.index', $viewData);
	}
	public function getCategories() {
		return Category::all();
	}
}
