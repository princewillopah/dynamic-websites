<?php

namespace App\Http\Controllers;

use App\Nextofkin;
use Illuminate\Http\Request;

class NextofkinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('')
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nextofkin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function show(Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function edit(Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nextofkin $nextofkin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nextofkin  $nextofkin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nextofkin $nextofkin)
    {
        //
    }
}
