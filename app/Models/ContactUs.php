<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'message'];
    protected $table = 'contact_us'; // Specify the table name if it's different from the default
}
