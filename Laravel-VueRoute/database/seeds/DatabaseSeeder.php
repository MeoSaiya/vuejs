<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(userSeeder::class);
    }
}

//php artisan db:seed
//tao class khac de insert

class userSeeder extends Seeder{
    public function run(){
        DB::table('users')->insert([
        ['name' => 'Meo','email' => str_random(3).'@gmail.com','password' => bcrypt('JQKAT')],
        ['name' => 'mINH','email' => str_random(3).'@gmail.com','password' => bcrypt('JQKAT')],
        ['name' => 'MinhMeo','email' => str_random(3).'@gmail.com','password' => bcrypt('JQKAT')]],);
    }
}

