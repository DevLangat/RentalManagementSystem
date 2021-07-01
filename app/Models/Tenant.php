<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $table = 'tenants';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'email',
        'idnumber',
        'phone',
        'address',
        'dob',
        'county',
        'location',
        'gender',
        'occupation',
    ];
}
