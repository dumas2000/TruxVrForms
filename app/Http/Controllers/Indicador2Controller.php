<?php

namespace App\Http\Controllers;

use App\Models\Indicador2;
use Illuminate\Http\Request;

class Indicador2Controller extends Controller
{
    public function index ()
    {
        return view('Indicador2');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pregunta1' => 'required',
            'pregunta2' => 'required',
            'pregunta3' => 'required',
            'pregunta4' => 'required',
            'pregunta5' => 'required',
            'pregunta6' => 'required',
            'pregunta7' => 'required',
        ], [
            // Mensajes de error personalizados
            'required' => 'Debe seleccionar una opción para :attribute.',
        ]);

        // Si el formulario ha pasado la validación, procede a guardar los datos
        // Convertir las respuestas a valores numéricos
        $pt1 = floatval($request->input('pregunta1'));
        $pt2 = floatval($request->input('pregunta2'));
        $pt3 = floatval($request->input('pregunta3'));
        $pt4 = floatval($request->input('pregunta4'));
        $pt5 = floatval($request->input('pregunta5'));
        $pt6 = floatval($request->input('pregunta6'));
        $pt7 = floatval($request->input('pregunta7'));

        $puntaje = $pt1 + $pt2 + $pt3 + $pt4 + $pt5 + $pt6 + $pt7;

        $indicador2 = new Indicador2();

        $indicador2->puntaje = $puntaje;

        $indicador2->save();

        return redirect()->route('formulario2.index')->with('success', 'Respuestas enviadas exitosamente, <b> su puntaje es: ' . $puntaje).'</b>';


    }
}
