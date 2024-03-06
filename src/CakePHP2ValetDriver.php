<?php

namespace Valet\Drivers\Custom;

use Valet\Drivers\LaravelValetDriver;

class CakePHP2ValetDriver extends LaravelValetDriver
{
    /**
     * Determine if the driver serves the request.
     */
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return is_dir($sitePath.'/lib/Cake');
    }

    /**
     * Determine if the incoming request is for a static file.
     */
    public function isStaticFile(string $sitePath, string $siteName, string $uri)/*: string|false */
    {
        if (file_exists($staticFilePath = $sitePath.'/app/webroot'.$uri)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     */
    public function frontControllerPath(string $sitePath, string $siteName, string $uri): ?string
    {
        $_SERVER['DOCUMENT_ROOT'] = $sitePath.'/app/webroot';
        $_SERVER['SCRIPT_FILENAME'] = $sitePath.'/app/webroot/index.php';
        $_SERVER['SCRIPT_NAME'] = 'index.php';
        $_SERVER['PHP_SELF'] = 'index.php';

        if (preg_match('/\.php/', $uri)) {
            return $sitePath.'/app/webroot/'.$uri;
        }

        return $sitePath.'/app/webroot/index.php';
    }
}
