<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Validator;
use DB;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::orderBy('id', 'DESC')->get();
        return view('english.blog.index', compact('blog'));
    }

    public function create()
    {
        $category = DB::table('categories')->orderBy('id', 'DESC')->get();
        return view('english.blog.create', compact('category'));
    }

    public function edit($id)
    {
        $blog = Blog::findorfail($id);
        $category = DB::table('categories')->orderBy('id', 'DESC')->get();
        return view('english.blog.edit', compact('category', 'blog'));
    }

    public function blog_create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        
        $blog = new Blog();
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->category_id = $request->input('category_id');
        if($request->has('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('blog'), $fileNameToStore);
            $blog->image  = $fileNameToStore;
        }
        $blog->save();
        return redirect()->route('admin_blog')->with('success', 'Information updated succesfully');
    }

    public function blog_edit(Request $request, Blog $blog)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:200',
            'description' => 'required',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:5000',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->with('error', $validator->errors()->first());
        }
        
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->category_id = $request->input('category_id');
        if($request->has('image'))
        {
            if(file_exists(asset('blog'.'/'.$blog->image)))
            {
                \File::delete(asset('blog'.'/'.$blog->image));
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename        = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension       = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $filepath        = $request->file('image')->move(public_path('blog'), $fileNameToStore);
            $blog->image  = $fileNameToStore;
        }
        $blog->save();
        return redirect()->route('admin_blog')->with('success', 'Information updated succesfully');
    }

    public function blog_delete($id)
    {
        $blog = Blog::findorfail($id);
        if(file_exists(asset('blog'.'/'.$blog->image)))
        {
            \File::delete(asset('blog'.'/'.$blog->image));
        }
        $blog->delete();
        return redirect()->route('admin_blog')->with('success', 'Information updated succesfully');
    }
}
