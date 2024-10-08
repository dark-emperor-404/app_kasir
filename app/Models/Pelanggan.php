<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penjualan;

class Pelanggan extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function penjualan()
    {
        return $this->hasaMany(Penjualan::class,'','id');
    }
}
