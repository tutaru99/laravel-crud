<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TvSeries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image_url',
        'episode_number',
        'rating'
    ];
}
