<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestPassword;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends FrontendController {
	public function index() {
		$transactions = Transaction::where('tr_user_id', get_data_user('web'));

		$listTransaction = $transactions;

		$transactions = $transactions->addSelect('id', 'tr_total', 'tr_address', 'tr_phone', 'tr_status', 'created_at')->paginate(10);

		$totalTransaction = $listTransaction->select('id')->count();

		$totalTransactionDone = $listTransaction->where('tr_status', Transaction::STATUS_DONE)->select('id')->count();

		$viewData = [
			'transactions' => $transactions,
			'totalTransaction' => $totalTransaction,
			'totalTransactionDone' => $totalTransactionDone,
		];
		return view('user.index', $viewData);
	}
	public function updateInfo() {
		$user = User::find(get_data_user('web'));

		return view('user.info', compact('user'));
	}
	public function saveUpdateInfo(Request $request) {
		$user = User::where('id', get_data_user('web'))->update($request->except('_token'));

		return redirect()->back()->with('success', 'Cập nhập thành công');
	}
	public function updatePassword() {
		return view('user.password');
	}
	public function saveUpdatePassword(RequestPassword $requestPassword) {
		if (Hash::check($requestPassword->password_old, get_data_user('web', 'password'))) {
			$user = User::find(get_data_user('web'));
			$user->password = md5($requestPassword->password);
			$user->save();

			return redirect()->back()->with('success', 'Cập nhập thành công');
		}
		return redirect()->back()->with('danger', 'Mật khẩu cũ không đúng');
	}
}
