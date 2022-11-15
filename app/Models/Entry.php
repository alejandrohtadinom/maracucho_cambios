<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'description',
        'ammount',
        'payment_method_id',
        'customer_id'
    ];

    public function customer() {
        return $this->hasOne(Customer::class);
    }

    public function payment_method() {
        return $this->hasOne(PaymentMethod::class);
    }
}
