<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller {
	public function __contruct() {
		$categories = Category::all();
		View::share('categories', $categories);
	}
}
