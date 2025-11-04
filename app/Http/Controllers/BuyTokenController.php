<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\TokenInfo;
use App\Models\TokenSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BuyTokenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token_info = TokenInfo::where('id','1')->first();
        return view('frontend.buy-token.index',compact('token_info'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buyTXsubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The amount field should not contain any HTML tags.');
                }
            }],
            'amount' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The amount field should not contain any HTML tags.');
                }
            }],
            'wallet' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The Payment Wallet Address field should not contain any HTML tags.');
                }
            }],
            'txhash' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The Transaction Hash field should not contain any HTML tags.');
                }
            }],
            'twallet' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The Token Receiving field should not contain any HTML tags.');
                }
            }],
            'email' => 'required|email',

        ],[
            'amount.title' =>'The Currency field is required',
            'amount.required' =>'The amount field is required.',
            'wallet.required' =>'The  Payment Wallet Address field is required.',
            'txhash.required' =>'The Transaction Hash  field is required. ',
            'twallet.required' =>'The Token Receiving Wallet Address field is required.',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $token_sale = new TokenSale();

        $token_sale->title = $request->title;
        $token_sale->amount = $request->amount;
        $token_sale->wallet = $request->wallet;
        $token_sale->txhash = $request->txhash;
        $token_sale->twallet = $request->twallet;
        $token_sale->email = $request->email;
        //$ipAddress = Request::ip();
        $ipAddress = $request->header('X-Forwarded-For') ??
            $request->server('HTTP_CLIENT_IP') ??
            $request->server('REMOTE_ADDR') ??
            $request->ip();

        $token_sale->ip_address = $ipAddress;
        $token_sale->save();

        $notification = array(
            'msg' =>'We have received your request. We will verify payment and send UCBI Token to your Wallet! ',
            'type' =>'primary',
        );
        return redirect()->back()->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
