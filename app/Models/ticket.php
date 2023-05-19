<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ticket extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function label(): BelongsTo
    {
        return $this->belongsTo(label::class);
    }
}
