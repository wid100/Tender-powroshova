<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
    use HasFactory;

    public function participates()
    {
        return $this->hasMany(Participate::class);
    }
    public function participants()
    {
        return $this->hasMany(Participate::class, 'tender_ref_id', 'id');
    }
}
