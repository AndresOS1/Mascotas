<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Raza;
use App\Models\Genero;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::all();
        $raza = Raza::all();
        $genero = Genero::all();
        $categoria = Categoria::all();

        return view('mascotas.listar',  compact('mascotas', 'raza', 'genero', 'categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mascotas = Mascota::all();
        $raza = Raza::all();
        $genero = Genero::all();
        $categoria = Categoria::all();

        return view('mascotas.registrar',  compact('mascotas', 'raza', 'genero', 'categoria'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validations = Validator::make($request->all(), [
            'nombre'                 => 'required',
            'imagen'                 => 'required',
            'raza_id'                => 'required',
            'categoria_id'           => 'required',
            'genero_id'              => 'required',
           ]);
   
           if(!$validations->fails()){
               $mascota = new Mascota;

               
               $mascota->nombre          =     $request->nombre;
               $mascota->imagen          =     $request->imagen;
               $mascota->raza_id         =     $request->raza_id;
               $mascota->categoria_id    =     $request->categoria_id;
               $mascota->genero_id       =     $request->genero_id;

               $mascota->save();
                           
           }
        
        return redirect()->route('listarMascota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Mascota::find($id);

        return view('mascotas.detalle');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mascota = Mascota::find($id);
        $raza = Raza::all();
        $genero = Genero::all();
        $categoria = Categoria::all();

        return view('mascotas.editar', compact('mascota', 'raza', 'genero', 'categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $mascota = Mascota::find($id);

        $mascota->update($request->all());
               
       
        return redirect()->route('listarMascota');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        
    
        $mascota->delete();

        return redirect()->route('listarMascota');
    }
}
