<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'title',
        'publish_date',
        'description',
        'aviable'
    ];

    use HasFactory;

    public function type() {

        return $this -> belongsTo(Type :: class);
    }
}
