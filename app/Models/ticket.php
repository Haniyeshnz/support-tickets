<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'message', 'asset', 'priority', 'category_id','label_id','user_id'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id');
    }
    public function label(): BelongsTo
    {
        return $this->belongsTo(Label::class,'label_id');
    }
    public function assignedTo(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    // public function creator(): BelongsTo
    // {
    //     return $this->belongsTo(User::class, 'creator');
    // }
    protected $casts = [
        'priority' => \App\Enums\PriorityEnum::class
    ];
}
