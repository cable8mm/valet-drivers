<?php

namespace Valet\Drivers\Custom;

use Valet\Drivers\LaravelValetDriver;

class ZeroboardValetDriver extends LaravelValetDriver
{
    /**
     * Determine if the driver serves the request.
     */
    public function serves(string $sitePath, string $siteName, string $uri): bool
    {
        return is_dir($sitePath.'/outlogin_skin');
    }

    /**
     * Determine if the incoming request is for a static file.
     *
     * @return string|false
     */
    public function isStaticFile(string $sitePath, string $siteName, string $uri)/*: string|false */
    {
        if (file_exists($staticFilePath = $sitePath.'/'.$uri)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     */
    public function frontControllerPath(string $sitePath, string $siteName, string $uri): ?string
    {
        $_SERVER['DOCUMENT_ROOT'] = $sitePath;
        $_SERVER['SCRIPT_FILENAME'] = $sitePath.'index.php';
        $_SERVER['SCRIPT_NAME'] = 'index.php';
        $_SERVER['PHP_SELF'] = '/index.php';

        return $sitePath.'/index.php';
    }
}
