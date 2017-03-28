<?php
use Faker\Factory as Faker;
use App\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\City::class,50)->create();
    }
}
