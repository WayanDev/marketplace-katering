<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_perusahaan',
        'email',
        'password',
        'alamat',
        'kontak',
        'deskripsi',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, Menu::class);
    }
}
