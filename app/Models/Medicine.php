<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'quantity',
        'price',
        'expiry_date',
        'supplier_id',
        'created_by',
    ];

 
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
