<?php

namespace Spatie\Permission\Controllers\Api;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class RoleController extends Controller
{

    public function index(Request $request, Role $roleModel)
    {
        $roles = $roleModel->get();
        return $roles;
    }

    public function show(Request $request, Role $roleModel, $id)
    {
        $role = $roleModel->findOrFail($id);
        return $role;
    }

    public function store(Request $request, Role $roleModel)
    {
        $data = $request->all();
        $role = $roleModel->create($data);
        return $role;
    }

    public function update(Request $request, Role $roleModel, $id)
    {
        $data = $request->all();
        $role = $roleModel->findOrFail($id);
        $role->update($data);
        return $role;
    }

    public function destroy(Request $request, Role $roleModel, $id)
    {
        $role = $roleModel->findOrFail($id);
        $role->delete();
        return $role;
    }



}