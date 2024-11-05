<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppoinmentDate extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function Discussion($var = null)
    {
        return $this->hasMany(Discussion::class);
    }


}
