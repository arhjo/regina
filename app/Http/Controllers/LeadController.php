<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\LeadTel;

class LeadController extends Controller
{
    public function landing()
    {
        return view('welcome');
    }
    
    public function store(Request $request)
    {
        $messages = [
			'name.required' => 'Es necesario ingresar tu nombre',
			'lastname.required' => 'Es necesario ingresar tu (s) apellido (s)',
            'email.required' => 'El campo correo es requerido',
            'email.max' => 'El campo correo acepta un maximo de 100 caracteres',
            'email.unique' => 'El correo ya esta registrado en nuestra base de datos.',

		];
		$rules = [
			'name' => 'required',
            'lastname' => 'required',
			'email' => 'required|max:100|unique:leads',
		];

		$this->validate($request, $rules, $messages);

        $lead = new Lead();
        $lead->name = $request->input('name');
        $lead->lastname = $request->input('lastname');
        $lead->email = $request->input('email');
        $lead->save();

        return redirect()->route('landing')->withStatus(__('Hemos recibido tu contacto, en breve uno de nuestros asesores te contactará.'));

    }

    public function leadtel(Request $request)
    {
        $messages = [
			'name.required' => 'Es necesario ingresar tu nombre',
			'lastname.required' => 'Es necesario ingresar tu (s) apellido (s)',
            'email.required' => 'El campo correo es requerido',
            'email.max' => 'El campo correo acepta un maximo de 100 caracteres',
            'phone.unique' => 'El teléfono ya esta registrado en nuestra base de datos.',
            'phone.required' => 'Es necesario ingresar tu teléfono',

		];
		$rules = [
			'name' => 'required',
            'lastname' => 'required',
			'email' => 'required|max:100',
            'phone' => 'required|unique:lead_tels'
		];
        

		$this->validate($request, $rules, $messages);
        //dd($request);

        $lead = new LeadTel();
        $lead->name = $request->input('name');
        $lead->lastname = $request->input('lastname');
        $lead->email = $request->input('email');
        $lead->phone = $request->input('phone');
        $lead->save();

        return redirect('/#contactanos')->withStatus(__('Hemos recibido tu contacto, en breve uno de nuestros asesores te contactará.'));


    }
}
