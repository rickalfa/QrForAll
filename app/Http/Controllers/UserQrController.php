<?php

namespace App\Http\Controllers;

use App\UserQr;
use App\UserApp;
use Illuminate\Http\Request;

/**
 * Class UserQrController
 * @package App\Http\Controllers
 */
class UserQrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userQrs = UserQr::paginate();

        return view('user-qr.index', compact('userQrs'))
            ->with('i', (request()->input('page', 1) - 1) * $userQrs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userQr = new UserQr();

        $userApp = UserApp::pluck('email', 'id');

        return view('user-qr.create', compact('userQr', 'userApp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UserQr::$rules);

        $userQr = UserQr::create($request->all());

        return redirect()->route('user-qrs.index')
            ->with('success', 'UserQr created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userQr = UserQr::find($id);

        return view('user-qr.show', compact('userQr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userQr = UserQr::find($id);

        return view('user-qr.edit', compact('userQr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserQr $userQr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserQr $userQr)
    {
        request()->validate(UserQr::$rules);

        $userQr->update($request->all());

        return redirect()->route('user-qrs.index')
            ->with('success', 'UserQr updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userQr = UserQr::find($id)->delete();

        return redirect()->route('user-qrs.index')
            ->with('success', 'UserQr deleted successfully');
    }
}
