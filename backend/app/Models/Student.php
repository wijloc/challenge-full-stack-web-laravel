<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $table = 'students';

    public $fillable = [
        'name',
        'email',
        'academic_register',
        'cpf'
    ];

    public $editable = [
        'name',
        'email',
    ];
}
