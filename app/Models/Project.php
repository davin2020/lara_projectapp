<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    //Dav added these from tutorial
    protected $table = 'projects';
    public $timestamps = true;

    // The attributes that should be cast to native types.
    protected $casts = [
    	'cost' => 'float'
    ];

    // The attributes that are mass assignable = fields in db that user can fill in
    protected $fillable = [
    	'name',
    	'introduction',
    	'created_at',
    	'location',
    	'cost'
    ];

}
