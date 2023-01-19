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

<<<<<<< HEAD
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [1, "SE Interview", '2023-01-15', 1, 'Done', 2, 'https://binus.zoom.us/j/91332383594?pwd=VGRBSG9MbUxhV1QzbGpJMzEzd2ZqUT09#success']);
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [1, "SE Interview", '2023-01-19', 1, 'Done', 1 , 'https://binus.zoom.us/j/91332383594?pwd=VGRBSG9MbUxhV1QzbGpJMzEzd2ZqUT09#success']);
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [1, "SE Interview", '2023-02-19', 1, 'Accepted', 2 ,'https://binus.zoom.us/j/91332383594?pwd=VGRBSG9MbUxhV1QzbGpJMzEzd2ZqUT09#success']);

        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [2, "SE Interview",'2023-03-19', 3, 'Accepted', 3 ,'https://binus.zoom.us/j/91332383594?pwd=VGRBSG9MbUxhV1QzbGpJMzEzd2ZqUT09#success']);
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [3, "SE Interview", '2023-04-19', 1, 'Accepted', 4, 'https://binus.zoom.us/j/91332383594?pwd=VGRBSG9MbUxhV1QzbGpJMzEzd2ZqUT09#success']);
=======
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [1, "SE Interview", '2023-01-15', 1, 'Done', 2, 'bit.ly/meeting']);
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [1, "SE Interview", '2023-01-19', 1, 'Done', 1, 'bit.ly/meeting']);
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [1, "SE Interview", '2023-02-19', 1, 'Accepted', 2, 'bit.ly/meeting']);

        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [2, "SE Interview",'2023-03-19', 3, 'Accepted', 3, 'bit.ly/meeting']);
        DB::insert('insert into interviews (user_id, title, date, field_id,status, shift, link) values (?,?,?,?,?,?,?)', [3, "SE Interview", '2023-04-19', 1, 'Accepted', 4, 'bit.ly/meeting']);
>>>>>>> 0eed12266c4f999c0364705f398d289b96414c4e
    }
}
