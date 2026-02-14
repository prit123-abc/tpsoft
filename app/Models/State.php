<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use http\models\page;
class State extends Model
{
    public $fillable = ['state', 'state_image'];
    protected $casts = [
    'state_image' => 'string',
];
public function page(){
    return $this->hasMany(Page::class);
}
}
