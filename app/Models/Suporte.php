<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suporte extends Model
{
  use HasFactory;

  //Cria a ligação de tabelas para ser retornada pelo eloquant
  public function category()
  {
    return $this->belongsTo(Category::class, 'cat_id');
  }
}
