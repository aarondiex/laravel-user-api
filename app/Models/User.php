<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // your existing table name
    protected $primaryKey = 'id';
    protected $fillable = [
        'firstName', 'lastName', 'age', 'gender', 'height', 'weight', 'role'
    ];
    public $timestamps = false; // false if table doesn't have created_at/updated_at
}
