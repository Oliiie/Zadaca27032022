<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Osiguranje extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function croatia()
    {
        $cro = "Stambeno i zivotno osiguranje : ";
        $crovrijednost = "AKCIJA za samo 5000 kn zajedno";
        $data = [
            'osig1' => 'Osiguranje stana',
            'osig2' => 'Osiguranje imovine'
        ];

        return view('Osiguranje.croatia', compact('cro', 'crovrijednost', 'data'));
    }

    public function grawe()
    {
        $grw = "Obvezno osiguranje osobnog vozila : ";
        $grwvrijednost = "Nema AKCIJE, 2000 kn";
        $data = [
            'osig1' => 'Osiguranje automobila',
            'osig2' => 'Osiguranje motocikla',
            'osig3' => 'Kasko osiguranje'
        ];

        return view('Osiguranje.grawe', compact('grw', 'grwvrijednost', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
