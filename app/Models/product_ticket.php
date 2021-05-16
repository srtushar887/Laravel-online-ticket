<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_ticket extends Model
{
    use HasFactory;
    protected $fillable = ['product_id','ticket_id'];
}
