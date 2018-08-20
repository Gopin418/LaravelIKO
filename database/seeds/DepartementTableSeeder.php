<?php

use Illuminate\Database\Seeder;
use App\departement;

class DepartementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $departement = new departement;
      $departement->departement = 'PEA';
      $departement->save();

      $departement1 = new departement;
      $departement1->departement = 'PCA';
      $departement1->save();

      $departement2 = new departement;
      $departement2->departement = 'PSA';
      $departement2->save();

      $departement3 = new departement;
      $departement3->departement = 'SSA';
      $departement3->save();

      $departement4 = new departement;
      $departement4->departement = 'PCE';
      $departement4->save();
    }
}
