<?php

namespace App\Http\Controllers;

use App\UserServiceContract;
use Illuminate\Http\Request;

/**
 * Class UserServiceContractController
 * @package App\Http\Controllers
 */
class UserServiceContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userServiceContracts = UserServiceContract::paginate();

        return view('user-service-contract.index', compact('userServiceContracts'))
            ->with('i', (request()->input('page', 1) - 1) * $userServiceContracts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userServiceContract = new UserServiceContract();
        return view('user-service-contract.create', compact('userServiceContract'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UserServiceContract::$rules);

        $userServiceContract = UserServiceContract::create($request->all());

        return redirect()->route('user-service-contracts.index')
            ->with('success', 'UserServiceContract created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userServiceContract = UserServiceContract::find($id);

        return view('user-service-contract.show', compact('userServiceContract'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userServiceContract = UserServiceContract::find($id);

        return view('user-service-contract.edit', compact('userServiceContract'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserServiceContract $userServiceContract
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserServiceContract $userServiceContract)
    {
        request()->validate(UserServiceContract::$rules);

        $userServiceContract->update($request->all());

        return redirect()->route('user-service-contracts.index')
            ->with('success', 'UserServiceContract updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userServiceContract = UserServiceContract::find($id)->delete();

        return redirect()->route('user-service-contracts.index')
            ->with('success', 'UserServiceContract deleted successfully');
    }
}
