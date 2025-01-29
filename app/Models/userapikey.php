<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userapikey extends Model
{
    use HasFactory;

    public $table="userappkeys";    
    protected $guarded=[];
    public $timestamps=false;


}
