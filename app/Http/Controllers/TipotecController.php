<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipotec as tipoTec;
class TipotecController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return tipoTec::get();
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
        $create = tipoTec::create($request->all());
        if ($create) {
            return 'registrado';
        }
        else{
            return 'ocurrio un error';
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return tipoTec::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return tipoTec::find($id);
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
        $update = tipoTec::updateOrCreate(['id' => $id],$request->all());
        if ($update) {
            return 'actualizado';
        }
        else{
            return 'ocurrio un error';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = tipoTec::destroy($id);
        if ($delete) {
            return 'eliminado';
        }
        else{
            return 'ocurrio un error';
        }
    }
}
