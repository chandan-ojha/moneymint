<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable = [
        'date',
        'details',
        'amount',
    ];

    protected $casts = [
        'date' => 'datetime:Y-m-d',
    ];
}
