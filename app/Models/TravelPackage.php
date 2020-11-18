<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TravelPackage extends Model
{
    use SoftDeletes;
    use HasFactory;
    public $table = 'travel_packages';
    protected $fillable = [
        'title',
        'slug',
        'location',
        'about',
        'featured_event',
        'language',
        'food',
        'deptature_date',
        'duration',
        'type',
        'price'
    ];

    protected $hidden = [];

    public function galleries()
    {
        return $this->hasMany('App\Models\Gallery', 'travel_packages_id', 'id');
    }
}
