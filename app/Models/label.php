<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Label extends Model
{
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    protected $fillable=[
        'name','slug'
    ];
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class );
    }
}
