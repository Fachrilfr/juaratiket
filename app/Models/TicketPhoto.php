<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\softDeletes;

class TicketPhoto extends Model
{
    use HasFactory, softDeletes;
    
    //mass assignment
    protected $fillable = [
        'photo',
        'ticket_id',
    ];
}
