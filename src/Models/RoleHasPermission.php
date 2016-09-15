<?php

namespace Spatie\Permission\Models;

use Illuminate\Database\Eloquent\Model;

class RoleHasPermission extends Model
{

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    public $guarded = ['id'];

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTable(config('laravel-permission.table_names.role_has_permissions'));
    }

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role()
    {
        return $this->hasOne(
            config('laravel-permission.models.role')
        );
    }

    /**
     * A permission can be applied to roles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function permission()
    {
        return $this->hasOne(
            config('laravel-permission.models.permission')
        );
    }
}
