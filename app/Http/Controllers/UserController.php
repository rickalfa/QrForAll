<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $users = User::paginate(); * $users->perPage()

       $users = User::with('roles')->get();

       $countUser = count($users);
       
       for ($i=0; $i < $countUser -1; $i++) { 
        
        //$users[$i]['rol'] = '';

       //echo $users[$i]->roles[0];
         
       $users[$i]['rol'] =  (isset($users[$i]->roles[0]['name']) ? $users[$i]->roles[0]['name'] : "undefined-rol" );

       };

       //var_dump($users);

       //echo $users[5]['rol'];

        return view('user.index', compact('users'))
           ->with('i', (request()->input('page', 1) - 1) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(User::$rules);

        $user = User::create($request->all());

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);

       /// $roleuser = Role::findById(1, 'web');

        $roleuser = $user->getRoleNames();

        $user['role'] = $roleuser;



        var_dump($user);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        $userRole = Role::pluck('name','id');

        //var_dump($userRole);

      

        return view('user.edit', compact('user', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        request()->validate(User::$rules);

        $user->update($request->all());

        $datesRequest = $request->all();
        var_dump($datesRequest);

       // echo "rol assign : ". $datesRequest['roluser'];

        $user->assignRole($datesRequest['roluser']);
 
      

     return redirect()->route('users.index')
           ->with('success', 'User updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
}
