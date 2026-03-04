<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lietotajs extends Model
{
    protected $table = 'lietotajs';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'vards',
        'loma',
    ];
}
