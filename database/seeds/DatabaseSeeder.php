<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\Driver::class,50)->create();
        //factory(App\Route::class,50)->create();
        factory(App\Bus::class,15)->create();
        
    }
}
