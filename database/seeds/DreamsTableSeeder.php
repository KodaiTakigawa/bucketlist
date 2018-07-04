<?php

use Illuminate\Database\Seeder;

class DreamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'title' => 'Be a traveller',
        'detail' => 'In the future, I want to be a traveller, and then I will visit nice places.',
        'good' => 3,
        'achievement' => 'f',
        'user_id' => 2,
      ];
      DB::table('dreams')->insert($param);

      $param = [
        'title' => 'Be a teacher',
        'detail' => 'I want to teach programming for highschool students.',
        'good' => 5,
        'achievement' => 'f',
        'user_id' => 3,
      ];
      DB::table('dreams')->insert($param);

      $param = [
        'title' => 'Eat ramen',
        'detail' => 'When I went to Japan, I ate good ramen.',
        'good' => 7,
        'achievement' => 'f',
        'user_id' => '5',
      ];
      DB::table('dreams')->insert($param);

      $param = [
        'title' => 'Be a engineer',
        'detail' => 'I want to make some interesting products that make people happy.',
        'good' => 8,
        'achievement' => 'f',
        'user_id' => 8,
      ];
      DB::table('dreams')->insert($param);

      $param = [
        'title' => 'visit Tokyo',
        'detail' => 'I heard Tokyo is very nice place.',
        'good' => 6,
        'achievement' => 't',
        'user_id' => 3,
      ];
      DB::table('dreams')->insert($param);
        //
    }
}
