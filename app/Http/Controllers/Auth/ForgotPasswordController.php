<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestResetPassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Mail;

class ForgotPasswordController extends Controller {
	public function getFormResetPassword() {
		return view('auth.passwords.email');
	}
	public function sendCodeResetPassword(Request $request) {
		$email = $request->email;
		$checkUser = User::where('email', $email)->first();
		if (!$checkUser) {
			return redirect()->back()->with('danger', 'Email không tồn tại');
		}
		$code = md5(time() . $email);

		$checkUser->code = $code;
		$checkUser->time_code = Carbon::now();
		$checkUser->save();

		$url = route('get.link.reset.password', ['code' => $checkUser->code, 'email' => $email]);

		$data = [
			'route' => $url,
		];

		Mail::send('email.reset_password', $data, function ($message) use ($checkUser) {
			$message->to($checkUser->email, 'Visitor')->subject('Lấy lại mật khẩu!');
		});

		return redirect()->back()->with('success', 'Link lấy lại mật khẩu đã được gửi vào email của bạn');
	}
	public function resetPassword(RequestResetPassword $request) {
		$code = $request->code;
		$email = $request->email;

		$checkUser = User::where([
			'code' => $code,
			'email' => $email,
		])->first();

		if (!$checkUser) {
			return redirect('/')->with('danger', 'Xin lỗi, không đúng đường dẫn lấy lại mật khẩu');
		}
		return view('auth.passwords.reset');
	}
	public function SaveResetPassword(RequestResetPassword $requestResetPassword) {
		$code = $requestResetPassword->code;
		$email = $requestResetPassword->email;

		$checkUser = User::where([
			'code' => $code,
			'email' => $email,
		])->first();

		if (!$checkUser) {
			return redirect('/')->with('danger', 'Xin lỗi, không đúng đường dẫn lấy lại mật khẩu');
		}
		$checkUser->password = md5($requestResetPassword->password);
		$checkUser->save();

		return redirect()->route('get.login')->with('success', 'Mật khẩu đã được đổi thành công');
	}
}
