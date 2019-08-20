<?php

use Illuminate\Database\Seeder;
use App\Model\UserClient;

class UserClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(UserClient::class, $count)->create();
    }
}
