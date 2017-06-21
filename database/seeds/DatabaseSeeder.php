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
        DB::table('dates')->delete();
        DB::table('date_module')->delete();
        DB::table('modules')->insert([
              [
               'id' => 'IOPR1',
               'name' => 'Inleiding Object Georienteerd programmeren 1',
               'ects' => 4,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IARCH',
               'name' => 'IT architectuur',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IIBPM',
               'name' => 'inleiding informatiemanagement/BPM',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IHBO',
               'name' => 'fundamentele HBO - (I) vaardigheden',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IWDR',
               'name' => 'webdesign & realisatie',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IRDB',
               'name' => 'relationele databases',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IIBUI',
               'name' => 'inleiding business intelligence',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IPODM',
               'name' => 'praktische opdracht business data management',
               'ects' => 2,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IPOMEDT',
               'name' => 'praktische opdracht mediatechnologie',
               'ects' => 2,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'INET',
               'name' => 'IT netwerkstructuren',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IMUML',
               'name' => 'modelleren in UML',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IOPR2',
               'name' => 'objectgeoriënteerd programmeren 2',
               'ects' => 4,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IFIT',
               'name' => 'inleiding forensische ICT',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IPOFIT',
               'name' => 'praktische opdracht forensisch ICT',
               'ects' => 2,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IPOSE',
               'name' => 'praktische opdracht software engineering',
               'ects' => 2,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'IPROV',
               'name' => 'ICT projectvaardigheden',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'ICOMMP',
               'name' => 'communicatie 1',
               'ects' => 3,
               'soort' => 'hoofdvak',
             ],
             [
               'id' => 'ISLP',
               'name' => 'studieloopbaanbegeleiding',
               'ects' => 1,
               'soort' => 'hoofdvak',
             ],
             [
                'id' => 'IIPBDAM',
                'name' => 'project inleiding BDaM',
                'ects' => 10,
                'soort' => 'keuzevak',
             ],
            [
                'id' => 'IIPFIT',
                'name' => 'project inleiding FICT',
                'ects' => 10,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IIPMEDT',
                'name' => 'project inleiding MedT',
                'ects' => 10,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IIPSEN',
                'name' => 'project inleiding SE',
                'ects' => 10,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IRDBMS',
                'name' => 'relationele database systemen',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IPMEDT2',
                'name' => 'project mediatechnologie 2',
                'ects' => 6,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTD1',
                'name' => 'mediatechnologie design 1',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'ICOMMH',
                'name' => 'communicatie hoofdfase',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'ISLH',
                'name' => 'studieloopbaanbegeleiding hoofdfase',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'ISCRIPT',
                'name' => 'scripting',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IPMEDT3',
                'name' => 'project mediatechnologie 3',
                'ects' => 6,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTUE',
                'name' => 'usability design',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IQUA',
                'name' => 'kwaliteit in de IT',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IPMEDT5',
                'name' => 'project mediatechnologie 5',
                'ects' => 6,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTCM',
                'name' => 'mediatechnologie creative marketing',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IETH',
                'name' => 'ethiek',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IPMEDT4',
                'name' => 'project mediatechnologie 4',
                'ects' => 6,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTPMD',
                'name' => 'programming for mobile devices',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IITORG',
                'name' => 'inleiding organisatiekunde',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'ISEC',
                'name' => 'IT security',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IPMEDTH',
                'name' => 'hoofdfase-project mediatechnologie',
                'ects' => 9,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTHE1',
                'name' => 'mediatechnologie hardware engineering 1',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTHMI',
                'name' => 'human-machine-interaction',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IMTUX',
                'name' => 'user experience',
                'ects' => 3,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IWLS',
                'name' => 'stage',
                'ects' => 30,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'IWlA',
                'name' => 'afstuderen',
                'ects' => 30,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'ISENMT',
                'name' => 'sensortechnologie en media',
                'ects' => 30,
                'soort' => 'hoofdvak',
            ],
            [
                'id' => 'ISTAT',
                'name' => 'statastiek',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'ITRAPP',
                'name' => 'taal in rapporteren',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IBROZ',
                'name' => 'open bronnen onderzoek',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'ICOMAS',
                'name' => 'assessment en zelfonderzoek',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IDEPA',
                'name' => 'inleiding design patterns',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'ISDELI',
                'name' => 'IT service delivery',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IWIS',
                'name' => 'wiskunde',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKOPR',
                'name' => 'objectgeoriënteerd programmeren hoofdfase',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKPMD',
                'name' => 'programming for mobile devices',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'ISDEMA',
                'name' => 'IT servicemanagement demand',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IITPS',
                'name' => 'IT psychologie',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IBK5',
                'name' => 'opzetten eigen IT-bedrijf',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IFP2',
                'name' => 'projectmanagement PRINCE2',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKLO',
                'name' => 'logica',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'ITREWA',
                'name' => 'trendwatching',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'ILNUX1',
                'name' => 'linux 1',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKUE',
                'name' => 'usability engineering',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKEMA',
                'name' => 'kennismanagement',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKDAM',
                'name' => 'datamanagement',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IKCP',
                'name' => 'concepten in programmeertalen',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IHS',
                'name' => 'heterogene systemen',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
            [
                'id' => 'IFRAME',
                'name' => 'frameworks',
                'ects' => 3,
                'soort' => 'keuzevak',
            ],
	    [
		'id' => 'Minor',
		'name' => 'Minor',
		'ects' => '30',
		'soort' => 'hoofdvak',
	    ],
        ]);
        DB::table('dates')->insert([
            [
                'id' => 1,
                'year' => 1,
                'semester' => 1,
            ],
            [
                'id' => 2,
                'year' => 1,
                'semester' => 2,
            ],
            [
                'id' => 3,
                'year' => 1,
                'semester' => 3,
            ],
            [
                'id' => 4,
                'year' => 1,
                'semester' => 4,
            ],
            [
                'id' => 5,
                'year' => 2,
                'semester' => 1,
            ],
            [
                'id' => 6,
                'year' => 2,
                'semester' => 2,
            ],
            [
                'id' => 7,
                'year' => 2,
                'semester' => 3,
            ],
            [
                'id' => 8,
                'year' => 2,
                'semester' => 4,
            ],
            [
                'id' => 9,
                'year' => 3,
                'semester' => 1,
            ],
            [
                'id' => 10,
                'year' => 3,
                'semester' => 2,
            ],
            [
                'id' => 11,
                'year' => 3,
                'semester' => 3,
            ],
            [
                'id' => 12,
                'year' => 3,
                'semester' => 4,
            ],
            [
                'id' => 13,
                'year' => 4,
                'semester' => 1,
            ],
            [
                'id' => 14,
                'year' => 4,
                'semester' => 2,
            ],
            [
                'id' => 15,
                'year' => 4,
                'semester' => 3,
            ],
            [
                'id' => 16,
                'year' => 4,
                'semester' => 4,
            ],
        ]);
        DB::table('date_module')->insert([
            [
                'date_id' => 1,
                'module_id' => "IARCH",
            ],
            [
                'date_id' => 1,
                'module_id' => "IIBPM",
            ],
            [
                'date_id' => 1,
                'module_id' => "IHBO",
            ],
            [
                'date_id' => 1,
                'module_id' => "IOPR1",
            ],
            [
                'date_id' => 2,
                'module_id' => "IWDR",
            ],
            [
                'date_id' => 2,
                'module_id' => "IRDB",
            ],
            [
                'date_id' => 2,
                'module_id' => "IIBUI",
            ],
            [
                'date_id' => 2,
                'module_id' => "IPODM",
            ],
            [
                'date_id' => 2,
                'module_id' => "IPOMEDT",
            ],
            [
                'date_id' => 2,
                'module_id' => "INET",
            ],
            [
                'date_id' => 3,
                'module_id' => "IMUML",
            ],
            [
                'date_id' => 3,
                'module_id' => "IOPR2",
            ],
            [
                'date_id' => 3,
                'module_id' => "IFIT",
            ],
            [
                'date_id' => 3,
                'module_id' => "IPOFIT",
            ],
            [
                'date_id' => 3,
                'module_id' => "IPOSE",
            ],
            [
                'date_id' => 3,
                'module_id' => "IPROV",
            ],
            [
                'date_id' => 4,
                'module_id' => "IIPBDAM",
            ],
            [
                'date_id' => 4,
                'module_id' => "IIPFIT",
            ],
            [
                'date_id' => 4,
                'module_id' => "IIPMEDT",
            ],
            [
                'date_id' => 4,
                'module_id' => "IIPSEN",
            ],
            [
                'date_id' => 4,
                'module_id' => "ICOMMP",
            ],
            [
                'date_id' => 4,
                'module_id' => "ISLP",
            ],
            [
                'date_id' => 5,
                'module_id' => "IRDBMS",
            ],
            [
                'date_id' => 5,
                'module_id' => "IPMEDT2",
            ],
            [
                'date_id' => 5,
                'module_id' => "IMTD1",
            ],
            [
                'date_id' => 6,
                'module_id' => "ISCRIPT",
            ],
            [
                'date_id' => 6,
                'module_id' => "IPMEDT3",
            ],
            [
                'date_id' => 6,
                'module_id' => "IMTUE",
            ],
            [
                'date_id' => 7,
                'module_id' => "IQUA",
            ],
            [
                'date_id' => 7,
                'module_id' => "IPMEDT5",
            ],
            [
                'date_id' => 7,
                'module_id' => "IMTCM",
            ],
            [
                'date_id' => 7,
                'module_id' => "ICOMMH",
            ],
            [
                'date_id' => 8,
                'module_id' => "IETH",
            ],
            [
                'date_id' => 8,
                'module_id' => "IPMEDT4",
            ],
            [
                'date_id' => 8,
                'module_id' => "IMTPMD",
            ],
            [
                'date_id' => 8,
                'module_id' => "ISLH",
            ],
            [
                'date_id' => 5,
                'module_id' => "ISTAT",
            ],
            [
                'date_id' => 5,
                'module_id' => "ITRAPP",
            ],
            [
                'date_id' => 5,
                'module_id' => "IBROZ",
            ],
            [
                'date_id' => 5,
                'module_id' => "ICOMAS",
            ],
            [
                'date_id' => 5,
                'module_id' => "IDEPA",
            ],
            [
                'date_id' => 5,
                'module_id' => "ISDELI",
            ],
            [
                'date_id' => 6,
                'module_id' => "IWIS",
            ],
            [
                'date_id' => 6,
                'module_id' => "ITRAPP",
            ],
            [
                'date_id' => 6,
                'module_id' => "IKOPR",
            ],
            [
                'date_id' => 6,
                'module_id' => "ICOMAS",
            ],
            [
                'date_id' => 6,
                'module_id' => "IKPMD",
            ],
            [
                'date_id' => 6,
                'module_id' => "ISDEMA",
            ],
            [
                'date_id' => 7,
                'module_id' => "IITPS",
            ],
            [
                'date_id' => 7,
                'module_id' => "IBK5",
            ],
            [
                'date_id' => 7,
                'module_id' => "IFP2",
            ],
            [
                'date_id' => 7,
                'module_id' => "IKLO",
            ],
            [
                'date_id' => 7,
                'module_id' => "ITREWA",
            ],
            [
                'date_id' => 7,
                'module_id' => "IKUE",
            ],
            [
                'date_id' => 8,
                'module_id' => "IKEMA",
            ],
            [
                'date_id' => 8,
                'module_id' => "IKDAM",
            ],
            [
                'date_id' => 8,
                'module_id' => "IKCP",
            ],
            [
                'date_id' => 8,
                'module_id' => "IHS",
            ],
            [
                'date_id' => 8,
                'module_id' => "IFRAME",
            ],
            [
                'date_id' => 8,
                'module_id' => "ILNUX1",
            ],
            [
                'date_id' => 10,
                'module_id' => "IWLS",
            ],
	    [
                'date_id' => 10,
                'module_id' => "Minor",
            ],
            [
                'date_id' => 12,
                'module_id' => "Minor",
            ],

            [
                'date_id' => 14,
                'module_id' => "IWLA",
            ],
            [
                'date_id' => 12,
                'module_id' => "IWLS",
            ],
            [
                'date_id' => 16,
                'module_id' => "IWLA",
            ],
            [
                'date_id' => 12,
                'module_id' => "ISLH",
            ],
            [
                'date_id' => 16,
                'module_id' => "ISLH",
            ],
            [
                'date_id' => 14,
                'module_id' => "ISENMT",
            ],
            [
                'date_id' => 16,
                'module_id' => "ISENMT",
            ],
        ]);
    }

}
