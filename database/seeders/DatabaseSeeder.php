<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create();
        \App\Models\User::factory()->count(1)->isAdmin()->create();


        DB::insert('insert into fields (name) values (?)', ['Software Engineering']);
        DB::insert('insert into fields (name) values (?)', ['Data Mining']);
        DB::insert('insert into fields (name) values (?)', ['Data Science']);
        DB::insert('insert into fields (name) values (?)', ['Data Engineering']);
        DB::insert('insert into fields (name) values (?)', ['Machine Learning Expert']);


        DB::insert('insert into interviews (user_id, title, date, field_id) values (?,?,?,?)', [1, "SE Interview", now(), 1]);
        DB::insert('insert into interviews (user_id, title, date, field_id) values (?,?,?,?)', [2, "SE Interview", now(), 3]);
        DB::insert('insert into interviews (user_id, title, date, field_id) values (?,?,?,?)', [3, "SE Interview", now(), 1]);

        
    }
}
