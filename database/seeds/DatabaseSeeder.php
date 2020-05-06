<?php

use App\Http\Controllers\Country;
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
        $this->call([
            AreaGroupSeeder::class,
            BusinessAreaSeeder::class,
        ]);
        factory(App\Company::class)->times(2)->create();
        factory(App\User::class, 4)->create();
        //$countries = factory(App\Country::class, 2)->create();
        // foreach($countries as $country) {
        //     factory(App\City::class, 2)->create([
        //         'country_id' => $country->id
        //     ]);
        // }
        factory(App\Country::class, 2)->create();
        factory(App\Province::class, 2)->create();
        factory(App\City::class, 2)->create();
        factory(App\Address::class, 2)->create();
        factory(App\Account::class, 2)->create();
        factory(App\Bank::class, 4)->create();
        factory(App\Phone::class, 4)->create();
        factory(App\Partner::class, 6)->create();
        factory(App\Service::class, 5)->create();
        //factory(App\ProviderClient::class, 5)->create();
        //factory(App\AccountUser::class, 5)->create();
    }
}
