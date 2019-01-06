<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  protected $fillable = ['title', 'source'];

  public function ratings()
  {
    return $this->hasMany(Rating::class);
  }
}
