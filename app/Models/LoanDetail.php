<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanDetail extends Model
{

    protected $fillable = ['loan_id', 'book_id', 'is_return'];

    // Relasi
    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
