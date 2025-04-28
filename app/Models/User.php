<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // ✅ Make role mass assignable
    ];

    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    public function isPharmacist()
    {
        return $this->role === 'pharmacist';
    }

    public function isCashier()
    {
        return $this->role === 'cashier';
    }
}
