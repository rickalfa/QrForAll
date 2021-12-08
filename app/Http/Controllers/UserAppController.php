<?php

namespace App\Http\Controllers;

use App\UserApp;
use Illuminate\Http\Request;

/**
 * Class UserAppController
 * @package App\Http\Controllers
 */
class UserAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userApps = UserApp::paginate();

        return view('user-app.index', compact('userApps'))
            ->with('i', (request()->input('page', 1) - 1) * $userApps->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userApp = new UserApp();
        return view('user-app.create', compact('userApp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UserApp::$rules);

        $userApp = UserApp::create($request->all());

        return redirect()->route('user-app.index')
            ->with('success', 'UserApp created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userApp = UserApp::find($id);

        return view('user-app.show', compact('userApp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userApp = UserApp::find($id);

        return view('user-app.edit', compact('userApp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserApp $userApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserApp $userApp)
    {
        request()->validate(UserApp::$rules);

        $userApp->update($request->all());

        return redirect()->route('user-app.index')
            ->with('success', 'UserApp updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userApp = UserApp::find($id)->delete();

        return redirect()->route('user-app.index')
            ->with('success', 'UserApp deleted successfully');
    }
}
