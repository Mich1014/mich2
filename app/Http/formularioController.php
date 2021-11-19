<?php 

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\Contacto;
class formularioController extends Controller
{
  function save(Request $request){
      $contacto = new Contacto();
      $contacto->nombre = $request->input('nombre');
      $contacto->email = $request->input('email');
      $contacto->telefono = $request->input('telefono');
      $contacto->sitio_web = $request->input('sitio_web');
      $contacto->asunto = $request->input('asunto');
      $contacto->mensaje = $request->input('mensaje');
      $contacto->save();
      return redirect('form');
  }
}