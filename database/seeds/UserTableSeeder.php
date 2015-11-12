<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // truncate the user table of data first
        User::truncate();

        // create 2 User objects

        //$user1 = new User();
        //$user1->username = 'john';
        //$user1->fullname = 'John Lennon';
       //$user1->email = 'john@exmaple.com';
       // $user1->password = bcrypt('password');
        //$user1->save();


        //$user2 = new User();
        //$user2->username = 'paul';
       // $user2->fullname = 'paul MacCartney';
        //$user2->email = 'paul@exmaple.com';
        //$user2->password = bcrypt('password');
        //$user2->save();

        // use the factory funtion
        factory(User::class, 50)->create();
    }


}
