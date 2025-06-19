<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Verb extends Model
{
    /** @use HasFactory<\Database\Factories\VerbFactory> */
    use HasFactory;
    protected $guarded=[];
}
