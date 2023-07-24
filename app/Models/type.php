<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_name',
        'project_id'

    ];

    public function project() {

        return $this -> belongsTo(Project :: class);
    }
}
