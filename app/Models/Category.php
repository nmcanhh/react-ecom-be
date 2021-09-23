<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $tabel = 'categories';
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_descrip',
    ];
}
