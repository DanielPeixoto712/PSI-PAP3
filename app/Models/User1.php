<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User1 extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $table="users";


     protected $fillable = [
        'name',
        'email',
        'password',
        'contacto',
    ];


    public function users (){

      return $this->belongsTo('App\Models\User', 'id');

   }