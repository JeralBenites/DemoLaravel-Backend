<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = 'artista';
    protected $primaryKey = 'idArt';
    protected $fillable = ['idArt', 'nomArt', 'telArt','last_update','creation_date','updated_at','created_at'];

}
