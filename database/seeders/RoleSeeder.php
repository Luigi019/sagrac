<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
Use Spatie\Permission\Models\Permission;
use App\Models\User;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user  = User::create([
            'email'=>'test@test.com',
            'name'=>'Sistema de atencion al ciudadano',
            'cedula'=>'G-121212121212121',
            'password'=>\Hash::make('password')
        ]);

      //Permissions

      $p1 = Permission::create(["name"=>"Agregar quejas y reclamos"]);
      $p2 = Permission::create(["name"=>"Consultar quejas y reclamos"]);
      $p3 = Permission::create(["name"=>"Editar quejas y reclamos"]);
      $p4 = Permission::create(["name"=>"Eliminar quejas y reclamos"]);

      $p5 = Permission::create(["name"=>"Agregar usuario"]);
      $p6 = Permission::create(["name"=>"Consultar usuario"]);
      $p7 = Permission::create(["name"=>"Editar usuario"]);
      $p8 = Permission::create(["name"=>"Eliminar usuario"]);

      $p9 = Permission::create(["name"=>"Auditor"]);

      $r1 = Role::create(["name"=>"Administrador"])->givePermissionTo([$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8, $p9]);
      $r2 = Role::create(["name"=>"Director"])->givePermissionTo([$p1, $p2, $p3, $p4, $p5, $p6, $p7, $p8]);
      $r3 = Role::create(["name"=>"Coordinador de beneficios"]);
      $r4 = Role::create(["name"=>"Coordinador de quejas y reclamos"])->givePermissionTo([$p1, $p2, $p3, $p4]);


        $user->assignRole($r1);
    }
}
