<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
        protected $fillable = ['nama', 'noktp', 'alamat', 'agama', 'email', 'telepon'];

}
