<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Directivo;

class DirectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('directivo.index',[
            'directivos'=> Directivo::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('directivo.create');
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
            'firstName'=> 'required|min:3',
            'secondName'=> 'required|min:3',
            'lastName'=> 'required|min:3',
            'secondLastName'=> 'required|min:3',
            'email'=> ['required','email:rfc,dns','unique:directivos,email'],
            'phoneNumber'=> 'required|min:3|numeric',
            'role'=> 'required|min:3',
            'CIDirectivo'=> ['required','numeric','unique:directivos,CIDirectivo']
        ]);

        $directivo = new Directivo();
        $directivo->firstName = $validData['firstName'];
        $directivo->secondName = $validData['secondName'];
        $directivo->lastName = $validData['lastName'];
        $directivo->CIDirectivo = $validData['CIDirectivo'];
        $directivo->secondLastName = $validData['secondLastName'];
        $directivo->email = $validData['email'];
        $directivo->phoneNumber = $validData['phoneNumber'];
        $directivo->role = $validData['role'];
        $directivo->save();

        return redirect('/directivos'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  Directivo $directivo
     * @return \Illuminate\Http\Response
     */
    public function show( Directivo $directivo)
    {
        return view('directivo.show',[
            'directivo'=> $directivo
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
        $directivo = Directivo::findOrFail($id);
        return view('directivo.edit',[
            'directivo' => $directivo 
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
            'firstName'=> 'required|min:3',
            'secondName'=> 'required|min:3',
            'lastName'=> 'required|min:3',
            'secondLastName'=> 'required|min:3',
            'email'=> 'email:rfc,dns',
            'phoneNumber'=> 'required|min:3|numeric',
            'role'=> 'required|min:3'
        ]);

        $directivo = Directivo::findOrFail($id);
        $directivo->firstName = $validData['firstName'];
        $directivo->secondName = $validData['secondName'];
        $directivo->lastName = $validData['lastName'];
        $directivo->secondLastName = $validData['secondLastName'];
        $directivo->email = $validData['email'];
        $directivo->phoneNumber = $validData['phoneNumber'];
        $directivo->role = $validData['role'];
        $directivo->save();

        return redirect('/directivos'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Directivo::findOrFail($id);
        $report->delete();
        return redirect('/directivos');
    }

    public function confirmDelete($id){
        $directivo = Directivo::findOrFail($id);
        return view('directivo.confirmDelete',[
            'directivo'=> $directivo
        ]);
    }
}
