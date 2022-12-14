<?php

namespace App\Models;

use App\Scopes\StudentScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected static function booted()
    {
        static::addGlobalScope(new StudentScope());
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
