<?php

namespace App\Http\Controllers;

use App\Models\PageStatic;

class PageStaticController extends FrontendController {
	public function aboutUS() {
		$page = PageStatic::where('ps_type', PageStatic::TYPE_ABOUT)->first();
		return view('page_static.about', compact('page'));
	}
	public function ShipmentDetails() {
		$page = PageStatic::where('ps_type', PageStatic::TYPE_INFO_SHOPPING)->first();
		return view('page_static.shipment', compact('page'));
	}
	public function usePolicy() {
		$page = PageStatic::where('ps_type', PageStatic::TYPE_DIEUKHOAN)->first();
		return view('page_static.use', compact('page'));
	}
	public function WarrantyPolicy() {
		$page = PageStatic::where('ps_type', PageStatic::TYPE_BAOMAT)->first();
		return view('page_static.waranty', compact('page'));
	}
}
