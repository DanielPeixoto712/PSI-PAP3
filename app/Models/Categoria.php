<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $primaryKey="id_categoria";
    protected $table="categoria";

   protected $fillable=[
       'designacao'
     
   ];

   public function produto (){

      return $this->hasMany('App\Models\Produto', 'id_produto');
    }

    public function marca (){

      return $this->hasMany('App\Models\Marca', 'id_marca');
    }
    }