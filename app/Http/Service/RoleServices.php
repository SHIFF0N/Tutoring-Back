<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 8/22/2019
 * Time: 7:04 AM
 */

namespace App\Http\Service;


use App\Models\Role;

class RoleService extends BaseService
{

    public function getRoles()
    {
        return Role::all();
    }

}