<?php

namespace App\Services;

use App\Models\Admin;
use App\Models\Blog;
use App\Models\Vacancy;
use App\Models\NavbarSetting;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ContentManager
{
    protected string $storageDir;
    protected ?bool $dbAvailable = null;

    public function __construct()
    {
        $this->storageDir = storage_path('app/data');
        if (!is_dir($this->storageDir)) {
            mkdir($this->storageDir, 0775, true);
        }
    }

    /**
     * Determine if MySQL database connection is live and tables exist.
     */
    public function isDbConnected(): bool
    {
        if ($this->dbAvailable !== null) {
            return $this->dbAvailable;
        }

        try {
            DB::connection()->getPdo();
            $this->dbAvailable = Schema::hasTable('blogs') && Schema::hasTable('vacancies') && Schema::hasTable('admins');
        } catch (\Throwable $e) {
            $this->dbAvailable = false;
        }

        return $this->dbAvailable;
    }

    /**
     * Read JSON data from file, initializing with defaults if missing.
     */
    protected function readJson(string $filename, array $default = []): array
    {
        $filepath = $this->storageDir . DIRECTORY_SEPARATOR . $filename;
        if (!file_exists($filepath)) {
            $this->writeJson($filename, $default);
            return $default;
        }

        $content = file_get_contents($filepath);
        if ($content === false || trim($content) === '') {
            return $default;
        }

        $data = json_decode($content, true);
        return is_array($data) ? $data : $default;
    }

    /**
     * Write JSON data to file safely.
     */
    protected function writeJson(string $filename, array $data): bool
    {
        $filepath = $this->storageDir . DIRECTORY_SEPARATOR . $filename;
        $json = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        return file_put_contents($filepath, $json, LOCK_EX) !== false;
    }

    /* --------------------------------------------------------------------------
     * ADMIN AUTHENTICATION
     * -------------------------------------------------------------------------- */

    public function validateAdmin(string $email, string $password): ?array
    {
        $email = trim(strtolower($email));

        // 1. Try MySQL Database
        if ($this->isDbConnected()) {
            try {
                $admin = Admin::whereRaw('LOWER(email) = ?', [$email])->first();
                if ($admin) {
                    if (Hash::check($password, $admin->password) || $admin->password === $password) {
                        return [
                            'id' => (string)$admin->id,
                            'name' => $admin->name,
                            'email' => $admin->email,
                        ];
                    }
                }
            } catch (\Throwable $e) {
                // fall through to JSON / fallback check
            }
        }

        // 2. Try JSON Data Store
        $admins = $this->getAdmins();
        foreach ($admins as $admin) {
            if (strtolower($admin['email']) === $email) {
                if ($admin['password'] === $password || (function_exists('password_verify') && password_verify($password, $admin['password']))) {
                    return [
                        'id' => $admin['id'] ?? 'admin-1',
                        'name' => $admin['name'] ?? 'Shoaib',
                        'email' => $admin['email'],
                    ];
                }
            }
        }

        // 3. Requested direct credentials match
        if ($email === 'shoaib06@gmail.com' && $password === 'Shoaib@5706') {
            return [
                'id' => 'admin-1',
                'name' => 'Shoaib',
                'email' => 'Shoaib06@gmail.com',
            ];
        }

        return null;
    }

    public function getAdmins(): array
    {
        if ($this->isDbConnected()) {
            try {
                $dbAdmins = Admin::all()->map(function ($a) {
                    return [
                        'id' => (string)$a->id,
                        'name' => $a->name,
                        'email' => $a->email,
                        'password' => $a->password,
                    ];
                })->toArray();

                if (!empty($dbAdmins)) {
                    return $dbAdmins;
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $defaultAdmins = [
            [
                'id' => 'admin-1',
                'name' => 'Shoaib',
                'email' => 'Shoaib06@gmail.com',
                'password' => 'Shoaib@5706',
            ],
        ];

        return $this->readJson('admins.json', $defaultAdmins);
    }

    /* --------------------------------------------------------------------------
     * BLOGS / INSIGHTS
     * -------------------------------------------------------------------------- */

    public function getAllBlogs(): array
    {
        if ($this->isDbConnected()) {
            try {
                $dbBlogs = Blog::orderBy('created_at', 'desc')->get()->map(function ($b) {
                    return [
                        'id' => (string)($b->custom_id ?: $b->id),
                        'db_id' => $b->id,
                        'slug' => $b->slug,
                        'title' => $b->title,
                        'category' => $b->category,
                        'category_slug' => $b->category_slug,
                        'reading_time' => (string)$b->reading_time,
                        'author' => $b->author,
                        'date' => $b->date,
                        'excerpt' => $b->excerpt,
                        'content' => $b->content,
                        'status' => $b->status,
                        'created_at' => (string)$b->created_at,
                        'updated_at' => (string)$b->updated_at,
                    ];
                })->toArray();

                if (!empty($dbBlogs)) {
                    return $dbBlogs;
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        return $this->readJson('blogs.json', []);
    }

    public function getPublishedBlogs(): array
    {
        if ($this->isDbConnected()) {
            try {
                $dbBlogs = Blog::published()->orderBy('created_at', 'desc')->get()->map(function ($b) {
                    return [
                        'id' => (string)($b->custom_id ?: $b->id),
                        'db_id' => $b->id,
                        'slug' => $b->slug,
                        'title' => $b->title,
                        'category' => $b->category,
                        'category_slug' => $b->category_slug,
                        'reading_time' => (string)$b->reading_time,
                        'author' => $b->author,
                        'date' => $b->date,
                        'excerpt' => $b->excerpt,
                        'content' => $b->content,
                        'status' => $b->status,
                        'created_at' => (string)$b->created_at,
                        'updated_at' => (string)$b->updated_at,
                    ];
                })->toArray();

                if (!empty($dbBlogs)) {
                    return $dbBlogs;
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $blogs = $this->getAllBlogs();
        return array_values(array_filter($blogs, fn($b) => ($b['status'] ?? 'published') === 'published'));
    }

    public function findBlog(string $id): ?array
    {
        if ($this->isDbConnected()) {
            try {
                $b = is_numeric($id) ? Blog::find($id) : Blog::where('custom_id', $id)->first();
                if ($b) {
                    return [
                        'id' => (string)($b->custom_id ?: $b->id),
                        'db_id' => $b->id,
                        'slug' => $b->slug,
                        'title' => $b->title,
                        'category' => $b->category,
                        'category_slug' => $b->category_slug,
                        'reading_time' => (string)$b->reading_time,
                        'author' => $b->author,
                        'date' => $b->date,
                        'excerpt' => $b->excerpt,
                        'content' => $b->content,
                        'status' => $b->status,
                        'created_at' => (string)$b->created_at,
                        'updated_at' => (string)$b->updated_at,
                    ];
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $blogs = $this->getAllBlogs();
        foreach ($blogs as $blog) {
            if ($blog['id'] === $id || (isset($blog['db_id']) && (string)$blog['db_id'] === $id)) {
                return $blog;
            }
        }
        return null;
    }

    public function findBlogBySlug(string $slug): ?array
    {
        if ($this->isDbConnected()) {
            try {
                $b = Blog::where('slug', $slug)->first();
                if ($b) {
                    return [
                        'id' => (string)($b->custom_id ?: $b->id),
                        'db_id' => $b->id,
                        'slug' => $b->slug,
                        'title' => $b->title,
                        'category' => $b->category,
                        'category_slug' => $b->category_slug,
                        'reading_time' => (string)$b->reading_time,
                        'author' => $b->author,
                        'date' => $b->date,
                        'excerpt' => $b->excerpt,
                        'content' => $b->content,
                        'status' => $b->status,
                        'created_at' => (string)$b->created_at,
                        'updated_at' => (string)$b->updated_at,
                    ];
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $blogs = $this->getAllBlogs();
        foreach ($blogs as $blog) {
            if (($blog['slug'] ?? '') === $slug) {
                return $blog;
            }
        }
        return null;
    }

    public function saveBlog(array $data, ?string $id = null): array
    {
        $title = trim($data['title'] ?? 'Untitled Article');
        $slug = !empty($data['slug']) ? Str::slug($data['slug']) : Str::slug($title);
        $category = trim($data['category'] ?? 'AI & Applied Tech');
        $categorySlug = Str::slug($category);
        $status = in_array($data['status'] ?? 'published', ['published', 'draft']) ? $data['status'] : 'published';

        $record = [
            'slug' => $slug,
            'title' => $title,
            'category' => $category,
            'category_slug' => $categorySlug,
            'reading_time' => (string)($data['reading_time'] ?? '5'),
            'author' => trim($data['author'] ?? 'Cenrion Engineering'),
            'date' => trim($data['date'] ?? date('F Y')),
            'excerpt' => trim($data['excerpt'] ?? ''),
            'content' => trim($data['content'] ?? ''),
            'status' => $status,
        ];

        // 1. Save to MySQL if available
        if ($this->isDbConnected()) {
            try {
                if ($id) {
                    $blog = is_numeric($id) ? Blog::find($id) : Blog::where('custom_id', $id)->first();
                    if ($blog) {
                        $blog->update($record);
                    } else {
                        $record['custom_id'] = $id;
                        $blog = Blog::create($record);
                    }
                } else {
                    $customId = 'blog-' . uniqid();
                    $record['custom_id'] = $customId;
                    $blog = Blog::create($record);
                }
            } catch (\Throwable $e) {
                // fall through to sync with JSON
            }
        }

        // 2. Always sync with JSON store
        $blogs = $this->readJson('blogs.json', []);
        $now = date('Y-m-d H:i:s');
        $jsonRecord = array_merge($record, [
            'id' => $id ?: ($record['custom_id'] ?? 'blog-' . uniqid()),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $found = false;
        if ($id) {
            foreach ($blogs as $idx => $existing) {
                if ($existing['id'] === $id) {
                    $jsonRecord['created_at'] = $existing['created_at'] ?? $now;
                    $blogs[$idx] = $jsonRecord;
                    $found = true;
                    break;
                }
            }
        }

        if (!$found) {
            array_unshift($blogs, $jsonRecord);
        }

        $this->writeJson('blogs.json', $blogs);
        return $jsonRecord;
    }

    public function deleteBlog(string $id): bool
    {
        if ($this->isDbConnected()) {
            try {
                $b = is_numeric($id) ? Blog::find($id) : Blog::where('custom_id', $id)->first();
                if ($b) {
                    $b->delete();
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $blogs = $this->readJson('blogs.json', []);
        $filtered = array_values(array_filter($blogs, fn($b) => $b['id'] !== $id));
        return $this->writeJson('blogs.json', $filtered);
    }

    /* --------------------------------------------------------------------------
     * OPEN VACANCIES / CAREERS
     * -------------------------------------------------------------------------- */

    public function getAllVacancies(): array
    {
        if ($this->isDbConnected()) {
            try {
                $dbVacancies = Vacancy::orderBy('order', 'asc')->get()->map(function ($v) {
                    return [
                        'id' => (string)($v->custom_id ?: $v->id),
                        'db_id' => $v->id,
                        'title' => $v->title,
                        'department' => $v->department,
                        'type' => $v->type,
                        'description' => $v->description,
                        'tech_stack' => $v->tech_stack ?? [],
                        'apply_url' => $v->apply_url,
                        'status' => $v->status,
                        'order' => (int)$v->order,
                        'created_at' => (string)$v->created_at,
                    ];
                })->toArray();

                if (!empty($dbVacancies)) {
                    return $dbVacancies;
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $vacancies = $this->readJson('vacancies.json', []);
        usort($vacancies, fn($a, $b) => ($a['order'] ?? 99) <=> ($b['order'] ?? 99));
        return $vacancies;
    }

    public function getActiveVacancies(): array
    {
        if ($this->isDbConnected()) {
            try {
                $dbVacancies = Vacancy::active()->get()->map(function ($v) {
                    return [
                        'id' => (string)($v->custom_id ?: $v->id),
                        'db_id' => $v->id,
                        'title' => $v->title,
                        'department' => $v->department,
                        'type' => $v->type,
                        'description' => $v->description,
                        'tech_stack' => $v->tech_stack ?? [],
                        'apply_url' => $v->apply_url,
                        'status' => $v->status,
                        'order' => (int)$v->order,
                        'created_at' => (string)$v->created_at,
                    ];
                })->toArray();

                if (!empty($dbVacancies)) {
                    return $dbVacancies;
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $vacancies = $this->getAllVacancies();
        return array_values(array_filter($vacancies, fn($v) => ($v['status'] ?? 'active') === 'active'));
    }

    public function findVacancy(string $id): ?array
    {
        if ($this->isDbConnected()) {
            try {
                $v = is_numeric($id) ? Vacancy::find($id) : Vacancy::where('custom_id', $id)->first();
                if ($v) {
                    return [
                        'id' => (string)($v->custom_id ?: $v->id),
                        'db_id' => $v->id,
                        'title' => $v->title,
                        'department' => $v->department,
                        'type' => $v->type,
                        'description' => $v->description,
                        'tech_stack' => $v->tech_stack ?? [],
                        'apply_url' => $v->apply_url,
                        'status' => $v->status,
                        'order' => (int)$v->order,
                        'created_at' => (string)$v->created_at,
                    ];
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $vacancies = $this->getAllVacancies();
        foreach ($vacancies as $vacancy) {
            if ($vacancy['id'] === $id || (isset($vacancy['db_id']) && (string)$vacancy['db_id'] === $id)) {
                return $vacancy;
            }
        }
        return null;
    }

    public function saveVacancy(array $data, ?string $id = null): array
    {
        $techStack = [];
        if (is_array($data['tech_stack'] ?? null)) {
            $techStack = $data['tech_stack'];
        } elseif (is_string($data['tech_stack'] ?? null)) {
            $techStack = array_values(array_filter(array_map('trim', explode(',', $data['tech_stack']))));
        }

        $applyUrl = trim($data['apply_url'] ?? '');
        if (empty($applyUrl)) {
            $titleEncoded = urlencode($data['title'] ?? 'Role');
            $applyUrl = "mailto:hello@cenrion.com?subject=Application for {$titleEncoded}";
        }

        $record = [
            'title' => trim($data['title'] ?? 'Software Engineer'),
            'department' => trim($data['department'] ?? 'Platform Engineering'),
            'type' => trim($data['type'] ?? 'Full-time • Remote'),
            'description' => trim($data['description'] ?? ''),
            'tech_stack' => $techStack,
            'apply_url' => $applyUrl,
            'status' => in_array($data['status'] ?? 'active', ['active', 'inactive']) ? $data['status'] : 'active',
            'order' => (int)($data['order'] ?? 1),
        ];

        // 1. Save to MySQL if available
        if ($this->isDbConnected()) {
            try {
                if ($id) {
                    $vac = is_numeric($id) ? Vacancy::find($id) : Vacancy::where('custom_id', $id)->first();
                    if ($vac) {
                        $vac->update($record);
                    } else {
                        $record['custom_id'] = $id;
                        $vac = Vacancy::create($record);
                    }
                } else {
                    $customId = 'job-' . uniqid();
                    $record['custom_id'] = $customId;
                    $vac = Vacancy::create($record);
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        // 2. Sync with JSON store
        $vacancies = $this->readJson('vacancies.json', []);
        $now = date('Y-m-d H:i:s');
        $jsonRecord = array_merge($record, [
            'id' => $id ?: ($record['custom_id'] ?? 'job-' . uniqid()),
            'created_at' => $now,
            'updated_at' => $now,
        ]);

        $found = false;
        if ($id) {
            foreach ($vacancies as $idx => $existing) {
                if ($existing['id'] === $id) {
                    $jsonRecord['created_at'] = $existing['created_at'] ?? $now;
                    $vacancies[$idx] = $jsonRecord;
                    $found = true;
                    break;
                }
            }
        }

        if (!$found) {
            $vacancies[] = $jsonRecord;
        }

        usort($vacancies, fn($a, $b) => ($a['order'] ?? 99) <=> ($b['order'] ?? 99));
        $this->writeJson('vacancies.json', $vacancies);
        return $jsonRecord;
    }

    public function deleteVacancy(string $id): bool
    {
        if ($this->isDbConnected()) {
            try {
                $vac = is_numeric($id) ? Vacancy::find($id) : Vacancy::where('custom_id', $id)->first();
                if ($vac) {
                    $vac->delete();
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        $vacancies = $this->readJson('vacancies.json', []);
        $filtered = array_values(array_filter($vacancies, fn($v) => $v['id'] !== $id));
        return $this->writeJson('vacancies.json', $filtered);
    }

    /* --------------------------------------------------------------------------
     * NAVBAR PAGES CONTROL (RADIO BUTTON MANAGED)
     * -------------------------------------------------------------------------- */

    public function getNavbarSettings(): array
    {
        $defaultNavbar = [
            'capabilities' => [
                'name' => 'Capabilities',
                'description' => 'AI & Automation, Software Engineering, Cloud & DevOps, Data & Analytics',
                'route' => 'capabilities',
                'status' => 'visible',
            ],
            'solutions' => [
                'name' => 'Solutions',
                'description' => 'Managed IT Services, Staff Augmentation, Product Engineering, Technology Advisory',
                'route' => 'solutions',
                'status' => 'visible',
            ],
            'about' => [
                'name' => 'About',
                'description' => 'Company mission, ethos, engineering leadership and origins',
                'route' => 'about',
                'status' => 'visible',
            ],
            'labs' => [
                'name' => 'Cenrion Labs',
                'description' => 'Dedicated innovation lab, open source, research & experiment prototypes',
                'route' => 'labs',
                'status' => 'visible',
            ],
            'insights' => [
                'name' => 'Insights (Blog)',
                'description' => 'Technical depth, architectural papers, and engineering articles',
                'route' => 'insights',
                'status' => 'visible',
            ],
            'careers' => [
                'name' => 'Careers',
                'description' => 'Engineering vacancies, open positions, and culture telemetry',
                'route' => 'careers',
                'status' => 'visible',
            ],
            'contact' => [
                'name' => 'Talk to Us (Contact CTA)',
                'description' => 'Direct consultation and contact inquiry CTA button',
                'route' => 'contact',
                'status' => 'visible',
            ],
        ];

        // 1. Try MySQL Database
        if ($this->isDbConnected()) {
            try {
                $dbSettings = NavbarSetting::all();
                if ($dbSettings->isNotEmpty()) {
                    $result = $defaultNavbar;
                    foreach ($dbSettings as $item) {
                        if (isset($result[$item->key])) {
                            $result[$item->key]['status'] = $item->status;
                        } else {
                            $result[$item->key] = [
                                'name' => $item->name,
                                'description' => $item->description,
                                'route' => $item->route,
                                'status' => $item->status,
                            ];
                        }
                    }
                    return $result;
                }
            } catch (\Throwable $e) {
                // fallback
            }
        }

        // 2. Try JSON Data Store
        $current = $this->readJson('navbar.json', $defaultNavbar);
        foreach ($defaultNavbar as $key => $meta) {
            if (!isset($current[$key])) {
                $current[$key] = $meta;
            } else {
                $current[$key]['name'] = $meta['name'];
                $current[$key]['description'] = $meta['description'];
                $current[$key]['route'] = $meta['route'];
                $current[$key]['status'] = $current[$key]['status'] ?? 'visible';
            }
        }

        return $current;
    }

    public function saveNavbarSettings(array $input): array
    {
        $current = $this->getNavbarSettings();

        foreach ($current as $key => &$item) {
            if (isset($input[$key])) {
                $val = strtolower(trim((string)$input[$key]));
                $item['status'] = ($val === 'hidden') ? 'hidden' : 'visible';

                // Save to MySQL if available
                if ($this->isDbConnected()) {
                    try {
                        NavbarSetting::updateOrCreate(
                            ['key' => $key],
                            [
                                'name' => $item['name'],
                                'description' => $item['description'] ?? '',
                                'route' => $item['route'],
                                'status' => $item['status'],
                            ]
                        );
                    } catch (\Throwable $e) {
                        // fallback
                    }
                }
            }
        }

        $this->writeJson('navbar.json', $current);
        return $current;
    }
}
