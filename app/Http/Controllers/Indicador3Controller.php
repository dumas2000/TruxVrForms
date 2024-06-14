<?php

namespace App\Http\Controllers;

use App\Models\Indicador3;
use Illuminate\Http\Request;

class Indicador3Controller extends Controller
{
    public function index ()
    {
        return view('Indicador3');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pregunta1' => 'required',
            'pregunta2' => 'required',
            'pregunta3' => 'required',
            'pregunta4' => 'required',
            'pregunta5' => 'required',
        ], [
            // Mensajes de error personalizados
            'required' => 'Debe seleccionar una opción para :attribute.',
        ]);

        // Si el formulario ha pasado la validación, procede a guardar los datos
        $pt1 = floatval($request->pregunta1);
        $pt2 = floatval($request->pregunta2);
        $pt3 = floatval($request->pregunta3);
        $pt4 = floatval($request->pregunta4);
        $pt5 = floatval($request->pregunta5);

        $puntaje = $pt1 + $pt2 + $pt3 + $pt4 + $pt5;

        $indicador3 = new Indicador3();

        $indicador3->puntaje = $puntaje;

        $indicador3->save();

        return redirect()->route('formulario3.index')->with('success', 'Respuestas enviadas exitosamente, <b> su puntaje es: ' . $puntaje).'</b>';

    }
}
