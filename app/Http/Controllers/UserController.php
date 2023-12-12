<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    

    public function index(){
        $users = User::select('users.name','users.email','users.fecha_nacimiento','user_domicilio.numero_exterior','user_domicilio.colonia','user_domicilio.cp','user_domicilio.ciudad')
        ->selectRaw('TIMESTAMPDIFF(YEAR,users.fecha_nacimiento,CURDATE()) AS edad')
        ->join('user_domicilio', 'users.id','=','user_domicilio.user_id')
        ->get();

        return response()->json(["users" => $users]);
    }
}
