<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminUserController extends Controller {
	public function index(Request $request) {
		$users = User::whereRaw(1);

		$users = $users->orderBy('id', 'DESC')->paginate(10);

		$viewData = [
			'users' => $users,
		];
		return view('admin::user.index', $viewData);
	}
	public function create() {
		return view('admin::user.create');
	}
	public function store(Request $request) {
		//
	}
	public function edit($id) {
		return view('admin::user.edit');
	}
	public function update(Request $request, $id) {
		//
	}
}
