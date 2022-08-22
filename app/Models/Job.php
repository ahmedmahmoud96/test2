<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table='jobs';
    protected $fillable=['name_ar','description_ar','name_en','description_en','salary'];
    public $timestamps=false;

}
