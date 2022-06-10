<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'itens';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'quantity',
        'type',
        'status',
    ];
}
