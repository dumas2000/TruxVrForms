<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Indicador1;

class Indicador1Controller extends Controller
{
    public function index ()
    {
        return view('Indicador1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'afirmacion1' => 'required|not_in:0',
            'afirmacion2' => 'required|not_in:0',
            'afirmacion3' => 'required|not_in:0',
            'afirmacion4' => 'required|not_in:0',
            'afirmacion5' => 'required|not_in:0',
            'afirmacion6' => 'required|not_in:0',
            'afirmacion7' => 'required|not_in:0',
            'afirmacion8' => 'required|not_in:0',
        ], [
            // Mensajes de error personalizados
            'required' => 'Debe seleccionar una opción para :attribute.',
            'not_in' => 'Debe seleccionar una opción válida para :attribute.',
        ]);

        // Si el formulario ha pasado la validación, procede a guardar los datos
        $pt1 = floatval($request->afirmacion1);
        $pt2 = floatval($request->afirmacion2);
        $pt3 = floatval($request->afirmacion3);
        $pt4 = floatval($request->afirmacion4);
        $pt5 = floatval($request->afirmacion5);
        $pt6 = floatval($request->afirmacion6);
        $pt7 = floatval($request->afirmacion7);
        $pt8 = floatval($request->afirmacion8);

        $puntaje = $pt1 + $pt2 + $pt3 + $pt4 + $pt5 + $pt6 + $pt7 + $pt8;

        $indicador1 = new Indicador1();

        $indicador1->puntaje = $puntaje;

        $indicador1->save();

        return redirect()->route('formulario1.index')->with('success', 'Respuestas enviadas exitosamente, <b> su puntaje es: ' . $puntaje).'</b>';

    }

}
