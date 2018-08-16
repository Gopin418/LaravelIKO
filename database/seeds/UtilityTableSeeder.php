<?php

use Illuminate\Database\Seeder;
use App\utility;

class UtilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $air = new utility;
      $air->jenis       = 'Air';
      $air->name        = 'Eka';
      $air->departement = 'PEA';
      $air->email       = 'eka@gmail.com';
      $air->telp        = '08983201224';
      $air->save();

      $angin = new utility;
      $angin->jenis       = 'Angin';
      $angin->name        = 'Eki';
      $angin->departement = 'PCA';
      $angin->email       = 'ek1@gmail.com';
      $angin->telp        = '08983201224';
      $angin->save();

      $listrik = new utility;
      $listrik->jenis       = 'Listrik';
      $listrik->name        = 'Eko';
      $listrik->departement = 'PPA';
      $listrik->email       = 'eko@gmail.com';
      $listrik->telp        = '08983201224';
      $listrik->save();

      $steam = new utility;
      $steam->jenis       = 'Steam';
      $steam->name        = 'Eku';
      $steam->departement = 'SSA';
      $steam->email       = 'eku@gmail.com';
      $steam->telp        = '08983201224';
      $steam->save();
    }
}
