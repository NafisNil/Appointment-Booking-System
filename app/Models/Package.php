<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'amount', 'description', 'category_id', 'doctor_id'];
    /**
     * Get the user that owns the Package
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'doctor_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
