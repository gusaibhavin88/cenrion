<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContentManager;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    public function index()
    {
        $blogs = $this->contentManager->getAllBlogs();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $blog = [
            'id' => null,
            'title' => '',
            'slug' => '',
            'category' => 'AI & Applied Tech',
            'reading_time' => '5',
            'author' => 'Cenrion Engineering',
            'date' => date('F Y'),
            'excerpt' => '',
            'content' => '',
            'status' => 'published',
        ];
        $isEdit = false;

        return view('admin.blogs.form', compact('blog', 'isEdit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'required|string|max:100',
            'reading_time' => 'required|string|max:20',
            'author' => 'required|string|max:100',
            'date' => 'required|string|max:50',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:published,draft',
        ]);

        $this->contentManager->saveBlog($validated);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article published successfully.');
    }

    public function edit(string $id)
    {
        $blog = $this->contentManager->findBlog($id);
        if (!$blog) {
            return redirect()->route('admin.blogs.index')->with('error', 'Article not found.');
        }

        $isEdit = true;
        return view('admin.blogs.form', compact('blog', 'isEdit'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255',
            'category' => 'required|string|max:100',
            'reading_time' => 'required|string|max:20',
            'author' => 'required|string|max:100',
            'date' => 'required|string|max:50',
            'excerpt' => 'required|string',
            'content' => 'required|string',
            'status' => 'required|in:published,draft',
        ]);

        $this->contentManager->saveBlog($validated, $id);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog article updated successfully.');
    }

    public function destroy(string $id)
    {
        $this->contentManager->deleteBlog($id);
        return redirect()->route('admin.blogs.index')->with('success', 'Blog article deleted successfully.');
    }
}
