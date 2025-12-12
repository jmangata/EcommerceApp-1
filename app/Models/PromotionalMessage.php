<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PromotionalMessage extends Model
{

use HasFactory;
protected $fillable = ['title','content','start_date','end_date','type','is_active'];

    public function scopeActiveNow($query){
    $now = now();
    return $query
    ->where('is_active', true)
    ->where('start_date', '<=', $now)
    ->where('end_date', '>=', $now);}
   // Afficher les messages promotionnels avant la navigation 
}
