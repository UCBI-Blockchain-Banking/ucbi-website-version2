<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use App\Models\TokenInfo;
use App\Models\TokenSale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TokenSaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tokensale = TokenSale::orderBy('id','desc')->get();
        return view('backend.pages.contribution.index',compact('tokensale'));
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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

        ],[
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
        $token_sale->country = $request->country;
        $token_sale->comments = $request->comments;

        $token_sale->verify = $request->input('verify')== TRUE ? '1':'0';
        $token_sale->status = $request->input('status')== TRUE ? '1':'0';
        $token_sale->save();

        $notification = array(
            'msg' =>'A New Contribution has Added ',
            'type' =>'success',
        );
        return redirect()->back()->with($notification);
    }




    public function update(Request $request, $id)
    {
        $token_sale = TokenSale::find($id);

        $validator = Validator::make($request->all(), [
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

        ],[
            'amount.required' =>'The amount field is required.',
            'wallet.required' =>'The  Payment Wallet Address field is required.',
            'txhash.required' =>'The Transaction Hash  field is required. ',
            'twallet.required' =>'The Token Receiving Wallet Address field is required.',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }



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

        $token_sale->country = $request->country;
        $token_sale->comments = $request->comments;

        $token_sale->verify = $request->input('verify')== TRUE ? '1':'0';
        $token_sale->status = $request->input('status')== TRUE ? '1':'0';
        $token_sale->update();

        $notification = array(
            'msg' =>'Contribution Updated Successfully ',
            'type' =>'success',
        );
        return redirect()->back()->with($notification);
    }


    public function destroy($id)
    {
        $token_sale = TokenSale::find($id);
        //delete the image

        $token_sale->delete();

            $notification = array(
                'msg' =>'Contribution Deleted',
                'type' =>'danger',
            );
            return redirect()->back()->with($notification);

    }

    //token info

    public  function tokenInfo(){
        $token_info = TokenInfo::where('id','1')->first();
        return view('backend.pages.contribution.token-info',compact('token_info'));
    }

    public function updateTokenInfo(Request $request){
        $token_info = TokenInfo::where('id', '1')->first();
        $rules=[
//            'site_logo' => 'required',
        ];
        $request->validate($rules);

        $token_info->title = $request->title;
        $token_info->description = $request->description;
        $token_info->contract = $request->contract;
        $token_info->token_price = $request->token_price;
        $token_info->btc_wallet = $request->btc_wallet;
        $token_info->eth_wallet = $request->eth_wallet;
        $token_info->usdt_wallet = $request->usdt_wallet;
        $token_info->usdc_wallet = $request->usdc_wallet;
        $token_info->bnb_wallet = $request->bnb_wallet;
        $token_info->xrp_wallet = $request->xrp_wallet;
        $token_info->doge_wallet = $request->doge_wallet;
        $token_info->ada_wallet = $request->ada_wallet;
        $token_info->ltc_wallet = $request->ltc_wallet;
        $token_info->verify = $request->verify;
        $token_info->status = $request->status;

        $token_info->update();

        $notification = array(
            'msg' =>'Token Info Updated',
            'alert-type' =>'success',
        );
        return redirect()->back()->with($notification);
    }
}
