<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $primaryKey="id_report";
    protected $table="report";

   protected $fillable=[
       'id_report',
       'id_produto',
       'id',
       'produto',
       'report',
       'vendedor'
       
   ];

public function produto (){

      return $this->hasMany('App\Models\Produto', 'id_produto');
    }

public function users (){

      return $this->belongsTo('App\Models\User', 'id');
    }

    }