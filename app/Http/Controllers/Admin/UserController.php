<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:admin.user.index')->only('index');
        $this->middleware('can:admin.user.create')->only(['create','store']);
        $this->middleware('can:admin.user.edit')->only(['edit','store']);
        $this->middleware('can:admin.user.destroy')->only('destroy');
        $this->middleware('can:admin.assign.roles')->only('role');
        $this->middleware('can:admin.assign.permissions')->only('permission');
    }

    public function index()
    {
        $users = User::all();
        $title = 'Usuarios';
        return view('admin.user.index', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Crear Usuario';
        $roles = Role::where('name','!=', 'admin')->get();
        return view('admin.user.create', compact('title','roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required'
        ]);   
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user->roles()->sync($request->roles);
        return redirect()->route('admin.users.index')->with('success', 'Creado con Exito');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $title = 'Usuarios';
        return view('admin.user.show', [
            'user' => $user,
            'roles' => Role::orderBy('name')->get(),
            'permissions' => Permission::orderBy('name')->get(),
            'title' => $title,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.users.show', $user->id)->with('success', 'Actualizado con Exito');
    }

    public function destroy($id)
    {
        $row = User::findOrFail($id);
        $row->delete();
        return redirect()->route('admin.users.index')
            ->with('success','Informacion Eliminada Correctamente!');
    }

    public function role(Request $request, $id)
    {
        dd('entro');
        $user = User::findOrFail($id);
        $user->roles()->sync($request->roles);

        return redirect()->route('admin.users.index', $user->id)->with('success', 'Actualizado con Exito');
    }

    public function permission(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->syncPermissions($request->permissions);

        return redirect()->route('admin.users.index', $user->id)->with('success', 'Actualizado con Exito');
    }
}
