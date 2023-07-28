<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    //aqui se suele definir los campos que suelen rellenarse de forma masiva
    protected $fillable = ['name','price', 'status', 'stock'];
}
