<?php

namespace App\Http\Controllers;

use App\Order;
use App\PackagesModel;
use Illuminate\Http\Request;
use PayPal\Api\Amount;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\setPaymentMethod;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Exception\PayPalConnectionException;
use PayPal\Rest\ApiContext;

class OrderController extends Controller {
	public function paypal($id) {
		$data = Order::find($id);
		$package_id = $data->package_id;
		$package = PackagesModel::find($package_id);
		$price = $package->price;
		if (!$price == "") {
			$apiContext = new ApiContext(
				new OAuthTokenCredential(
					env('PAYPAL_CLIENT_ID'),
					env('PAYPAL_SECRET_ID')
				)
			);
// Create new payer and method
			$payer = new Payer();
			$payer->setPaymentMethod("paypal");

// Set redirect URLs
			$redirectUrls = new RedirectUrls();
			$redirectUrls->setReturnUrl(route('process.paypal'))
				->setCancelUrl(route('cancel.paypal'));

// Set payment amount
			$amount = new Amount();
			$amount->setCurrency("USD")
				->setTotal(20);

// Set transaction object
			$transaction = new Transaction();
			$transaction->setAmount($amount)
				->setDescription("Payment description");

// Create the full payment object
			$payment = new Payment();
			$payment->setIntent('sale')
				->setPayer($payer)
				->setRedirectUrls($redirectUrls)
				->setTransactions(array($transaction));

			// Create payment with valid API context
			try {
				$payment->create($apiContext);

				// Get PayPal redirect URL and redirect the customer
				$approvalUrl = $payment->getApprovalLink();
				// $data = Auth()->user();

				return redirect($approvalUrl);

				// Redirect the customer to $approvalUrl
			} catch (PayPal\Exception\PayPalConnectionException $ex) {
				echo $ex->getCode();
				echo $ex->getData();
				die($ex);
			} catch (Exception $ex) {
				die($ex);
			}

		} else {
			echo "no payment";
		}
	}
	public function processPaypal(Request $request) {

// Get payment object by passing paymentId

		$apiContext = new ApiContext(
			new OAuthTokenCredential(
				env('PAYPAL_CLIENT_ID'),
				env('PAYPAL_SECRET_ID')
			)
		);
		$paymentId = $request->paymentId;
		$payment = Payment::get($paymentId, $apiContext);
		$payerId = $request->PayerID;

// Execute payment with payer ID
		$execution = new PaymentExecution();
		$execution->setPayerId($payerId);

		try {
			// Execute payment
			$result = $payment->execute($execution, $apiContext);

		} catch (PayPal\Exception\PayPalConnectionException $ex) {
			echo $ex->getCode();
			echo $ex->getData();

		} catch (Exception $ex) {
			die($ex);
		}
	}
	public function cancelPaypal() {

	}
}
