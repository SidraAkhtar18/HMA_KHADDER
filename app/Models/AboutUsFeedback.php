<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUsFeedback extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'userfeedback'];
    protected $table = 'about_us_feedbacks'; // Specify the table name if it's different from the default
}
