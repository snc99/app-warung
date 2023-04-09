<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class totalTagihan extends Model
{
    use HasFactory;

    public $table = "total_tagihan";
    protected $fillable = ['id', 'pencatatan_id', 'total_tagihan', 'bayar', 'sisa_tagihan'];
}