<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Transaction extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'travel_packages_id',
        'user_id',
        'additional_visa',
        'transaction_total',
        'transaction_status',
    ];

    protected $hidden = [];

    public function details()
    {
        return $this->hasMany(TransactionDetails::class, 'transaction_id', 'id');
    }

    public function travel_package()
    {
        return $this->belongsTo(TravelPackage::class, 'travel_packages_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
