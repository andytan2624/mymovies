<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
  protected $fillable = ['movie_id', 'rating'];

  public function movie()
  {
    return $this->belongsTo(Movie::class);
  }
}
