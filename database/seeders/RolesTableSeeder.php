<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD


        \DB::table('roles')->delete();

        \DB::table('roles')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Enseignant',
                'slug' => 'PROF',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Etudiant',
                'slug' => 'STUD',
            ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'Administrateur',
                    'slug' => 'ADMI',
                ),
        ));


    }
}
=======
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Prof',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Stud',
            ),
        ));
        
        
    }
}
>>>>>>> Dev
