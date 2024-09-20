<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estagio extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'estagios';
    protected $guarded = ['id'];
    #protected $table = 'vagas';

    protected $fillable = ['nome'];
}
