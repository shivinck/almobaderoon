<?php

if (!function_exists('environment_asset')) {
    function environment_asset($path) {
        $minified_path = str_replace('.css', '.min.css', $path);
        $minified_path = str_replace('.js', '.min.js', $minified_path);
        return app()->environment('production') ? asset($minified_path) : asset($path);
    }
}
