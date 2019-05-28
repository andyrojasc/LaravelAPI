<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class ControlladorUsuario extends Controller
{
    public function dbLogin($usr,$pwd)
    {
        //$rol= DB::select('select type from users where name=?',[$usr]);
        $results= DB::select('select * from users_i_t_m_s where nombreUsuario=? and contrasena=?',[$usr,md5($pwd)]);
        if(count($results) > 0){
        $response = [ "status" => "login", "tipoUsuario" => $results[0]->tipoUsuario, "usuario"=> $results[0]->nombreUsuario ];
        return $response;
        }
        else{
        $response = [ "status" => "invalid"];
        return $response;
        }
    }

    public function createUser($usr,$correo,$pwd, $tipoUsuario)
    {
        $now = date("Y-m-d H:i:s");
        DB::insert('insert into users_i_t_m_s(nombreUsuario, correo, contrasena, tipoUsuario, created_at, updated_at) values(?, ?, ? ,?, ?, ?)', [$usr, $correo ,md5($pwd), $tipoUsuario ,$now, $now]);
        return 'success';
    }
}
