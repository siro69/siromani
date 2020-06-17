<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\User;
use App\Group;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        App\User::truncate();
//        Spatie\Permission\Models\Role::truncate();

        $role = Role::create(['name' => 'master']);
        $role->syncPermissions(['BlogCategories-create', 'BlogCategories-edit', 'BlogCategories-delete']);
        $group = Group::where('name','=','admin')->first();
        $user = new User;
        $user->first_name = 'kumari';
        $user->last_name = 'job';
        $user->email  = 'admin@admin.com';
        $user->password = bcrypt('secret');
        $user->active = 1;

        $user->assignRole('master');
        $user->save();
        $user->groups()->attach($group);


        $role = Role::create(['name' => 'developer']);
        $role->syncPermissions(['BlogCategories-create','developer-access', 'BlogCategories-edit', 'BlogCategories-delete']);
        $user = new User;
        $user->first_name = 'hukum';
        $user->last_name = 'basnet';
        $user->email  = 'basnet@basnet.com';
        $user->password = bcrypt('secret');
        $user->active = 1;
        $user->assignRole('developer');
        $user->save();




    }
}
