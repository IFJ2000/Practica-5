<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    /* public function tickets()
    {
        return $this->hasMany(Ticket::class);

    } */

    public function train_types()
    {
        return $this->belongsTo(TrainType::class,'train_type_id'); // Relacion: un tren tiene un tipo de tren

    }
}
