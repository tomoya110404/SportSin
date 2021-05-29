<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Group extends Model
{
    //
    protected $table = "groups";

    protected $fillable = [
        'name', 'description', 'desc_mini', 'age-group', 'about_level', 'groups_prefecture'
    ];

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
