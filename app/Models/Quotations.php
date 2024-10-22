<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'quotations';
    protected $fillable = [
        'quotations_name','currency','payment_term','delivery_period','unit_cost','total_cost'
    ];
}
