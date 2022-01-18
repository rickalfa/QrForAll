<?php

namespace App\Http\Controllers;

use App\UserPayment;
use Illuminate\Http\Request;

/**
 * Class UserPaymentController
 * @package App\Http\Controllers
 */
class UserPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userPayments = UserPayment::paginate();

        return view('user-payment.index', compact('userPayments'))
            ->with('i', (request()->input('page', 1) - 1) * $userPayments->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userPayment = new UserPayment();
        return view('user-payment.create', compact('userPayment'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(UserPayment::$rules);

        $userPayment = UserPayment::create($request->all());

        return redirect()->route('user-payments.index')
            ->with('success', 'UserPayment created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userPayment = UserPayment::find($id);

        return view('user-payment.show', compact('userPayment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userPayment = UserPayment::find($id);

        return view('user-payment.edit', compact('userPayment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  UserPayment $userPayment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserPayment $userPayment)
    {
        request()->validate(UserPayment::$rules);

        $userPayment->update($request->all());

        return redirect()->route('user-payments.index')
            ->with('success', 'UserPayment updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $userPayment = UserPayment::find($id)->delete();

        return redirect()->route('user-payments.index')
            ->with('success', 'UserPayment deleted successfully');
    }
}
