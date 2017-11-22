 <?php



use Faker\Generator as Faker;

use App\Bus;
use App\Route;
use App\Driver;

$factory->define(App\Bus::class, function (Faker $faker) {
    
    $rid = Route::all()->pluck('id')->toArray();
    $did = Driver::all()->pluck('id')->toArray();
    
    return [
        'bus_number' => $faker->city,
        'time' => $faker->time($format = 'H:i:s'),
        'availablity' => 1,
        'driver_id' => $faker->randomElement($did ),
        'route_id' =>  $faker->randomElement($rid ) ,
    ];
});
