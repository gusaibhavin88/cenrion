<?php

namespace App\Http\Controllers;

use App\Services\ContentManager;

class CareersController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    /**
     * Display the Careers page with dynamic open vacancies.
     */
    public function index()
    {
        $vacancies = $this->contentManager->getActiveVacancies();

        return view('pages.careers', compact('vacancies'));
    }
}
