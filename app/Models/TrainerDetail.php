<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerDetail extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['user_id', 'occupation', 'certificate_id', 'issue_date', 'expiry_date', 'issued_authority'];
}
