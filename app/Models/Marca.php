<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $primaryKey="id_marca";
    protected $table="marca";

   protected $fillable=[
       'marca'
     
   ];

    public function produto (){

      return $this->hasMany('App\Models\Produto', 'id_produto');
    }
    }