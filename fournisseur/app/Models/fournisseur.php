<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
   
    protected $fillable = [
        'nom','prenom','naissance','compte_bank','ville'
    ];
    use HasFactory;
    public function entrepot(){
        return $this->hasMany(entrepot::class);
    }

}
