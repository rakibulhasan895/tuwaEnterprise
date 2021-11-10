<?php

namespace App\Http\Controllers;
use App\Http\Requests\blogRequest;

use App\Models\blog;
use App\Models\category;
use App\Models\tag;
use DB;
//use Illuminate\Support\Str;
//use File;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

class BlogController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function archives($month, $year) {
		$archive = DB::select('select year(created_at) as year, month(created_at) as month from blogs group by year(created_at), month(created_at)');
		/* $data = DB::table('blogs')
		->whereYear('created_at', Carbon::now()->year)
		->whereMonth('created_at', Carbon::now()->month)
		->get(); */
		return view('admin.blog.local', compact('archive'));
	}
	public function index() {
		$data = blog::latest()->paginate(10);
		return view('admin.blog.index', compact('data'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		$data       = blog::get();
		$tags       = tag::all();
		$categories = category::all();
		return view('admin.blog.create', compact('data', 'tags', 'categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(blogRequest $request) {

		$input = $request->all();
		if ($image = $request->file('image')) {
			$destinationPath = 'image/';
			$blogImage       = date('YmdHis').".".$image->getClientOriginalExtension();
			$image->move($destinationPath, $blogImage);
			$input['image'] = "$blogImage";
		}

		blog::create($input);

		return redirect()->route('blogs.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function show(blog $blog) {
		return view('admin.blog.show', compact('blog'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function edit(blog $blog) {
		$data = blog::get();
		return view('admin.blog.edit', compact('blog', 'data'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, blog $blog) {
		$request->validate([
				'title'   => 'required',
				'details' => 'required'
			]);

		$input = $request->all();

		if ($image = $request->file('image')) {
			$destinationPath = 'image/';
			$blogImage       = date('YmdHis').".".$image->getClientOriginalExtension();
			$image->move($destinationPath, $blogImage);
			$input['image'] = "$blogImage";
		} else {
			unset($input['image']);
		}

		$blog->update($input);
		return redirect()->route('blogs.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\blog  $blog
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(blog $blog) {
		if ($blog) {
			if (file_exists(public_path($blog->image))) {
				unlink(public_path($blog->image));
			}

			$blog->delete();
			Session::flash('Post deleted successfully');
		}

		return redirect()->back();

	}
}
