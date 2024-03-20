<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'city',
        'supplier_type',
        'supplier_business',
        'item_category',
        'comment',
        'contact',
        'bin_info',
        'company_info',
        'bank_info',
        'document_a',
        'document_b',
    ];

    protected $casts = [
        'contact' => 'json',
        'bin_info' => 'json',
        'company_info' => 'json',
        'bank_info' => 'json',
        'document_a' => 'json',
        'document_b' => 'json',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
