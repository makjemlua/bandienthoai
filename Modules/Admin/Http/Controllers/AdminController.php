<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Contact;
use App\Models\Rating;
use App\Models\Transaction;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller {
	/**
	 * Display a listing of the resource.
	 * @return Response
	 */
	public function index() {
		$ratings = Rating::with('user:id,name', 'product:id,pro_name')->limit(5)->get();
		$contacts = Contact::limit(10)->get();

		//Doanh thu ngay
		$moneyDay = Transaction::whereDay('updated_at', date('d'))->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');

		//Doanh thu tuan
		//$moneyWeek = Transaction::where('updated_at', Carbon::now()->weekOfYear)->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');

		//Doanh thu thang
		$moneyMonth = Transaction::whereMonth('updated_at', date('m'))->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');

		//Doanh thu nam
		$moneyYear = Transaction::whereYear('updated_at', date('Y'))->where('tr_status', Transaction::STATUS_DONE)->sum('tr_total');

		$dataMoney = [
			[
				"name" => "Doanh thu ngày",
				"y" => (int) $moneyDay,
			],
			// [
			// 	"name" => "Doanh thu tuần",
			// 	"y" => (int) $moneyWeek,
			// ],
			[
				"name" => "Doanh thu tháng",
				"y" => (int) $moneyMonth,
			],
			[
				"name" => "Doanh thu năm",
				"y" => (int) $moneyYear,
			],
		];

		//danh sach don hang moi nhat

		$transactionNews = Transaction::with('user:id,name')->limit(5)->orderByDesc('id')->where('tr_status', Transaction::STATUS_DEFAULT)->get();

		$viewData = [
			'ratings' => $ratings,
			'contacts' => $contacts,
			'moneyDay' => $moneyDay,
			'moneyMonth' => $moneyMonth,
			'dataMoney' => json_encode($dataMoney),
			'transactionNews' => $transactionNews,
		];
		return view('admin::index', $viewData);
	}
}
