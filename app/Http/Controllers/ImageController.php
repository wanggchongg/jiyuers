<?php namespace Jiyuers\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Jiyuers\Http\Controllers\BaseController;
use Jiyuers\Image\Controllers\SomelineImageController;
use Jiyuers\Image\SomelineImageService;
use Jiyuers\Models\Image\SomelineImage;

class ImageController extends BaseController
{

    public function postImage(Request $request)
    {
        $somelineImageService = new SomelineImageService();
        $file = $request->file('image');

        $somelineImage = null;
        try {
            /** @var SomelineImage $somelineImage */
            $somelineImage = $somelineImageService->handleUploadedFile($file);
        } catch (Exception $e) {
            return 'Failed to save: ' . $e->getMessage();
        }

        if (!$somelineImage) {
            return 'Failed to save uploaded image.';
        }

        $somelineImageId = $somelineImage->getSomelineImageId();
        return 'Saved: ' . $somelineImage->getImageUrl();
    }

    public function showOriginalImage($image_name)
    {
        return SomelineImageController::showImage('original', $image_name);
    }

}