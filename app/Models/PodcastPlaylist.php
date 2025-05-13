<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PodcastPlaylist extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'cover_image',
        'is_featured',
        'is_active'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function podcasts()
    {
        return $this->hasMany(Podcast::class, 'playlist_id');
    }

    // Local scope for active playlists
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
