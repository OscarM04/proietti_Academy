<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atleta;

class AtletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('atleta.index',[
            'atletas'=> Atleta::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atleta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'firstName'     => 'required|min:3',
            'secondName'    => '',
            'lastName'      => 'required|min:3',
            'secondLastName'=> '',
            'email'         => ['required','email:rfc,dns','unique:atletas,email'],
            'phoneNumber'   => 'required|min:10|numeric',
            'CIAtleta'      => ['required','numeric','unique:atletas,CIAtleta'],
            'passport'      => ['required','numeric','unique:atletas,passport'],
            'nickname'      => 'required|min:4',
            'country'       => 'required|min:3',
            'cellphone'     => 'required|min:11|numeric',
            'birthDate'     => '',
            'birthPlace'    => 'required|min:5',
            'city'          => 'required|min:3',
            'bloodType'     => '',
            'height'        => 'required',
            'weight'        => 'required',
            'foot'          => '',
            'position'      => '',
            'previousClub'  => '',
            'highSchool'    => 'required|min:3',
            'footSize'      => '',
            'shirtSize'     => '',
            'pantSize'      => '',
            'allergy'       => '',
            'injuries'      => '',
            'description'   => ''

        ]);

        $atleta = new Atleta();
        $atleta->CIDirectivo = 1;
        $atleta->passport = $validData['passport'];
        $atleta->firstName = $validData['firstName'];
        $atleta->secondName = $validData['secondName'];
        $atleta->lastName = $validData['lastName'];
        $atleta->secondLastName = $validData['secondLastName'];
        $atleta->CIAtleta = $validData['CIAtleta'];
        $atleta->email = $validData['email'];
        $atleta->phoneNumber = $validData['phoneNumber'];
        $atleta->nickname = $validData['nickname'];
        $atleta->country = $validData['country'];
        $atleta->cellphone = $validData['cellphone'];
        $atleta->birthDate = $validData['birthDate'];
        $atleta->birthPlace = $validData['birthPlace'];
        $atleta->city = $validData['city'];
        $atleta->bloodType = $validData['bloodType'];
        $atleta->height = $validData['height'];
        $atleta->weight = $validData['weight'];
        $atleta->foot = $validData['foot'];
        $atleta->position = $validData['position'];
        $atleta->previousClub = $validData['previousClub'];
        $atleta->highSchool = $validData['highSchool'];
        $atleta->footSize = $validData['footSize'];
        $atleta->shirtSize = $validData['shirtSize'];
        $atleta->pantSize = $validData['pantSize'];
        $atleta->allergy = $validData['allergy'];
        $atleta->injuries = $validData['injuries'];
        $atleta->description = $validData['description'];
        $atleta->save();

        return redirect('/atletas');
    }

    /**
     * Display the specified resource.
     *
     * @param  Atleta $atleta
     * @return \Illuminate\Http\Response
     */
    public function show(Atleta $atleta)
    {
        return view('/atleta.show',[
            'atleta' => $atleta
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atleta = Atleta::findOrFail($id);
        return view('atleta.edit',[
            'atleta' => $atleta
        ]);
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
        $validData = $request->validate([
            'firstName'     => 'required|min:3',
            'secondName'    => '',
            'lastName'      => 'required|min:3',
            'secondLastName'=> '',
            'email'         => ['required','email:rfc,dns'],
            'phoneNumber'   => 'required|min:10|numeric',
            'nickname'      => 'required|min:4',
            'country'       => 'required|min:3',
            'cellphone'     => 'required|min:11|numeric',
            'birthDate'     => '',
            'birthPlace'    => 'required|min:5',
            'city'          => 'required|min:3',
            'bloodType'     => '',
            'height'        => 'required',
            'weight'        => 'required',
            'foot'          => '',
            'position'      => '',
            'previousClub'  => '',
            'highSchool'    => 'required|min:3',
            'footSize'      => '',
            'shirtSize'     => '',
            'pantSize'      => '',
            'allergy'       => '',
            'injuries'      => '',
            'description'   => ''

        ]);

        $atleta = Atleta::findOrFail($id);
        $atleta->firstName = $validData['firstName'];
        $atleta->secondName = $validData['secondName'];
        $atleta->lastName = $validData['lastName'];
        $atleta->secondLastName = $validData['secondLastName'];
        $atleta->email = $validData['email'];
        $atleta->phoneNumber = $validData['phoneNumber'];
        $atleta->nickname = $validData['nickname'];
        $atleta->country = $validData['country'];
        $atleta->cellphone = $validData['cellphone'];
        $atleta->birthDate = $validData['birthDate'];
        $atleta->birthPlace = $validData['birthPlace'];
        $atleta->city = $validData['city'];
        $atleta->bloodType = $validData['bloodType'];
        $atleta->height = $validData['height'];
        $atleta->weight = $validData['weight'];
        $atleta->foot = $validData['foot'];
        $atleta->position = $validData['position'];
        $atleta->previousClub = $validData['previousClub'];
        $atleta->highSchool = $validData['highSchool'];
        $atleta->footSize = $validData['footSize'];
        $atleta->shirtSize = $validData['shirtSize'];
        $atleta->pantSize = $validData['pantSize'];
        $atleta->allergy = $validData['allergy'];
        $atleta->injuries = $validData['injuries'];
        $atleta->description = $validData['description'];
        $atleta->save();

        return redirect('/atletas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $atleta = Atleta::findOrFail($id);
        $atleta->delete();
        return redirect('/atletas');
    }

    public function confirmDelete($id){
        $atleta = Atleta::findOrFail($id);
        return view('atleta.confirmDelete',[
            'atleta'=> $atleta
        ]);
    }
}
