<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminTransactionController extends Controller {
	public function index() {
		$transactions = Transaction::with('user:id,name')->paginate(10);

		$viewData = [
			'transactions' => $transactions,
		];

		return view('admin::transaction.index', $viewData);
	}
	public function viewOrder(Request $request, $id) {
		if ($request->ajax()) {
			$orders = Order::with('product')->where('or_transaction_id', $id)->get();
			$transactions = Transaction::with('user:id,name');
			$html = view('admin::components.order', compact('orders', 'transactions'))->render();
			return \response()->json($html);
		}
	}
	//Da xu ly
	public function actionTransaction($id) {
		$transaction = Transaction::find($id);
		$orders = Order::where('or_transaction_id', $id)->get();
		//Tru di so luong sp
		//Tang pay mua dc
		if ($orders) {
			foreach ($orders as $order) {
				//dd($order);
				$product = Product::find($order->or_product_id);
				$product->pro_number = $product->pro_number - $product->or_qty;
				$product->pro_pay++;
				$product->save();
			}
		}
		//Cap nhap trang thai sp
		\DB::table('users')->where('id', $transaction->tr_user_id)->increment('total_pay');
		$transaction->tr_status = Transaction::STATUS_DONE;
		$transaction->save();
		return redirect()->back()->with('success', 'Xử lý đơn hàng thành công');
	}
}
