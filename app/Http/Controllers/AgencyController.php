<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Agency;
use App\Models\User;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencies = Agency::all();
        return view('agency.index')->with('agencies', $agencies);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //create agent
      //validadte if agent already exist
      $agent = User::where('email', '=', $request->get('email_agent'))->get();

      if(count($agent)>0) {
        $message = 'El correo del representante ya se encuentra registrado, por favor intente con otro correo.';
        return view('register')->with('message', $message);
      }else{
        //check if there is a company already registered
        $company = Agency::where('nit', '=', $request->get('nit'))->get();

        if(count($company)>0){
          $message = 'La empresa ya se encuentra registrada.';
          return view('register')->with('message', $message);
        }else{

          // request por revisar, no me está pasando de aquí
          $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
          ]);

          //image name
          $newImageName = time() ."-". $request->nit .".". $request->image->extension();
          $request->image->move(public_path('images/logo'), $newImageName);

          $message = 'Registramos empresa y agente.';
          //add the User
          $user = new User();
          $user->name = $request->get('agent_name');
          $user->email = $request->get('email_agent');
          $user->password = Hash::make($request->get('password'));
          $user->type = 1;
          $user->status = 0;
          $user->save();

          //add the company
          $agency = new Agency();
          $agency->agent = $user->id;
          $agency->name = $request->get('name');
          $agency->description = $request->get('description');
          $agency->type = $request->get('type_c');
          $agency->nit = $request->get('nit');
          $agency->address = $request->get('address');
          $agency->contact = $request->get('contact');
          $agency->email = $request->get('email');
          $agency->type = $request->get('type_c');
          $agency->nit = $request->get('nit');
          $agency->status = 0;
          //logo
          $agency->logo = $newImageName;
          $agency->save();

          $message = "Su empresa ha sido registrada con éxito.  Un representante de Explora Piedecuesta se pondrá en contacto con usted después de validar la información adjuntada.";
        }
      }
      return view('success')->with('message', $message);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
