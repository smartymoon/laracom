<?php

use Illuminate\Database\Seeder;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Model\Example', 5)->create()->each(function($u) {
            $u->images()->save(factory('App\Model\ExamplePic')->make());
        });
    }
}
