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
       'preco',
       'produto',
       'observacoes',
       'info',
       'id',
       'imagem_capa'
   ];
}