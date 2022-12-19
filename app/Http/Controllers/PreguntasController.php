<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\asignaturas;
use Illuminate\Support\Facades\Validator;
use App\Models\facultades;
use   App\Models\preguntas;
use App\Models\programas;
use App\Models\pruebas;
use   App\Models\respuestas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        $preguntas=preguntas::get();
    
        
        return view('app/preguntas',compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
     /**funcion para ver el formulario de preguntas
      */
      public function verPreguntas(){
        return view('app/registrarPreguntas');
      }

      public function resultados(){
        $pruebas=pruebas::all();
        return view('app/resultados',compact('pruebas'));
      }
 
         /**funcion para guardar los registros
      */

     
    /**
      *funcion para validar el formulario
      
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'facultad'=>'required|max:50|unique:facultades,descripcion',
            'programa'=>'required|max:50|unique:programas,descripcion',
            'asignatura'=>'required|max:50|',
            'nivel'=>'required|max:50|',
            'pregunta'=>'required|max:50|unique:preguntas,pregunta',
            'respuesta'=>'required|max:50|',
            'correcta'=>'required|max:50|',]);

            $user=User::find(1);
            $facultadNueva = new facultades;
            $facultadNueva->id_usuario=$user->id;
            $facultadNueva->descripcion = $request->facultad;
            $facultadNueva->save();
         

            $programa= new programas;
            $programa->descripcion=$request->programa;
            $programa->id_facultad=$facultadNueva->id;
            $programa->save();
          
            
            $asignatura=new asignaturas;
            $asignatura->descripcion=$request->asignatura;
            $asignatura->id_programas=$facultadNueva->id;
            $asignatura->save();

            

            $preguntas=new preguntas;
            $preguntas->nivel=$request->nivel;
            $preguntas->pregunta=$request->pregunta;
            $preguntas->id_asignatura=$facultadNueva->id;
            $preguntas->id_respuesta=$facultadNueva->id;
            $preguntas->save();

          

            $respuestas=new respuestas;
            $respuestas->respuesta=$request->respuesta;
            $respuestas->correcta=$request->correcta;
            $respuestas->id_pregunta=$facultadNueva->id;
            $respuestas->save();

            return back()->withInput();
        

            
       
            

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
        $preguntas=preguntas::findOrFail($id);
        return view('app/actualizarPregunta',compact('preguntas'));
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
        $preguntas=preguntas::findOrFail($id);
        $facultad=facultades::findOrFail($id);
        $asignatura=asignaturas::findOrFail($id);
        $programa=programas::findOrFail($id);
        $respuestas=respuestas::findOrFail($id);

     

        $facultad->descripcion=$request->input('facultad');
        $programa->descripcion=$request->input('programa');
        $asignatura->descripcion=$request->input('asignatura');
        $preguntas->pregunta=$request->input('pregunta');
        $preguntas->nivel=$request->input('nivel');
        $respuestas->respuesta=$request->input('respuesta');
        $respuestas->correcta=$request->input('correcta');
        //guardar los registros actualizados
        $facultad->save();
        $programa->save();
        $asignatura->save();
        $preguntas->save();
        $respuestas->save();
     
       return back()->with("actualizado con exito");
    


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Eliminar = facultades::find($id);
        $Eliminar->delete();
        return back()->withInput();
    }
    
}
