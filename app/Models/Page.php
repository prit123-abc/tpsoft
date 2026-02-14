<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
        protected $fillable = [
        'service_id',
        'state_id',
        'location_name',
        'location_slug',
        'meta_title',
        'meta_description',
        'keywords',
        'content',
        'faqs',
    ];
    protected $casts = [
    'faqs' => 'array',
];
    public function State(){
        return $this->belongsTo(state::class);
    }
    public function service(){
        return $this->belongsTo(service::class);
    }
}
