<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id', 'product_id', 'quantity', 'subtotal'];

    public function transaction(){
        return $this->belongsTo(transaction::class);
    }
}
