<?php

namespace App\Http\Controllers;

use App\Studio;
use App\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// class StudioController extends Controller
class StudioController 

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = Studio::all();

        return response()->json([ 'studios' => $all ], 200);
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
        $studio = new Studio();

        $validator = Validator::make(json_decode($request->getContent(), true), [
            'name' => 'required|min:2|max:191',
            'description' => 'required|min:10|max:1000',
            'city' => 'required|min:2|max:191',
            'cpostal' => 'required|int',
            'address' => 'required|min:2|max:191',
            'country' => 'nullable | max:191',
            'prix' => 'required|int',
            'nbr_people' => 'required|int',
            'siren' => 'required|int',
            'type_studio' => 'required',
            'inge_son' => 'required | bool',
            'tva' => 'required | bool',
        ]);

        if ($validator->fails()) {
            return response()->json([ 'error' => $validator->errors()->first()], 400);
        }
        else
        {
            $studio->name = $request->name;
            $studio->description = $request->description;
            $studio->city = $request->city;
            $studio->cpostal = $request->cpostal;
            $studio->address = $request->address;
            $studio->country = $request->country;
            $studio->prix = $request->prix;
            $studio->nbr_people = $request->nbr_people;
            $studio->siren = $request->siren;
            $studio->type_studio = $request->type_studio;
            $studio->inge_son = $request->inge_son;
            $studio->tva = $request->tva;
            $studio->save();
            return response()->json([ 'error' => $studio]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show(Studio $studio)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Studio $studio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
        //
    }
}
