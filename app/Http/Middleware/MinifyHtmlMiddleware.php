<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use MatthiasMullie\Minify;

class MinifyHtmlMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        if (app()->environment('local')) {
            return $response;
        }

        if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $output = $response->getContent();
            $output = $this->minifyHtml($output);
            $response->setContent($output);
        }

        if ($response->headers->get('Content-Type') === 'text/css') {
            $output = $response->getContent();
            $output = $this->minifyCss($output);
            $response->setContent($output);
        }

        if ($response->headers->get('Content-Type') === 'application/javascript') {
            $output = $response->getContent();
            $output = $this->minifyJs($output);
            $response->setContent($output);
        }

        return $response;
    }

    protected function minifyHtml($content)
    {
        return preg_replace('/\s+/', ' ', $content);
    }

    protected function minifyCss($content)
    {
        $minifier = new Minify\CSS();
        $minifier->add($content);
        return $minifier->minify();
    }

    protected function minifyJs($content)
    {
        $minifier = new Minify\JS();
        $minifier->add($content);
        return $minifier->minify();
    }
}
