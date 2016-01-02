<?php

namespace LaravelProject;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $table = "movies";
  protected $fillable = ['id', 'name', 'cast', 'direction', 'duration', 'genre_id', 'photo'];
}
