<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'model',
        'mechanic_id'
    ];
    public function mechanic(): BelongsTo
    {
        return $this->belongsTo(Mechanic::class);
    }

    public function mechanic()
    {
        return $this->belongsTo(Mechanic::class);
    }

    public function owner()
    {
        return $this->hasOne(Owner::class);
    }

}
