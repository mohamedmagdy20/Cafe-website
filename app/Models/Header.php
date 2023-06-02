<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'headers';

    protected $fillable = [
        'title','body','image'
    ];

    use HasFactory;
}
