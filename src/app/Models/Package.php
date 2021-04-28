<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'design_count',
        'price_per_design',
        'is_trail_available',
        'trial_period_day_count',
        'trial_period_design_count',
        'is_active',
        'file_stored_day_count',
        'is_multiple_revisions',
        'is_via_email_allowed',
        'addon_email_count',
        'is_same_day_delivery',
        'is_displayed',
        'icon_class',
        'created_by',
        'updated_by'
    ];
}
