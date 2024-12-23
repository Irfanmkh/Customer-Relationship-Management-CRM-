<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitKerja extends Model
{
    //
    protected $fillable = [
        'id',
        'name',
        'description',
    ];

    public function customer()
    {
        return $this->hasMany(Customer::class, 'id');
    }
}