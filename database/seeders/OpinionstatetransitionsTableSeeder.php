<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OpinionstatetransitionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('opinionstatetransitions')->delete();

        DB::table('opinionstatetransitions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'from_id' => 1,
                'to_id' => 2,
            ),
            1 =>
            array (
                'id' => 2,
                'from_id' => 2,
                'to_id' => 3,
            ),
            2 =>
            array (
                'id' => 4,
                'from_id' => 2,
                'to_id' => 4,
            ),
            3 =>
            array (
                'id' => 5,
                'from_id' => 2,
                'to_id' => 5,
            ),
            4 =>
            array (
                'id' => 3,
                'from_id' => 3,
                'to_id' => 2,
            ),
            5 =>
            array (
                'id' => 7,
                'from_id' => 3,
                'to_id' => 6,
            ),
            6 =>
            array (
                'id' => 6,
                'from_id' => 5,
                'to_id' => 6,
            ),
        ));


    }
}
