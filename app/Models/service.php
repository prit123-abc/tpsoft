<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
class service extends Model
{
    public $fillable = ['service'];
  public function page(){
    return $this->hasMany(Page::class);
  }
}
