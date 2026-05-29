<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'uzytkownik';

    public $timestamps = false;

    protected $fillable = [
        'imie',
        'nazwisko',
        'email',
        'numer_telefonu',
        'haslo_hash',
        'utworzono',
    ];

    protected $hidden = [
        'haslo_hash',
        'remember_token',
    ];

    public function getAuthPassword(): string
    {
        return $this->haslo_hash;
    }

    protected function casts(): array
    {
        return [
            'haslo_hash' => 'hashed',
            'utworzono'  => 'datetime',
        ];
    }
}