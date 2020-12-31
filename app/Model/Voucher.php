<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'voucher', 'active'
    ];

    public function visitor() {
        return $this->belongsTo(Visitor::class);
    }
}
