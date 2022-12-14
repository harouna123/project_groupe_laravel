<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entrepot extends Model
{
    use HasFactory;
    protected $fillable = [
        'description','superficie'
    ];

    public function fournisseur(){
        return $this->belongsTo(fournisseur::class);
    }
}
