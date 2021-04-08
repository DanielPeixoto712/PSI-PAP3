<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $primaryKey="id_produto";
    protected $table="produto";

   protected $fillable=[
       'id_categoria',
       'id_marca',
       'produto',
       'preco',
       'observacoes',
       'info'
   ];


    public function marca (){

      return $this->belongsTo('App\Models\Marca', 'id_marca');
    }


     public function categoria (){

      return $this->belongsTo('App\Models\Categoria', 'id_categoria');
    }
    }