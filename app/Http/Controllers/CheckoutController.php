<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CheckoutRequest;
use App\Models\Transaction;
use App\Models\Product;
use App\Models\TransactionDetail;

class CheckoutController extends Controller
{
    public function checkout(CheckoutRequest $request)
    {
        $data = $request->except('transaction_details');
        $data['code'] = 'TRX' . mt_rand(10000,  99999) . mt_rand(100, 999);

        Transaction::create($data);
        return back();
        // $transaction = Transaction::create($data);

        // foreach($request->transaction_details as $product)
        // {
        //     $details[] = new TransactionDetail([
        //         'transactions_id' => $transaction->id,
        //         'products_id' => $product
        //     ]);
            
        //     Product::find($product)->decrement('quantity');
        // }

        // $transaction->details()->saveMany($details);

        // return ResponseFormatter::success($transaction);
    }
}
