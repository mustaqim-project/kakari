<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Podcast extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'playlist_id',
        'title',
        'slug',
        'description',
        'audio_file',
        'cover_image',
        'duration',
        'publish_date',
        'is_featured',
        'is_active'
    ];

    protected $casts = [
        'publish_date' => 'datetime',
        'is_featured' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function playlist()
    {
        return $this->belongsTo(PodcastPlaylist::class, 'playlist_id');
    }

    public function getAudioUrlAttribute()
    {
        return asset('storage/' . $this->audio_file);
    }

    public function getCoverImageUrlAttribute()
    {
        return $this->cover_image ? asset('storage/' . $this->cover_image) : null;
    }

    public function getFormattedDurationAttribute()
    {
        $minutes = floor($this->duration / 60);
        $seconds = $this->duration % 60;
        return sprintf('%02d:%02d', $minutes, $seconds);
    }
}
