<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\ContentManager;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    protected ContentManager $contentManager;

    public function __construct(ContentManager $contentManager)
    {
        $this->contentManager = $contentManager;
    }

    public function index()
    {
        $vacancies = $this->contentManager->getAllVacancies();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        $vacanciesCount = count($this->contentManager->getAllVacancies());
        $vacancy = [
            'id' => null,
            'title' => '',
            'department' => 'Platform Engineering',
            'type' => 'Full-time • Remote',
            'description' => '',
            'tech_stack' => [],
            'apply_url' => '',
            'status' => 'active',
            'order' => $vacanciesCount + 1,
        ];
        $isEdit = false;

        return view('admin.vacancies.form', compact('vacancy', 'isEdit'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'description' => 'required|string',
            'tech_stack' => 'nullable|string',
            'apply_url' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'order' => 'nullable|integer|min:1',
        ]);

        $this->contentManager->saveVacancy($validated);

        return redirect()->route('admin.vacancies.index')->with('success', 'Open vacancy created successfully.');
    }

    public function edit(string $id)
    {
        $vacancy = $this->contentManager->findVacancy($id);
        if (!$vacancy) {
            return redirect()->route('admin.vacancies.index')->with('error', 'Vacancy not found.');
        }

        $isEdit = true;
        return view('admin.vacancies.form', compact('vacancy', 'isEdit'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'department' => 'required|string|max:100',
            'type' => 'required|string|max:100',
            'description' => 'required|string',
            'tech_stack' => 'nullable|string',
            'apply_url' => 'nullable|string',
            'status' => 'required|in:active,inactive',
            'order' => 'nullable|integer|min:1',
        ]);

        $this->contentManager->saveVacancy($validated, $id);

        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy updated successfully.');
    }

    public function destroy(string $id)
    {
        $this->contentManager->deleteVacancy($id);
        return redirect()->route('admin.vacancies.index')->with('success', 'Vacancy deleted successfully.');
    }
}
