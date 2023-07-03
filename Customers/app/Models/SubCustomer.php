<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCustomer extends Model
{
    protected $fillable = [
        'parent_id',
        'first_name',
        'last_name',
        'address',
        'id_card_number',
        'gender',
        'birthdate',
    ];

    public function parent()
    {
        return $this->belongsTo(Customer::class, 'parent_id');
    }
}
