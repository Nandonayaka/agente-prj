<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'tb_products';
    protected $primaryKey = 'id_product';

    protected $fillable =[
    'name_product',
    'harga',
    'deskripsi_product',
    ];
};
