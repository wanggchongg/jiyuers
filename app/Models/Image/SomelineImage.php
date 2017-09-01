<?php namespace App\Models\Image;


use App\Image\Models\SomelineImageBase;

class SomelineImage extends SomelineImageBase
{

    /**
     * @param null $type
     * @return null|string
     */
    public function getDefaultImageUrl($type = null)
    {
//        return url('images/default.jpg');
        return null;
    }

    /**
     * For usage: $somelineImage->cover_image_url;
     *
     * @return null|string
     */
    public function getCoverImageUrlAttribute()
    {
        return $this->getTypeImageUrl('cover');
    }

}