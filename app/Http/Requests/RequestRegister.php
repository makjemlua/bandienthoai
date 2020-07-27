<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'email' => 'required|unique:users,email,' . $this->id,
			'name' => 'required',
			'password' => 'required',
			'phone' => 'required',
		];
	}
	public function messages() {
		return [
			'email.required' => 'Email không được để trống',
			'email.unique' => 'Email đã tồn tại',
			'name.required' => 'Tên không được để trống',
			'password.required' => 'Mật khẩu không được để trống',
			'phone.required' => 'Số điện thoại không được để trống',
		];
	}
}
