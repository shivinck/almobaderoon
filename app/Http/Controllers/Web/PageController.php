<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Calendar;
use App\Models\Course;
use App\Models\Service;
use App\Models\Faculty;
use App\Models\Journal;
use App\Models\News;
use App\Models\OutreachGuide;
use App\Models\ResearchGuide;
use App\Models\ResearchScholar;
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
        $meta = Meta::pageMeta('Home');
        $common_meta = Meta::pageMeta('Common Header');
        $services = [];
        return view('web.pages.home', compact('meta', 'common_meta'));
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
        $meta = Meta::pageMeta('Contact');
        $common_meta = Meta::pageMeta('Common Header');
        return view('web.pages.contact', compact('meta', 'common_meta'));
    }

    public function blogs(Request $request)
    {
        View::share('isHomePage', false);
        $blogs = News::publishedOrdered()->get();
        $meta = Meta::pageMeta('Blogs');
        $common_meta = Meta::pageMeta('Common Header');
        return view('web.pages.blogs', compact('blogs', 'meta', 'common_meta'));
    }

    public function blogView(Request $request, $slug)
    {
        View::share('isHomePage', false);
        $blog = News::findBySlug($slug);
        $meta = $blog->seo_tags;
        $common_meta = Meta::pageMeta('Common Header');
        return view('web.pages.blogView', compact('blog', 'meta', 'common_meta'));
    }

    public function about(Request $request)
    {
        View::share('isHomePage', false);
        $meta = Meta::pageMeta('About Us - Home Helpers');
        $common_meta = Meta::pageMeta('Common Header');
        return view('web.pages.about', compact('meta', 'common_meta'));
    }
    public function services(Request $request)
    {
        View::share('isHomePage', false);
        $meta = Meta::pageMeta('Services');
        $services = Service::publishedOrdered()->get();
        $blogs = News::publishedOrdered()->limit(3)->get();
        $common_meta = Meta::pageMeta('Common Header');
        return view('web.pages.services.index', compact('meta', 'services', 'blogs', 'common_meta'));
    }

    public function serviceView(Request $request, String $slug)
    {
        View::share('isHomePage', false);
        $common_meta = Meta::pageMeta('Common Header');
        $meta = Meta::pageMeta('About Us - Home Helpers');
        if (!view()->exists("web.pages.services.{$slug}")) {
            abort(404);
        }
        return view("web.pages.services.{$slug}", compact('common_meta', 'meta'));
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
