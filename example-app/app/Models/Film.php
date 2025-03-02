<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    public function genre()
{
    return $this->belongsTo(Genre::class, 'genre_id');
}

    protected $table = "Films";
    protected $fillable = ["title","summary","release_year","poster","genre_id"];
}
