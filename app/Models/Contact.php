<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'full_name',
        'company_name',
        'country',
        'email',
        'whatsapp',
        'product_id',
        'quantity',
        'message',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
