<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function label(): BelongsTo
    {
        return $this->belongsTo(Label::class);
    }
    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class,'creator_id');
    }


    
   
}
