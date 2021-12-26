<?php

namespace App\Http\Controllers;

//use App\Role;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

/**
 * Class RoleController
 * @package App\Http\Controllers
 */
class RoleController extends Controller
{


    private $rules = [
		'name' => 'required',
		'guard_name' => 'required',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('role.index', compact('roles'))
            ->with('i', (request()->input('page', 1) - 1) * $roles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all(); //->pluck('name', 'id');

        //$role = new Role();

        $role = Role::findByName('user_free');

        $rolePermissions = $role->permissions->pluck('name', 'id');
        
        //dd($permissions);

        return view('role.create', compact('role', 'permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate($this->rules);



       $role = Role::create($request->only('name'));

       //var_dump($request->input('permissions', []));

       $role->permissions()->sync($request->input('permissions', []));

       // var_dump($request->all());

       // return true;

        return redirect()->route('roles.index')
            ->with('success', 'Role created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role = Role::find($id);

        $rolesPermissions =  $role->permissions;

        return view('role.show', compact('role', 'rolesPermissions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::find($id);

        //dd($role);

        return view('role.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Role $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        request()->validate($this->rules);

        $role->update($request->all());

        $role->permissions()->sync($request->input('permissions', []));

        return redirect()->route('roles.index')
            ->with('success', 'Role updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $role = Role::find($id)->delete();

        return redirect()->route('roles.index')
            ->with('success', 'Role deleted successfully');
    }
}
