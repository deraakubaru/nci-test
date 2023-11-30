<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TransactionDetail;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'transaction_date', 'total', 'description'];

    public function details(){
        return $this->hasMany(TransactionDetail::class);
    }
}
