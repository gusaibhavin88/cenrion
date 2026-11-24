<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContentManager;

class DashboardController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    public function index()
    {
        $blogs = $this->contentManager->getAllBlogs();
        $vacancies = $this->contentManager->getAllVacancies();
        $navbar = $this->contentManager->getNavbarSettings();

        $stats = [
            'total_blogs' => count($blogs),
            'published_blogs' => count(array_filter($blogs, fn($b) => ($b['status'] ?? 'published') === 'published')),
            'draft_blogs' => count(array_filter($blogs, fn($b) => ($b['status'] ?? '') === 'draft')),
            'total_vacancies' => count($vacancies),
            'active_vacancies' => count(array_filter($vacancies, fn($v) => ($v['status'] ?? 'active') === 'active')),
            'visible_navbar' => count(array_filter($navbar, fn($n) => ($n['status'] ?? 'visible') === 'visible')),
            'hidden_navbar' => count(array_filter($navbar, fn($n) => ($n['status'] ?? '') === 'hidden')),
        ];

        $recentBlogs = array_slice($blogs, 0, 4);
        $recentVacancies = array_slice($vacancies, 0, 4);

        return view('admin.dashboard', compact('stats', 'recentBlogs', 'recentVacancies', 'navbar'));
    }
}
