<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Contact;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(){
        $landing_blogs = Blog::orderBy('id','desc')->where('status','0')->where('homepage','1')->get();
        return view('frontend.landing',compact('landing_blogs'));
    }

    public function company(){
        return view('frontend.company');
    }

    public function investment(){
        return view('frontend.investment');
    }

    public function advisory(){
        return view('frontend.advisory');
    }

    public function tokenization(){
        return view('frontend.tokenization');
    }
    public function faq(){
        // Check if FAQ data exists in the cache
        $faqData = Cache::get('faq_data');
        //$faqData = Cache::pull('faq_data');

        // If FAQ data does not exist in the cache, retrieve it from the database
        //  if (!$faqData) {
        //     // Retrieve FAQ data from the database
        //     $faqData = Blog::all(); // Example query, adjust as needed

        //      // Store FAQ data in the cache with a 1-hour expiration time
        //     Cache::put('faq_data', $faqData, now()->addMinutes(1));
        // }

        $formData = Cache::get('form_data');


        // Pass the FAQ data to the view using compact()
        return view('frontend.faq', compact('faqData','formData'));
    }

    public function faqStore(Request $request){
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);


         // Retrieve existing form data from the cache or initialize an empty array
        $formData = Cache::get('form_data', []);

        // Append the new data to the array
        $formData[] = $validatedData;

        // Store the updated array back into the cache
        Cache::put('form_data', $formData, now()->addMinutes(3));

        $notification = [
            'msg' =>'Form data stored successfully!',
            'type' =>'primary',
        ];

        return redirect()->back()->with($notification);


    }





    public function contact(){
        return view('frontend.contact');
    }
    public function contactStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The :attribute field should not contain any HTML tags.');
                }
            }],
            'email' => 'required|email',
            'mobile' => ['nullable', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The :attribute field should not contain any HTML tags.');
                }
            }],
            'subject' => ['required', 'string', function ($attribute, $value, $fail) {
                if (strip_tags($value) !== $value) {
                    $fail('The :attribute field should not contain any HTML tags.');
                }
            }],
            'message' => ['required', 'string', function ($attribute, $value, $fail) {
                // Check if the 'details' field contains any HTML tags
                if (strip_tags($value) !== $value) {
                    $fail('The :attribute field should not contain any HTML tags.');
                }
            }],

        ],[
            'name.required' =>'Please provide your full name for accurate identification.',
            'email.required' =>'Enter your email address to receive our response. Ensure that it is valid and accessible.',
            'mobile.required' =>'If you prefer to be contacted by phone, please provide your contact number.',
            'subject.required' =>'Indicate the purpose of your inquiry (e.g., Account Setup, Token Management, ICO/STO Consulting, Technical Support, General Inquiry).',
            'message.required' =>' Provide details of your inquiry or request. The more information you provide, the better we can assist you.',
        ]);

        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->mobile = $request->mobile;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();



        $notification = array(
            'msg' =>'We have received your Message. We will contact you in 12 hours',
            'type' =>'primary',
        );
        return redirect()->back()->with($notification);


    }

//    public function subuStore(Request $request){
//        $rules = [
//            'email' => 'required|email|unique:subscribers,email',
//        ];
//        $request->validate($rules);
//
//        $contact = new Subscriber();
//        $contact->email = $request->email;
//        $contact->save();
//
//
//            $notification = array(
//                'msg' =>'Thank you for Subscribe, You may book a call now!',
//                'type' =>'success',
//            );
//
//        return redirect()->route('home.contact')->with($notification);
//
//    }

    public function subuStore(Request $request){
        $rules = [
            'email' => 'required|email|unique:subscribers,email',
        ];
        $messages = [
            'email.unique' => 'This email has already been subscribed.',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $errorMsg = implode('<br>', $errors);

            $notification = array(
                'msg' => $errorMsg,
                'type' => 'danger',
            );

            return redirect('/'.'#subscribe')->with($notification)->withInput();
        }

        $contact = new Subscriber();
        $contact->email = $request->email;
        $contact->save();

        $notification = array(
            'msg' =>'Thank you for Subscribe, You may book a call now!',
            'type' =>'success',
        );

        return redirect()->route('home.contact')->with($notification);
    }
}
