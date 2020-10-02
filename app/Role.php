<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $fillable = [
        'id',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
