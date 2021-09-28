<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\SuperAdmin;
use Illuminate\Support\Facades\Hash;



class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user= new User();

      $user->name="superadmin";
      $user->role=1;

      $user->email="superadmin@gmail.com";
      $user->password= Hash::make("123456");
      $user->save();


      $user2= new User();

      $user2->name="admin";
      $user->role=2;
      $user2->email="admin@gmail.com";
      $user2->password= Hash::make("123456");
      $user2->save();

    }
}
