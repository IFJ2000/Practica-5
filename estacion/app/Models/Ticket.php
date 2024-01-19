<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    public function trains()
    {
        return $this->belongsTo(Train::class,'train_id');

    }

    public function ticket_types()
    {
        return $this->belongsTo(TicketType::class,'ticket_type_id');
    }
}
