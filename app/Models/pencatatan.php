<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pencatatan extends Model
{
    use HasFactory;


    public $table = "pencatatan";
    protected $fillable = ['nama', 'tanggal', 'total_transaksi'];
}