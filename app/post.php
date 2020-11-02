<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{

  // scope function in Model
  public function scopeLatestFirst()
  {
    return $this->latest()->first();
  }
}
