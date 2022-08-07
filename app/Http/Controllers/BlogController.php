<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blog;
    private $blogs;


    public function add(){
        return view('admin.blog.add-blog');
    }

      public function create(Request $request){
            Blog::newBlog($request);
          return redirect()->back()->with('message', 'Blog Created Successfully..');
      }

    public function manage()
    {
        $this->blogs = Blog::orderby('id', 'desc')->get();
        return view('admin.blog.manage-blog', ['blogs' => $this->blogs]);
    }

    public function edit($id)
    {
        $this->blog = Blog::find($id);
        return view('admin.blog.edit-blog', ['blog' => $this->blog]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/manage/blog')->with('message', 'Blog Info updated Successfully');
    }

    public function delete($id){
        $this->blog = Blog::find($id);
        $this->blog->delete();
        return redirect('/manage/blog')->with('message', 'Blog Deleted Successfully');
    }





}
