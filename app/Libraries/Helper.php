<?php

/**
 * Format data response
 *
 * @param string $asset
 * @return string path
 */
if (!function_exists('publicSrc')) {
    function publicSrc($src, $path = 'statics/files/')
    {
        if (!$src) {
            return asset('assets/img/no-image.jpg');
        }
        return asset("{$path}{$src}");
    }
}
