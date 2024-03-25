<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participate extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'tender_id'];

    public function tender()
    {
        return $this->belongsTo(Tender::class);
    }
}
