<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model implements HasMedia
{
    use HasFactory, HasSlug, InteractsWithMedia;

    protected $guarded = [];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this
            ->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('featured_image');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFeaturedImages(string $collection = 'featured_image', string $conversion = 'preview')
    {

        $mediaItems = $this->getMedia($collection);

        if ($conversion) {

            return $mediaItems->map(function ($media) use ($conversion) {

                return $media->hasGeneratedConversion($conversion) ? $media->getUrl($conversion) : $media->getUrl();

            });

        }

        return $mediaItems;

    }

    public function getBlogHighlightStringAttribute()
    {
        $data = json_decode($this->blog_highlight, true);

        return is_array($data) ? implode(',', array_filter(array_map('trim', $data))) : '';
    }
}
