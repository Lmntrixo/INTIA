<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use orchid\Screen\AsSource;

class post extends Model
{
    use  AsSource;

    protected $fillable=['title', 'description','auteur','body'];
}
