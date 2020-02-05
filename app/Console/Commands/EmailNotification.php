<?php

namespace App\Console\Commands;

use App\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class EmailNotification extends Command {
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'email:notification';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Dear Admin Please Check All Requested User';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function handle() {
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
