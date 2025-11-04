<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(10);
        return view('backend.pages.blogs.index',compact('blogs'));
    }

    public function dateWillShow(Request $request)
    {
        $start_date = $request->start_date;
        $end_date = $request->end_date;

        $blogs = Blog::whereDate('created_at','>=',$start_date)
        ->whereDate('created_at','<=',$end_date)->orderBy('id','desc')
        ->paginate(100);



        return view('backend.pages.blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('backend.pages.blogs.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'cate_id' => 'required',
            'title' => 'required|unique:blogs|min:10',
            'slug' => 'required|unique:blogs|min:10',
            'image' => 'required',
        ];
        $request->validate($rules);

        $blogs = new Blog();

        $blogs->cate_id = $request->cate_id;
        //upload image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('public/uploads/blogs', $filename);
            $blogs->image = $filename;
        }
        $blogs->title = $request->title;
        if(empty($request->slug)){
            $blogs->slug = str::slug($request->title);
        }else{
            $blogs->slug = str::slug($request->slug);
        }
        $blogs->details = $request->details;
        $blogs->tags = $request->tags;
        $blogs->status = $request->input('status')== TRUE ? '1':'0';
        $blogs->homepage = $request->input('homepage')== TRUE ? '1':'0';

        $blogs->meta_title = $request->meta_title;
        $blogs->meta_descrip = $request->meta_descrip;
        $blogs->meta_keywords = $request->meta_keywords;
        $blogs->save();

        $notification = array(
            'msg' =>'Blog Added',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.all.blogs')->with($notification);
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
        $categories = Category::orderBy('id', 'desc')->get();
        $blogs = Blog::where('id',$id)->first();
        return view('backend.pages.blogs.edit', compact('categories','blogs'));
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
        $blogs = Blog::where('id',$id)->first();

        $rules = [
            'cate_id' => 'required',
            'title' => 'required',
        ];
        $request->validate($rules);

        $blogs->cate_id = $request->cate_id;

        if ($request->hasFile('image')) {
            //delete previous image
            $path = 'public/uploads/blogs/'.$blogs->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $file->move('public/uploads/blogs', $filename);
            $blogs->image = $filename;
        }
        $blogs->title = $request->title;
        if(empty($request->slug)){
            $blogs->slug = str::slug($request->title);
        }else{
            $blogs->slug = str::slug($request->slug);
        }
        $blogs->details = $request->details;
        $blogs->tags = $request->tags;
        $blogs->status = $request->input('status')== TRUE ? '1':'0';
        $blogs->homepage = $request->input('homepage')== TRUE ? '1':'0';

        $blogs->meta_title = $request->meta_title;
        $blogs->meta_descrip = $request->meta_descrip;
        $blogs->meta_keywords = $request->meta_keywords;
        $blogs->update();

        $notification = array(
            'msg' =>'Blog Updated',
            'alert-type' =>'success',
        );
        return redirect()->route('admin.all.blogs')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blogs = Blog::find($id);
        //delete the image
        if($blogs->image){
            $path = 'public/uploads/blogs/'.$blogs->image;
            if(File::exists($path)){
                File::delete($path);
            }
            $blogs->delete();

            $notification = array(
                'msg' =>'Blog Deleted',
                'alert-type' =>'success',
            );
            return redirect()->back()->with($notification);
        }
    }


}
