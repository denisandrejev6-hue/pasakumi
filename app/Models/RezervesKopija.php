<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RezervesKopija extends Model
{
    // some installations may have table without underscore
    protected $table = 'rezerveskopija';
    protected $primaryKey = 'ID';
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = [
        'fails',
        'izveides_datums',
    ];
}
