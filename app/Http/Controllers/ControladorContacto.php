<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;

class ControladorContacto extends Controller
{
    /*$table->string('nombreContacto');
    $table->string('numeroTelefono');
    $table->string('area');
    $table->string('actividad');
    $table->string('empresa');
    $table->string('descripcion');*/

    public function crearContacto($nombreContacto,$numeroTelefono,$area, $actividad, $empresa, $descripcion)
    {
        $now = date("Y-m-d H:i:s");
        DB::insert('insert into tabla_contactos(nombreContacto, numeroTelefono, area, actividad, empresa, descripcion, created_at, updated_at) values(?, ?, ?, ?, ?, ?, ?, ?)', [$nombreContacto, $numeroTelefono, $area, $actividad, $empresa, $descripcion ,$now, $now]);
        return 'success';
    }

    public function editarContactos($id, $nombreContacto,$numeroTelefono,$area, $actividad, $empresa, $descripcion) {
        $now = date("Y-m-d H:i:s");
        DB::update('update tabla_contactos set nombreContacto = ?, numeroTelefono = ?, area = ?, actividad = ?, empresa = ?, descripcion = ?, updated_at = ? where id = ?',[$nombreContacto, $numeroTelefono, $area, $actividad, $empresa, $descripcion, $now, $id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to go back.';
     }

     public function borrarContactos($id)
    {
        $results= DB::delete('delete from tabla_contactos where id=?', [$id]);
       return "eliminado";
    }
}
