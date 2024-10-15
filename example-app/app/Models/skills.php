<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $primaryKey = 'id';
    protected $attributes = [
        'name',
        'level_id' => '1',
        'where_used_id' => 'NULL'
    ];
    protected $fillable = [
        'name',
    ];
}
