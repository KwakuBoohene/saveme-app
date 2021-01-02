<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debtor extends Model
{
    use HasFactory;
    protected $table = "debtors";
    protected $fillable = [
        'name',
        'amount',
        'date',
        'payment_date',
        'paid'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
