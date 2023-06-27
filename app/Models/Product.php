<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
      'product_name',
      'product_price',
      'product_img',
    ];

    public const CATEGORIES = [
      1 => 'Вишивка',
      2 => 'Вишивка стрічками',
      3 => 'В`язання спицями',
      4 => 'В`язання гачком'
    ];
}
