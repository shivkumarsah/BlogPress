<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Role;
use App\Http\Requests\Admin\RoleRequest;
use Datatables;


class RoleController extends AdminController
{
    public function __construct()
    {
        view()->share('type', 'role');
    }

    /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        // Show the page
        return view('admin.role.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.role.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(RoleRequest $request)
    {
        $role = Role::create ($request->except('_token'));
        $role->status = (int) $request->only('role');
        $role->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $role
     * @return Response
     */
    public function edit(Role $role)
    {
        return view('admin.role.create_edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $role
     * @return Response
     */
    public function update(RoleRequest $request, Role $role)
    {
        /*
        $password = $request->password;
        $passwordConfirmation = $request->password_confirmation;

        if (!empty($password)) {
            if ($password === $passwordConfirmation) {
                $role->password = bcrypt($password);
            }
        }*/
        $role->update($request->except('_token'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $role
     * @return Response
     */

    public function delete(Role $role)
    {
        return view('admin.role.delete', compact('role'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $roles = Role::all(['_id', 'name', 'created_at', 'status'])->map(function ($roles) {
                return [
                    'id' => $roles->_id,
                    'name' => $roles->name,
                    //'created_at' => $roles->created_at->format('d-m-Y'),
                    'status' => $roles->status
                ];
            });

        return Datatables::of($roles)
            ->edit_column('status', '@if ($status=="1") <span class="glyphicon glyphicon-ok"></span> @else <span class=\'glyphicon glyphicon-remove\'></span> @endif')
            ->add_column('actions', '@if ($id!="1")<a href="{{{ url(\'admin/role/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                    <a href="{{{ url(\'admin/role/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                @endif')
            ->remove_column('id')
            ->make();
    }

}
