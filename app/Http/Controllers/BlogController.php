<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_blog = Blog::orderBy('id','desc')->where('status', '0')->paginate('10');
        return view('frontend.blogs',compact('all_blog'));
    }

    public function blogDetails($cat_slug, $slug){
        $category = Category::where('status','0')->get();
        $recent_blog = Blog::where('status','0')->orderBy('id','desc')->limit('2')->get();

        if(Category::where('slug',$cat_slug)->where('status','0')->exists()){
            if(Blog::where('slug',$slug)->where('status','0')){
                $blog_details_post = Blog::where('slug',$slug)->first();
                return view('frontend.blogs-details',compact('blog_details_post','category','recent_blog'));
            }else{
                return redirect('/')->with('msg','Blog slug not found');
            }
        }else{
            return redirect('/')->with('msg','Category slug not found');
        }

    }

    public function allCategoryPost($slug){
        $chunk_catagory = Category::where('slug', $slug)->where('status','0')->first();
        if(empty($chunk_catagory)) {
            $notification = array(
                'msg' =>'No Category found',
                'type' =>'danger',
            );
            return redirect()->back()->with($notification);
        }
        $blog_post_count = Blog::where('status','0')->where('cate_id', $chunk_catagory->id)->get();

        $category = Category::orderBy('id','desc')->where('status','0')->get();
        $all_post = Blog::orderBy('id','desc')->where('status','0')->get();
        $recent_blog = Blog::where('status','0')->orderBy('id','desc')->limit('2')->get();

        return view('frontend.category-posts',compact('category','chunk_catagory','all_post','recent_blog','blog_post_count'));
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
        //
    }
}
