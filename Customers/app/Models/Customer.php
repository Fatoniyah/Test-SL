<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'id_card_number',
        'gender',
        'birthdate',
    ];

    public function subCustomers()
    {
        return $this->hasMany(SubCustomer::class, 'parent_id');
    }
}
