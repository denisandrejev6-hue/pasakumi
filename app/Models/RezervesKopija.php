<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RezervesKopija extends Model
{
    protected $table = 'rezerves_kopija';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'fails',
        'izveides_datums',
    ];
}
