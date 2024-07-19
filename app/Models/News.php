<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class News extends Model
{
    use HasFactory;
    protected $table='news';
    // per rimuovere l'errore Column not found: 1054 Unknown column 'updated_at' in 'field list'
    public $timestamps=false;
}
