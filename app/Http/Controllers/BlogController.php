<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function categories()
    {
        $categories = blogCategories();

        return view('frontend.pages.blog-categories', [
            'categories' => $categories,
            'title' => 'Blog Categories | ' . config('var.website_name'),
            'description' => ''
        ]);
    }

    public function search(Request $request)
    {
        $query = trim((string) $request->get('q', ''));

        $blogs = collect(config('blogs'));

        if ($query !== '') {
            $blogs = $blogs->filter(function ($blog) use ($query) {
                $tags = $blog['tags'] ?? [];

                if (! is_array($tags)) {
                    $tags = [$tags];
                }

                $searchable = strtolower(strip_tags($blog['content'] ?? '')) . ' ' . strtolower($blog['title'] ?? '') . ' ' . strtolower($blog['excerpt'] ?? '') . ' ' . strtolower($blog['category'] ?? '') . ' ' . strtolower(implode(' ', $tags));

                return str_contains($searchable, strtolower($query));
            })->values();
        }

        return view('frontend.pages.blog-search', [
            'query' => $query,
            'blogs' => $blogs,
            'title' => ($query !== '' ? 'Search Results for "' . $query . '"' : 'Search Blogs') . ' | ' . config('var.website_name'),
            'description' => ''
        ]);
    }

    public function category($slug)
    {
        $categoryName = $this->resolveCategoryName($slug);

        if (! $categoryName) {
            abort(404);
        }

        $blogs = collect(config('blogs'))
            ->filter(function ($blog) use ($categoryName) {
                return $this->normalizeCategory($blog['category'] ?? '') === $this->normalizeCategory($categoryName);
            })
            ->values();

        return view('frontend.pages.blog-category', [
            'categoryName' => $categoryName,
            'blogs' => $blogs,
            'title' => $categoryName . ' Blogs | ' . config('var.website_name'),
            'description' => ''
        ]);
    }

    public function bloginner($slug)
    {
        $blog = findBlog($slug);
      

        if (! $blog) {
            abort(404);
        }

        return view('frontend.pages.blogs.blog-inner', compact('blog'),
        [
            'title' => ($blog['title'] ?? 'Blog') . ' | ' . config('var.website_name'),
            'description' => ''
        ]);
    }

    private function resolveCategoryName($slug): ?string
    {
        $slug = Str::slug($slug);

        $aliases = [
            'in-the-spotlight' => 'Spotlight',
            'recently-published' => 'Spotlight',
        ];

        if (isset($aliases[$slug])) {
            return $aliases[$slug];
        }

        $category = collect(config('blogs'))
            ->pluck('category')
            ->filter()
            ->map(function ($category) {
                return ['name' => $category, 'slug' => Str::slug($category)];
            })
            ->firstWhere('slug', $slug);

        return $category['name'] ?? null;
    }

    private function normalizeCategory(string $category): string
    {
        return Str::slug($category);
    }
}
