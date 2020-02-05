<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Support\Facades\Mail;

class Notifications extends Controller {
	public function sendAdminNotifications() {
		$orders = Order::all();
		foreach ($orders as $order) {
			$expData = $order->order_exp_data;
			if ($expData == date('Y-m-d')) {
				$data = array('Name' => "Fahad Ali", "body" => "Dear Admin These Orders Are Completed");

				Mail::send('emails.remainder', $data, function ($message) {
					$message->to('fahad4312l@gmail.com', 'Fahad Ali')
						->subject('These Order Are Completed');
					$message->from('hinashah24031995@gmail.com', 'Please Check All Completed Orders');
				});

			}
			$id = $order->id;
			$pata = Order::find($id);
			$pata->status_id = "3";
			if ($pata->update()) {
				echo "All Records Also Completed";
			}

		}
	}
}
