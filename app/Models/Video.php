<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'playlist_id',
        'title',
        'description',
        'code_frame',
    ];

    public function playlist()
    {
        return $this->belongsTo(Playlist::class, 'playlist_id');
    }

    // Get YouTube video ID from embedded code if applicable
    public function getVideoIdAttribute()
    {
        preg_match('/src=".*?(?:youtube\.com\/embed\/|youtu\.be\/)([\w\-]+)/', $this->code_frame, $matches);
        return $matches[1] ?? null;
    }

    // Get thumbnail from YouTube if applicable
    public function getThumbnailAttribute()
    {
        $videoId = $this->video_id;
        return $videoId ? "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg" : null;
    }
}
