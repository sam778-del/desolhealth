<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use App\Order;
use Auth;

class FlutterWaveController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function initialize(Request $request)
    {
        //This generates a payment reference
        $reference = Flutterwave::generateReference();

        // Enter the details of the payment
        $data = [
            'payment_options' => 'card,banktransfer,ussd',
            'amount' => request()->amount,
            'email' => request()->email,
            'tx_ref' => $reference,
            'currency' => "NGN",
            'redirect_url' => route('callback'),
            'customer' => [
                'email' => request()->email,
                "phone_number" => request()->phone,
                "name" => request()->name
            ],

            "customizations" => [
                "title" => request()->service,
            ],

            "meta" => [
                "service_name" => $request->input('service_name'),
            ]
        ];

        $payment = Flutterwave::initializePayment($data);


        if ($payment['status'] !== 'success') {
            return redirect()->back()->with('error', __('Something went wrong'));
        }

        return redirect($payment['data']['link']);
    }

    /**
     * Obtain Rave callback information
     * @return void
     */
    public function callback()
    {
        $status = request()->status;
        if ($status ==  'successful') {
            $transactionID = Flutterwave::getTransactionIDFromCallback();
            $data = Flutterwave::verifyTransaction($transactionID);
            $user = Auth::user();
            Order::create([
                'order_id' => $data['data']['tx_ref'],
                'name'     => $data['data']['customer']['name'],
                'email'    => $data['data']['customer']['email'],
                'card_number' => $data['data']['card']['first_6digits'],
                'card_exp_month' => $data['data']['card']['expiry'],
                'card_exp_year' => $data['data']['card']['expiry'],
                'service_name' => $data['data']['meta']['service_name'],
                'price' => $data['data']['amount'],
                'price_currency' => $data['data']['currency'],
                'txn_id' => $data['data']['tx_ref'],
                'payment_status' => $data['data']['status'],
                'receipt' => $data['data']['tx_ref'],
                'user_id' => $user->id
            ]);
            return redirect()->back()->with('success', __('Payment Succesful'));
        }
        elseif ($status ==  'cancelled'){
            return redirect()->back()->with('error', __('Payment Cancelled'));
        }
        else{
            return redirect()->back()->with('error', __('Payment Failed'));
        }
    }
}
