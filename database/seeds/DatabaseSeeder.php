<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call('ModuleTableSeeder');

      $this->command->info('Modules table seeded!');
    }
}

class ModuleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('modules')->delete();
        DB::table('modules')->insert([
          [
           'id' => 'IOPR1',
           'name' => 'Inleiding Object Georienteerd programmeren 1',
           'year' => 1,
           'semester' => 1,
           'ects' => 4,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IARCH',
           'name' => 'IT architectuur',
           'year' => 1,
           'semester' => 1,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IIBPM',
           'name' => 'inleiding informatiemanagement/BPM',
           'year' => 1,
           'semester' => 1,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IHBO',
           'name' => 'fundamentele HBO - (I) vaardigheden',
           'year' => 1,
           'semester' => 1,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IWDR',
           'name' => 'webdesign & realisatie',
           'year' => 1,
           'semester' => 2,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IRDB',
           'name' => 'relationele databases',
           'year' => 1,
           'semester' => 2,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IIBUI',
           'name' => 'inleiding business intelligence',
           'year' => 1,
           'semester' => 2,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IPODM',
           'name' => 'praktische opdracht business data management',
           'year' => 1,
           'semester' => 2,
           'ects' => 2,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IPOMEDT',
           'name' => 'praktische opdracht mediatechnologie',
           'year' => 1,
           'semester' => 2,
           'ects' => 2,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'INET',
           'name' => 'IT netwerkstructuren',
           'year' => 1,
           'semester' => 12,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IMUML',
           'name' => 'modelleren in UML',
           'year' => 1,
           'semester' => 3,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IOPR2',
           'name' => 'objectgeoriënteerd programmeren 2',
           'year' => 1,
           'semester' => 3,
           'ects' => 4,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IFIT',
           'name' => 'inleiding forensische ICT',
           'year' => 1,
           'semester' => 3,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IPOFIT',
           'name' => 'praktische opdracht forensisch ICT',
           'year' => 1,
           'semester' => 3,
           'ects' => 2,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IPOSE',
           'name' => 'praktische opdracht software engineering',
           'year' => 1,
           'semester' => 3,
           'ects' => 2,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'IPROV',
           'name' => 'ICT projectvaardigheden',
           'year' => 1,
           'semester' => 234,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'ICOMMP',
           'name' => 'communicatie 1',
           'year' => 1,
           'semester' => 234,
           'ects' => 3,
           'soort' => 'hoofdvak',
         ],
         [
           'id' => 'ISLP',
           'name' => 'studieloopbaanbegeleiding',
           'year' => 1,
           'semester' => 1234,
           'ects' => 1,
           'soort' => 'hoofdvak',
         ]
       ]);
    }

}
