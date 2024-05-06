<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class firstcodes extends Model
{
  use HasFactory;
  protected $fillable=[
    'name',
    'email',
    'body',  
  ];
}