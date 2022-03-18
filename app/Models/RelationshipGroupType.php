<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RelationshipGroupType extends Model
{
    use HasFactory;

    protected $table = 'relationship_group_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id',
        'name',
    ];

    /**
     * Get the account associated with the relationship type.
     *
     * @return BelongsTo
     */
    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    /**
     * Get the account associated with the relationship type.
     *
     * @return HasMany
     */
    public function types()
    {
        return $this->hasMany(RelationshipType::class);
    }
}