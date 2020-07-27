<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestContact;
use App\Models\Contact;
use Carbon\Carbon;

class ContactController extends FrontendController {
	public function getContact() {
		return view('contact');
	}
	public function saveContact(RequestContact $request) {
		//dd($request->all());
		$data = $request->except('_token');
		$data['created_at'] = $data['updated_at'] = Carbon::now();
		Contact::insert($data);

		return redirect()->back();
	}
}
