<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ContactFeedItem extends Model
{
    use HasFactory;

    protected $table = 'contact_feed_items';

    /**
     * Possible actions.
     */
    const ACTION_NOTE_CREATED = 'note_created';
    const ACTION_NOTE_UPDATED = 'note_updated';
    const ACTION_IMPORTANT_DATE_CREATED = 'important_date_created';
    const ACTION_IMPORTANT_DATE_UPDATED = 'important_date_updated';
    const ACTION_LABEL_ADDED = 'label_added';
    const ACTION_LOAN_CREATED = 'loan_created';
    const ACTION_LOAN_UPDATED = 'loan_updated';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'contact_id',
        'action',
        'feedable_id',
        'feedable_type',
    ];

    /**
     * Get the contact associated with the contact feed item.
     *
     * @return BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

    /**
     * Get the contact information type associated with the contact feed item.
     *
     * @return MorphTo
     */
    public function feedable()
    {
        return $this->morphTo();
    }
}