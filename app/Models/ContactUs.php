<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    use HasFactory;
     // Specify the table associated with the model
     protected $table = 'contactUs';

     // Specify the columns that are mass assignable
     protected $fillable = [
         'first_name',
         'last_name',
         'email',
         'phone_number',
         'details',
         'subject'
     ];
}
