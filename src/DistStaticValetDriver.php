<?php

namespace Valet\Drivers\Custom;

use Valet\Drivers\LaravelValetDriver;

class DistStaticValetDriver extends LaravelValetDriver
{
    /**
     * Determine if the driver serves the request.
     */
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return file_exists($sitePath.'/dist/index.html');
    }

    /**
     * Determine if the incoming request is for a static file.
     */
    public function isStaticFile(string $sitePath, string $siteName, string $uri)/*: string|false */
    {
        if (file_exists($staticFilePath = $sitePath . '/dist/' . $uri)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     */
    public function frontControllerPath(string $sitePath, string $siteName, string $uri): ?string
    {
        if (substr($uri, -1) === '/') {
            $uri = 'index.html';
        }
        return $sitePath.'/dist/'.$uri;
    }
}