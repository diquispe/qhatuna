<?php

use App\Admin;
use App\Evento;
use Illuminate\Database\Seeder;

use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        $this->call(TipoEventosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(EventosTableSeeder::class);

        // $this->call(UsersTableSeeder::class);
        /*
        $users = factory(User::class, 10)->create();
        $users->each(function(User $user) use ($users){
            factory(Evento::class)
                ->times(5)
                ->create([
                    'user_id' => $user->id,
                ]);
        });

        DB::table('admins')->insert([
            'nombre' => 'Diego',
            'email' => 'diquispe@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        */


    }
}
