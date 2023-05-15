<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => '一郎',
            'mail' => 'tarotaro@atras.com',
            'password' => bcrypt('tarotta'),
        ]);

        DB::table('users')->insert([
            'username' => '二郎',
            'mail' => 'jirojiro@atras.com',
            'password' => bcrypt('jirojji'),
        ]);
        DB::table('users')->insert([
            'username' => '三郎',
            'mail' => 'miromiro@atras.com',
            'password' => bcrypt('mirommi')
        ]);
    }
}
