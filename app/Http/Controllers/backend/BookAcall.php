<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class BookAcall extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = Contact::orderBy('id','desc')->get();
        return view('backend.pages.message.index',compact('message'));
    }

    public function status(Request $request){

    }

    public function readMsg(Request $request, $id){
        $message = Contact::find($id);
        $message->status = $request->input('status')== TRUE ? '1':'0';
        $message->update();

        $notification = array(
            'msg' =>'Message Status updated',
            'alert-type' =>'success',
        );

        return redirect()->route('admin.all.contact')->with($notification);
    }

    public function allSubscriber(){
        $subscriber = Subscriber::orderBy('id','desc')->get();
        return view('backend.pages.message.subscriber',compact('subscriber'));
    }

    public function subDestroy($id){
        $message = Subscriber::find($id);

        $message->delete();

        $notification = array(
            'msg' =>'Subscriber Deleted',
            'alert-type' =>'success',
        );

        return redirect()->route('admin.all.subscriber')->with($notification);

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
        //
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
        $message = Contact::find($id);

        $message->delete();

        $notification = array(
            'msg' =>'Message Deleted',
            'alert-type' =>'success',
        );

        return redirect()->route('admin.all.contact')->with($notification);
    }




}
