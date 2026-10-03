<?php

namespace App\Support;

use Cloudinary\Cloudinary;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

class Media
{
    //Upload ke Cloudinary, return URL publik
    public static function upload(UploadedFile $file, string $folder): string
    {
        $result = self::client()->uploadApi()->upload($file->getRealPath(), [
            'folder' => 'portfolio/'.$folder,
            'resource_type' => 'auto',
        ]);

        return $result['secure_url'];
    }

    //Hapus file dari Cloudinary (path statis / lama diabaikan)
    public static function delete(?string $url): void
    {
        if (! $url || ! preg_match('#res\.cloudinary\.com/[^/]+/(image|video|raw)/upload/(?:v\d+/)?(.+)$#', $url, $match)) {
            return;
        }

        [, $type, $publicId] = $match;
        if ($type !== 'raw') {
            $publicId = preg_replace('/\.[^.\/]+$/', '', $publicId);
        }

        self::client()->uploadApi()->destroy($publicId, ['resource_type' => $type]);
    }

    //URL Cloudinary dipakai langsung, path lain dianggap file di folder public/
    public static function url(?string $path): ?string
    {
        if (! $path) {
            return null;
        }

        return Str::startsWith($path, ['http://', 'https://']) ? $path : asset($path);
    }

    private static function client(): Cloudinary
    {
        return new Cloudinary(config('services.cloudinary.url'));
    }
}
