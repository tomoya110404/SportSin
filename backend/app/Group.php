<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Group extends Model
{
    //
    protected $table = "groups";

    protected $fillable = [
        'name', 'description', 'desc_mini', 'age_group', 'about_level', 'groups_prefecture',
        'member'
    ];

    public function user():BelongsTo
    {
        return $this->belongsTo("App\User");
    }
}
