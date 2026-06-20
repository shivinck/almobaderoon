<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\News;
use App\Models\Meta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function privacyPolicy(Request $request)
    {
        View::share('isHomePage', false);
        $meta = Meta::pageMeta('Privacy Policy');
        $common_meta = Meta::pageMeta('Common Header');
        return view('web.pages.privacyPolicy', compact('meta', 'common_meta'));
    }

    public function terms(Request $request)
    {
        View::share('isHomePage', false);
        $common_meta = Meta::pageMeta('Common Header', 'common_meta');
        return view('web.pages.terms');
    }

    public function contact(Request $request)
    {
        View::share('isHomePage', false);
        return view('web.pages.contact');
    }



    public function sitemap()
    {
        $urls = [];

        // Static URLs
        $staticRoutes = [
            route('get.home'),
            route('get.privacyPolicy'),
            route('get.about'),
            route('get.contact'),
            route('get.blogs'),
            route('get.services'),
        ];

        foreach ($staticRoutes as $url) {
            $urls[] = [
                'loc' => $url,
                'lastmod' => now()->toAtomString(),
                'changefreq' => 'monthly',
                'priority' => '0.8'
            ];
        }

        // Dynamic Blogs
        $blogs = News::publishedOrdered()->get();
        foreach ($blogs as $blog) {
            $urls[] = [
                'loc' => route('get.blogView', ['slug' => $blog->slug]),
                'lastmod' => $blog->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ];
        }

        // Dynamic Services
        $services = Service::publishedOrdered()->get();
        foreach ($services as $service) {
            $urls[] = [
                'loc' => route('get.serviceView', ['slug' => $service->slug]),
                'lastmod' => $service->updated_at->toAtomString(),
                'changefreq' => 'weekly',
                'priority' => '0.7'
            ];
        }

        // Generate XML
        $content = view('sitemap', compact('urls'));

        return Response::make($content, 200)->header('Content-Type', 'application/xml');
    }
}
