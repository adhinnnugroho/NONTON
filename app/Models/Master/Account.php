<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;


class Account extends Model
{
    use HasFactory;
    protected $table = 'm_account';
    public $timestamps = false;
    protected $guarded = ['id'];
}
