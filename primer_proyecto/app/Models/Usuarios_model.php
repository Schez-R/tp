<?php
namespace App\Models;
use CodeIgniter\Model;

Class Usuarios_model extends Model 
{
  protected $table = 'usuarios'; //nombre de la tabla en MySQ
  protected $primaryKey = 'id_usuario';//identificador de la tabla,Define el campo de clave primaria (primary key)
  protected $allowedFields = ['nombre', 'apellido', 'usuario', 'email', 'pass','perfil_id','baja','created_at']; //todos los campos de la tabla
}

//Este código configura un modelo en CodeIgniter llamado Usuarios_model que se utiliza para interactuar con la tabla 'usuarios' en una base de datos. Define las propiedades que son específicas de esta tabla, como el nombre de la tabla, la clave primaria y los campos permitidos para su manipulación.