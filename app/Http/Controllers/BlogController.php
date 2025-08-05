<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function create()
    {
        return view('dashboard.add-blog');
    }

    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog', compact('blogs'));
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->increment('views');
        return view('singleBlog', compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:20048',
            'description' => 'required|string'
        ]);

        try {
            $data = $request->only(['title', 'slug', 'description']);

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('blogs', 'public');
            }

            $data['views'] = 0;

            Blog::create($data);

            return redirect()->route('add.blog')->with('success', 'Blog created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Blog creation failed. Please try again.');
        }
    }

    public function indexAdmin()
    {
        $blogs = Blog::latest()->get();
        return view('dashboard.allblogs', compact('blogs'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('dashboard.editblog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:blogs,slug,' . $id,
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:20048',
        ]);

        try {
            $blog = Blog::findOrFail($id);
            $data = $request->only(['title', 'slug', 'description']);

            if ($request->hasFile('image')) {
                $data['image'] = $request->file('image')->store('blogs', 'public');
            }

            $blog->update($data);

            return redirect()->route('admin.blogs')->with('success', ' Blog updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', ' Failed to update the blog. Try again.');
        }
    }

    public function destroy($id)
    {
        try {
            $blog = Blog::findOrFail($id);
            $blog->delete();

            return redirect()->route('admin.blogs')->with('success', 'Blog deleted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', ' Failed to delete the blog.');
        }
    }
}
