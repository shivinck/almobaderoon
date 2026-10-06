<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function home(Request $request)
    {
        View::share('isHomePage', true);
        return view('web.pages.home');
    }

    public function about(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.about');
    }

    public function blogs(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.blogs');
    }

    public function blogDetail(Request $request, String $slug)
    {
        View::share('isHomePage', false);
        if (!view()->exists("web.pages.blogs.{$slug}")) {
            abort(404);
        }
        return view("web.pages.blogs.{$slug}");
    }

    public function caseStudies(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.caseStudies');
    }

    public function caseStudyDetail(Request $request, String $slug)
    {
        View::share('isHomePage', false);
        if (!view()->exists("web.pages.case-studies.{$slug}")) {
            abort(404);
        }
        return view("web.pages.case-studies.{$slug}");
    }

    public function scheduleConsulation(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.scheduleConsulation');
    }

    public function liquidation(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.liquidation');
    }

    public function serviceDetail(Request $request, String $slug)
    {
        View::share('isHomePage', false);
        if (!view()->exists("web.pages.service-categories.{$slug}")) {
            abort(404);
        }
        return view("web.pages.service-categories.{$slug}");
    }

    public function childServiceDetail(Request $request, String $parentSlug, String $childSlug)
    {
        View::share('isHomePage', false);
        if (!view()->exists("web.pages.services.{$childSlug}")) {
            abort(404);
        }
        return view("web.pages.services.{$childSlug}");
    }

    public function contact(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.contact');
    }



    public function sitemap()
    {
        $urls = [];
        $now = now()->toAtomString();

        $addUrl = function (string $loc, string $changefreq = 'monthly', string $priority = '0.8') use (&$urls, $now) {
            $urls[] = [
                'loc' => $loc,
                'lastmod' => $now,
                'changefreq' => $changefreq,
                'priority' => $priority,
            ];
        };

        // Static top-level pages
        $addUrl(route('get.home'), 'weekly', '1.0');
        $addUrl(route('get.about'));
        $addUrl(route('get.contact'));
        $addUrl(route('get.blogs'), 'weekly', '0.7');
        $addUrl(route('get.caseStudies'), 'weekly', '0.7');
        $addUrl(route('get.scheduleConsulation'));

        // Service category pages (resolved from existing view files)
        foreach ($this->viewSlugs('web/pages/service-categories') as $slug) {
            $addUrl(route('get.service', ['slug' => $slug]), 'monthly', '0.7');
        }

        // Blog detail pages
        foreach ($this->viewSlugs('web/pages/blogs') as $slug) {
            $addUrl(route('get.blogDetail', ['slug' => $slug]), 'weekly', '0.6');
        }

        // Case study detail pages
        foreach ($this->viewSlugs('web/pages/case-studies') as $slug) {
            $addUrl(route('get.caseStudyDetail', ['slug' => $slug]), 'monthly', '0.6');
        }

        $content = view('sitemap', compact('urls'));

        return Response::make($content, 200)->header('Content-Type', 'application/xml');
    }

    /**
     * Return the slugs (filenames without the .blade.php extension) of the
     * blade views located in the given path under resources/views.
     */
    private function viewSlugs(string $relativePath): array
    {
        $directory = resource_path('views/' . trim($relativePath, '/'));

        if (!is_dir($directory)) {
            return [];
        }

        $slugs = [];
        foreach (glob($directory . '/*.blade.php') ?: [] as $file) {
            $slugs[] = basename($file, '.blade.php');
        }

        sort($slugs);

        return $slugs;
    }
}
