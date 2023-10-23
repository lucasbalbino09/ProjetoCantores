<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantor extends Model
{
    use HasFactory;
    protected $fillable = ['nome','descricao','banda_id'];

    public function Banda() {
        return $this -> belongsTo(Banda::class);
    }
}
