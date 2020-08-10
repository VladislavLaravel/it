<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $fillable = ['first_name', 'last_name', 'company_id', 'email', 'phone'];
}
