<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demend extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom_collier', 'transport_id', 'distination', 'date',
        'nom', 'prenom', 'type_collier', 'date_demande'
    ];

    public function transport()
    {
        return $this->belongsTo(Transport::class);
    }
}
