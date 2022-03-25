<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $matkul = [
        1=> ['kode'=>'SYS01', 'nama'=>'Technopreneurship', 'sks'=>'3'],
        2=> ['kode'=>'SYS02', 'nama'=>'Supply Chain Management', 'sks'=>'4'],
        3=> ['kode'=>'SYS03', 'nama'=>'Digital Marketing', 'sks'=>'3'],
        4=> ['kode'=>'SYS04', 'nama'=>'Enterprise Information System', 'sks'=>'3'],
        5=> ['kode'=>'SYS05', 'nama'=>'IT Service Science', 'sks'=>'4']
    ];

    public function index()
    {
        return view('listMataKuliah')->with('matkul', $this->matkul);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMatkul');
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
