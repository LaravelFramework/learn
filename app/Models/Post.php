<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'slug',
        'title',
        'excerpt',
        'content',
        'published',
        'published_at'
    ];

    public function getPublishedPosts()
    {
        return self::latest( 'published_at' )
            ->published()
            ->get();
    }

    public function getUnPublishedPosts()
    {
        return self::latest( 'published_at' )
            ->unPublished()
            ->get();
    }

    public function scopePublished( $query )
    {
        $query
            ->where( 'published_at', '>=', Carbon::now() )
            ->where( 'published', '=', true );
    }

    public function scopeUnPublished( $query )
    {
        $query
            ->where( 'published', '=', false );
    }
}
