<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'prenom',
        'nom',
        'sexe',
        'age',
        'email',
        'telephone',
        'description',
        'pays',
        'ville',
        'frameworks',
        'cv',
    ]
}
