<?php

namespace App\Http\Controllers;

use App\Services\ContentManager;

class InsightsController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    /**
     * Display the insights listing page.
     */
    public function index()
    {
        $articles = $this->contentManager->getPublishedBlogs();

        return view('pages.insights.index', [
            'articles' => $articles,
        ]);
    }

    /**
     * Display a single insight article.
     */
    public function show(string $slug)
    {
        $article = $this->contentManager->findBlogBySlug($slug);

        if (!$article) {
            abort(404);
        }

        // Fetch related articles (excluding the current one)
        $all = $this->contentManager->getPublishedBlogs();
        $related = array_slice(array_values(array_filter($all, fn($a) => ($a['slug'] ?? '') !== $slug)), 0, 3);

        return view('pages.insights.show', compact('article', 'related'));
    }
}
