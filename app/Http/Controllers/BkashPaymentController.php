<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderPayment;
use Illuminate\Http\Request;
use Shipu\Bkash\Facades\Checkout;

class BkashPaymentController extends Controller
{
    public function createPayment(Request $request)
    {
        $order = Order::findOrFail($request->order_id);
        $payment = Checkout::createPayment($request->amount ?? $order->amount, $order->invoice_id);

        $orderPayment = OrderPayment::create([
            'order_id' => $request->order_id,
            'payment_reference_id' => $payment->paymentID,
            'amount' => $payment->amount,
            'status' => $payment->transactionStatus
        ]);

        if ($orderPayment) {
            return redirect(route('bkash.execute-payment', ['paymentReferenceId' => $payment->paymentID]));
        }

        return $this->failedResponse();
    }

    /**
     * Execute Payment
     * 
     * @param Illuminate\Http\Request $request
     */
    public function executePayment(Request $request)
    {
        $payment = Checkout::executePayment($request->paymentReferenceId);

        dd($payment);

        return $this->successResponse($payment);
    }
}
