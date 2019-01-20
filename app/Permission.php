<?php

namespace App;
Use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission
{
    protected $fillable = ['name', 'display_name', 'description'];
}