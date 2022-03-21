<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'table_admin';
    protected $fillable = [
  'productId',
        'title',
        'price',
        'description',
        'category',
        'image',
        'requestTYpe'
    ];

}
