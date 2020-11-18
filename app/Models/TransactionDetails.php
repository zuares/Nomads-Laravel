<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class TransactionDetails extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'transaction_id',
        'username',
        'nationality',
        'is_visa',
        'doe_passport',
    ];

    protected $hidden = [];



    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id', 'id');
    }
}
