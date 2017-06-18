<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
            'nombre' => 'Pepe Pedro',
            'apellidoPaterno' => 'Peréz',
            'apellidoMaterno' => 'Pereira',
            'email' => 'mail@correo.com',
            'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
            'password' => bcrypt('admin'),
            'identificacion' => '111128',
            'tipo' => '1',
        ]);
        
        DB::table('usuario')->insert([
            'nombre' => 'Juanito',
            'apellidoPaterno' => 'Hernandéz',
            'apellidoMaterno' => 'Duarte',
            'email' => 'Juandsl_w@correo.com',
            'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
            'password' => bcrypt('norman'),
            'identificacion' => '2014670000',
            'tipo' => '2',
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Izacc',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Juste',
            'email' => 'Izacc_w@correo.com',
            'facebook' => 'https://www.facebook.com/search/top/?q=servicio%20medico%20upiiz',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670126',
            'tipo' => '2',
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Ale',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'rebelsw@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670004',
            'tipo' => '2',
        ]);

        DB::table('usuario')->insert([
            'nombre' => 'Benji',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'Benjision@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670005',
            'tipo' => '2',
        ]);
       DB::table('usuario')->insert([
            'nombre' => 'Diego',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'Diego@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670006',
            'tipo' => '2',
        ]);
        DB::table('usuario')->insert([
            'nombre' => 'Pao',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'Paoo@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670007',
            'tipo' => '2',
        ]);
         DB::table('usuario')->insert([
            'nombre' => 'Karla',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'karla@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670008',
            'tipo' => '2',
        ]);
       	 DB::table('usuario')->insert([
            'nombre' => 'Fatima',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'Fatima@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670009',
            'tipo' => '2',
        ]);
       	 DB::table('usuario')->insert([
            'nombre' => 'Natalia',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Silva',
            'email' => 'Natalia@correo.com',
            'password' => bcrypt('1234'),
            'identificacion' => '2016670010',
            'tipo' => '2',
        ]);

        DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont11@correo.com',
'password' => '1234',
'identificacion' => '2016670011',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont12@correo.com',
'password' => '1234',
'identificacion' => '2016670012',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont13@correo.com',
'password' => '1234',
'identificacion' => '2016670013',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont14@correo.com',
'password' => '1234',
'identificacion' => '2016670014',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont15@correo.com',
'password' => '1234',
'identificacion' => '2016670015',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont16@correo.com',
'password' => '1234',
'identificacion' => '2016670016',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont17@correo.com',
'password' => '1234',
'identificacion' => '2016670017',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont18@correo.com',
'password' => '1234',
'identificacion' => '2016670018',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont19@correo.com',
'password' => '1234',
'identificacion' => '2016670019',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont20@correo.com',
'password' => '1234',
'identificacion' => '2016670020',
]);

DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont21@correo.com',
'password' => '1234',
'identificacion' => '2016670021',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont22@correo.com',
'password' => '1234',
'identificacion' => '2016670022',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont23@correo.com',
'password' => '1234',
'identificacion' => '2016670023',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont24@correo.com',
'password' => '1234',
'identificacion' => '2016670024',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont25@correo.com',
'password' => '1234',
'identificacion' => '2016670025',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont26@correo.com',
'password' => '1234',
'identificacion' => '2016670026',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont27@correo.com',
'password' => '1234',
'identificacion' => '2016670027',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont28@correo.com',
'password' => '1234',
'identificacion' => '2016670028',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont29@correo.com',
'password' => '1234',
'identificacion' => '2016670029',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont30@correo.com',
'password' => '1234',
'identificacion' => '2016670030',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont31@correo.com',
'password' => '1234',
'identificacion' => '2016670031',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont32@correo.com',
'password' => '1234',
'identificacion' => '2016670032',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont33@correo.com',
'password' => '1234',
'identificacion' => '2016670033',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont34@correo.com',
'password' => '1234',
'identificacion' => '2016670034',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont35@correo.com',
'password' => '1234',
'identificacion' => '2016670035',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont36@correo.com',
'password' => '1234',
'identificacion' => '2016670036',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont37@correo.com',
'password' => '1234',
'identificacion' => '2016670037',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont38@correo.com',
'password' => '1234',
'identificacion' => '2016670038',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont39@correo.com',
'password' => '1234',
'identificacion' => '2016670039',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont40@correo.com',
'password' => '1234',
'identificacion' => '2016670040',
]);
DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont41@correo.com',
'password' => '1234',
'identificacion' => '2016670041',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont42@correo.com',
'password' => '1234',
'identificacion' => '2016670042',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont43@correo.com',
'password' => '1234',
'identificacion' => '2016670043',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont44@correo.com',
'password' => '1234',
'identificacion' => '2016670044',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont45@correo.com',
'password' => '1234',
'identificacion' => '2016670045',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont46@correo.com',
'password' => '1234',
'identificacion' => '2016670046',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont47@correo.com',
'password' => '1234',
'identificacion' => '2016670047',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont48@correo.com',
'password' => '1234',
'identificacion' => '2016670048',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont49@correo.com',
'password' => '1234',
'identificacion' => '2016670049',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont50@correo.com',
'password' => '1234',
'identificacion' => '2016670050',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont51@correo.com',
'password' => '1234',
'identificacion' => '2016670051',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont52@correo.com',
'password' => '1234',
'identificacion' => '2016670052',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont53@correo.com',
'password' => '1234',
'identificacion' => '2016670053',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont54@correo.com',
'password' => '1234',
'identificacion' => '2016670054',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont55@correo.com',
'password' => '1234',
'identificacion' => '2016670055',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont56@correo.com',
'password' => '1234',
'identificacion' => '2016670056',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont57@correo.com',
'password' => '1234',
'identificacion' => '2016670057',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont58@correo.com',
'password' => '1234',
'identificacion' => '2016670058',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont59@correo.com',
'password' => '1234',
'identificacion' => '2016670059',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont60@correo.com',
'password' => '1234',
'identificacion' => '2016670060',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont61@correo.com',
'password' => '1234',
'identificacion' => '2016670061',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont62@correo.com',
'password' => '1234',
'identificacion' => '2016670062',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont63@correo.com',
'password' => '1234',
'identificacion' => '2016670063',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont64@correo.com',
'password' => '1234',
'identificacion' => '2016670064',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont65@correo.com',
'password' => '1234',
'identificacion' => '2016670065',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont66@correo.com',
'password' => '1234',
'identificacion' => '2016670066',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont67@correo.com',
'password' => '1234',
'identificacion' => '2016670067',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont68@correo.com',
'password' => '1234',
'identificacion' => '2016670068',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont69@correo.com',
'password' => '1234',
'identificacion' => '2016670069',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont70@correo.com',
'password' => '1234',
'identificacion' => '2016670070',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont71@correo.com',
'password' => '1234',
'identificacion' => '2016670071',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont72@correo.com',
'password' => '1234',
'identificacion' => '2016670072',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont73@correo.com',
'password' => '1234',
'identificacion' => '2016670073',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont74@correo.com',
'password' => '1234',
'identificacion' => '2016670074',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont75@correo.com',
'password' => '1234',
'identificacion' => '2016670075',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont76@correo.com',
'password' => '1234',
'identificacion' => '2016670076',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont77@correo.com',
'password' => '1234',
'identificacion' => '2016670077',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont78@correo.com',
'password' => '1234',
'identificacion' => '2016670078',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont79@correo.com',
'password' => '1234',
'identificacion' => '2016670079',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont80@correo.com',
'password' => '1234',
'identificacion' => '2016670080',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont81@correo.com',
'password' => '1234',
'identificacion' => '2016670081',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont82@correo.com',
'password' => '1234',
'identificacion' => '2016670082',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont83@correo.com',
'password' => '1234',
'identificacion' => '2016670083',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont84@correo.com',
'password' => '1234',
'identificacion' => '2016670084',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont85@correo.com',
'password' => '1234',
'identificacion' => '2016670085',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont86@correo.com',
'password' => '1234',
'identificacion' => '2016670086',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont87@correo.com',
'password' => '1234',
'identificacion' => '2016670087',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont88@correo.com',
'password' => '1234',
'identificacion' => '2016670088',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont89@correo.com',
'password' => '1234',
'identificacion' => '2016670089',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont90@correo.com',
'password' => '1234',
'identificacion' => '2016670090',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont91@correo.com',
'password' => '1234',
'identificacion' => '2016670091',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont92@correo.com',
'password' => '1234',
'identificacion' => '2016670092',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont93@correo.com',
'password' => '1234',
'identificacion' => '2016670093',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont94@correo.com',
'password' => '1234',
'identificacion' => '2016670094',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont95@correo.com',
'password' => '1234',
'identificacion' => '2016670095',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont96@correo.com',
'password' => '1234',
'identificacion' => '2016670096',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont97@correo.com',
'password' => '1234',
'identificacion' => '2016670097',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont98@correo.com',
'password' => '1234',
'identificacion' => '2016670098',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont99@correo.com',
'password' => '1234',
'identificacion' => '2016670099',
]);
DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont100@correo.com',
'password' => '1234',
'identificacion' => '2016670100',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont101@correo.com',
'password' => '1234',
'identificacion' => '2016670101',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont102@correo.com',
'password' => '1234',
'identificacion' => '2016670102',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont103@correo.com',
'password' => '1234',
'identificacion' => '2016670103',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont104@correo.com',
'password' => '1234',
'identificacion' => '2016670104',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont105@correo.com',
'password' => '1234',
'identificacion' => '2016670105',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont106@correo.com',
'password' => '1234',
'identificacion' => '2016670106',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont107@correo.com',
'password' => '1234',
'identificacion' => '2016670107',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont108@correo.com',
'password' => '1234',
'identificacion' => '2016670108',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont109@correo.com',
'password' => '1234',
'identificacion' => '2016670109',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont110@correo.com',
'password' => '1234',
'identificacion' => '2016670110',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont111@correo.com',
'password' => '1234',
'identificacion' => '2016670111',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont112@correo.com',
'password' => '1234',
'identificacion' => '2016670112',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont113@correo.com',
'password' => '1234',
'identificacion' => '2016670113',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont114@correo.com',
'password' => '1234',
'identificacion' => '2016670114',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont115@correo.com',
'password' => '1234',
'identificacion' => '2016670115',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont116@correo.com',
'password' => '1234',
'identificacion' => '2016670116',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont117@correo.com',
'password' => '1234',
'identificacion' => '2016670117',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont118@correo.com',
'password' => '1234',
'identificacion' => '2016670118',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont119@correo.com',
'password' => '1234',
'identificacion' => '2016670119',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont120@correo.com',
'password' => '1234',
'identificacion' => '2016670120',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont121@correo.com',
'password' => '1234',
'identificacion' => '2016670121',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont122@correo.com',
'password' => '1234',
'identificacion' => '2016670122',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont123@correo.com',
'password' => '1234',
'identificacion' => '2016670123',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont124@correo.com',
'password' => '1234',
'identificacion' => '2016670124',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont125@correo.com',
'password' => '1234',
'identificacion' => '2016670125',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont126@correo.com',
'password' => '1234',
'identificacion' => '2015670126',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont127@correo.com',
'password' => '1234',
'identificacion' => '2016670127',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont128@correo.com',
'password' => '1234',
'identificacion' => '2016670128',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont129@correo.com',
'password' => '1234',
'identificacion' => '2016670129',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont130@correo.com',
'password' => '1234',
'identificacion' => '2016670130',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont131@correo.com',
'password' => '1234',
'identificacion' => '2016670131',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont132@correo.com',
'password' => '1234',
'identificacion' => '2016670132',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont133@correo.com',
'password' => '1234',
'identificacion' => '2016670133',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont134@correo.com',
'password' => '1234',
'identificacion' => '2016670134',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont135@correo.com',
'password' => '1234',
'identificacion' => '2016670135',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont136@correo.com',
'password' => '1234',
'identificacion' => '2016670136',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont137@correo.com',
'password' => '1234',
'identificacion' => '2016670137',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont138@correo.com',
'password' => '1234',
'identificacion' => '2016670138',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont139@correo.com',
'password' => '1234',
'identificacion' => '2016670139',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont140@correo.com',
'password' => '1234',
'identificacion' => '2016670140',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont141@correo.com',
'password' => '1234',
'identificacion' => '2016670141',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont142@correo.com',
'password' => '1234',
'identificacion' => '2016670142',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont143@correo.com',
'password' => '1234',
'identificacion' => '2016670143',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont144@correo.com',
'password' => '1234',
'identificacion' => '2016670144',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont145@correo.com',
'password' => '1234',
'identificacion' => '2016670145',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont146@correo.com',
'password' => '1234',
'identificacion' => '2016670146',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont147@correo.com',
'password' => '1234',
'identificacion' => '2016670147',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont148@correo.com',
'password' => '1234',
'identificacion' => '2016670148',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont149@correo.com',
'password' => '1234',
'identificacion' => '2016670149',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont150@correo.com',
'password' => '1234',
'identificacion' => '2016670150',
]);

DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont151@correo.com',
'password' => '1234',
'identificacion' => '2016670151',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont152@correo.com',
'password' => '1234',
'identificacion' => '2016670152',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont153@correo.com',
'password' => '1234',
'identificacion' => '2016670153',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont154@correo.com',
'password' => '1234',
'identificacion' => '2016670154',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont155@correo.com',
'password' => '1234',
'identificacion' => '2016670155',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont156@correo.com',
'password' => '1234',
'identificacion' => '2016670156',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont157@correo.com',
'password' => '1234',
'identificacion' => '2016670157',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont158@correo.com',
'password' => '1234',
'identificacion' => '2016670158',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont159@correo.com',
'password' => '1234',
'identificacion' => '2016670159',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont160@correo.com',
'password' => '1234',
'identificacion' => '2016670160',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont161@correo.com',
'password' => '1234',
'identificacion' => '2016670161',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont162@correo.com',
'password' => '1234',
'identificacion' => '2016670162',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont163@correo.com',
'password' => '1234',
'identificacion' => '2016670163',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont164@correo.com',
'password' => '1234',
'identificacion' => '2016670164',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont165@correo.com',
'password' => '1234',
'identificacion' => '2016670165',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont166@correo.com',
'password' => '1234',
'identificacion' => '2016670166',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont167@correo.com',
'password' => '1234',
'identificacion' => '2016670167',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont168@correo.com',
'password' => '1234',
'identificacion' => '2016670168',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont169@correo.com',
'password' => '1234',
'identificacion' => '2016670169',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont170@correo.com',
'password' => '1234',
'identificacion' => '2016670170',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont171@correo.com',
'password' => '1234',
'identificacion' => '2016670171',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont172@correo.com',
'password' => '1234',
'identificacion' => '2016670172',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont173@correo.com',
'password' => '1234',
'identificacion' => '2016670173',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont174@correo.com',
'password' => '1234',
'identificacion' => '2016670174',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont175@correo.com',
'password' => '1234',
'identificacion' => '2016670175',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont176@correo.com',
'password' => '1234',
'identificacion' => '2016670176',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont177@correo.com',
'password' => '1234',
'identificacion' => '2016670177',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont178@correo.com',
'password' => '1234',
'identificacion' => '2016670178',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont179@correo.com',
'password' => '1234',
'identificacion' => '2016670179',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont180@correo.com',
'password' => '1234',
'identificacion' => '2016670180',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont181@correo.com',
'password' => '1234',
'identificacion' => '2016670181',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont182@correo.com',
'password' => '1234',
'identificacion' => '2016670182',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont183@correo.com',
'password' => '1234',
'identificacion' => '2016670183',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont184@correo.com',
'password' => '1234',
'identificacion' => '2016670184',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont185@correo.com',
'password' => '1234',
'identificacion' => '2016670185',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont186@correo.com',
'password' => '1234',
'identificacion' => '2016670186',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont187@correo.com',
'password' => '1234',
'identificacion' => '2016670187',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont188@correo.com',
'password' => '1234',
'identificacion' => '2016670188',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont189@correo.com',
'password' => '1234',
'identificacion' => '2016670189',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont190@correo.com',
'password' => '1234',
'identificacion' => '2016670190',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont191@correo.com',
'password' => '1234',
'identificacion' => '2016670191',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont192@correo.com',
'password' => '1234',
'identificacion' => '2016670192',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont193@correo.com',
'password' => '1234',
'identificacion' => '2016670193',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont194@correo.com',
'password' => '1234',
'identificacion' => '2016670194',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont195@correo.com',
'password' => '1234',
'identificacion' => '2016670195',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont196@correo.com',
'password' => '1234',
'identificacion' => '2016670196',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont197@correo.com',
'password' => '1234',
'identificacion' => '2016670197',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont198@correo.com',
'password' => '1234',
'identificacion' => '2016670198',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont199@correo.com',
'password' => '1234',
'identificacion' => '2016670199',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont200@correo.com',
'password' => '1234',
'identificacion' => '2016670200',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont201@correo.com',
'password' => '1234',
'identificacion' => '2016670201',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont202@correo.com',
'password' => '1234',
'identificacion' => '2016670202',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont203@correo.com',
'password' => '1234',
'identificacion' => '2016670203',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont204@correo.com',
'password' => '1234',
'identificacion' => '2016670204',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont205@correo.com',
'password' => '1234',
'identificacion' => '2016670205',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont206@correo.com',
'password' => '1234',
'identificacion' => '2016670206',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont207@correo.com',
'password' => '1234',
'identificacion' => '2016670207',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont208@correo.com',
'password' => '1234',
'identificacion' => '2016670208',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont209@correo.com',
'password' => '1234',
'identificacion' => '2016670209',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont210@correo.com',
'password' => '1234',
'identificacion' => '2016670210',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont211@correo.com',
'password' => '1234',
'identificacion' => '2016670211',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont212@correo.com',
'password' => '1234',
'identificacion' => '2016670212',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont213@correo.com',
'password' => '1234',
'identificacion' => '2016670213',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont214@correo.com',
'password' => '1234',
'identificacion' => '2016670214',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont215@correo.com',
'password' => '1234',
'identificacion' => '2016670215',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont216@correo.com',
'password' => '1234',
'identificacion' => '2016670216',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont217@correo.com',
'password' => '1234',
'identificacion' => '2016670217',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont218@correo.com',
'password' => '1234',
'identificacion' => '2016670218',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont219@correo.com',
'password' => '1234',
'identificacion' => '2016670219',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont220@correo.com',
'password' => '1234',
'identificacion' => '2016670220',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont221@correo.com',
'password' => '1234',
'identificacion' => '2016670221',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont222@correo.com',
'password' => '1234',
'identificacion' => '2016670222',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont223@correo.com',
'password' => '1234',
'identificacion' => '2016670223',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont224@correo.com',
'password' => '1234',
'identificacion' => '2016670224',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont225@correo.com',
'password' => '1234',
'identificacion' => '2016670225',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont226@correo.com',
'password' => '1234',
'identificacion' => '2016670226',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont227@correo.com',
'password' => '1234',
'identificacion' => '2016670227',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont228@correo.com',
'password' => '1234',
'identificacion' => '2016670228',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont229@correo.com',
'password' => '1234',
'identificacion' => '2016670229',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont230@correo.com',
'password' => '1234',
'identificacion' => '2016670230',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont231@correo.com',
'password' => '1234',
'identificacion' => '2016670231',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont232@correo.com',
'password' => '1234',
'identificacion' => '2016670232',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont233@correo.com',
'password' => '1234',
'identificacion' => '2016670233',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont234@correo.com',
'password' => '1234',
'identificacion' => '2016670234',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont235@correo.com',
'password' => '1234',
'identificacion' => '2016670235',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont236@correo.com',
'password' => '1234',
'identificacion' => '2016670236',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont237@correo.com',
'password' => '1234',
'identificacion' => '2016670237',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont238@correo.com',
'password' => '1234',
'identificacion' => '2016670238',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont239@correo.com',
'password' => '1234',
'identificacion' => '2016670239',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont240@correo.com',
'password' => '1234',
'identificacion' => '2016670240',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont241@correo.com',
'password' => '1234',
'identificacion' => '2016670241',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont242@correo.com',
'password' => '1234',
'identificacion' => '2016670242',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont243@correo.com',
'password' => '1234',
'identificacion' => '2016670243',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont244@correo.com',
'password' => '1234',
'identificacion' => '2016670244',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont245@correo.com',
'password' => '1234',
'identificacion' => '2016670245',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont246@correo.com',
'password' => '1234',
'identificacion' => '2016670246',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont247@correo.com',
'password' => '1234',
'identificacion' => '2016670247',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont248@correo.com',
'password' => '1234',
'identificacion' => '2016670248',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont249@correo.com',
'password' => '1234',
'identificacion' => '2016670249',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont250@correo.com',
'password' => '1234',
'identificacion' => '2016670250',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont251@correo.com',
'password' => '1234',
'identificacion' => '2016670251',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont252@correo.com',
'password' => '1234',
'identificacion' => '2016670252',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont253@correo.com',
'password' => '1234',
'identificacion' => '2016670253',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont254@correo.com',
'password' => '1234',
'identificacion' => '2016670254',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont255@correo.com',
'password' => '1234',
'identificacion' => '2016670255',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont256@correo.com',
'password' => '1234',
'identificacion' => '2016670256',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont257@correo.com',
'password' => '1234',
'identificacion' => '2016670257',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont258@correo.com',
'password' => '1234',
'identificacion' => '2016670258',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont259@correo.com',
'password' => '1234',
'identificacion' => '2016670259',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont260@correo.com',
'password' => '1234',
'identificacion' => '2016670260',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont261@correo.com',
'password' => '1234',
'identificacion' => '2016670261',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont262@correo.com',
'password' => '1234',
'identificacion' => '2016670262',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont263@correo.com',
'password' => '1234',
'identificacion' => '2016670263',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont264@correo.com',
'password' => '1234',
'identificacion' => '2016670264',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont265@correo.com',
'password' => '1234',
'identificacion' => '2016670265',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont266@correo.com',
'password' => '1234',
'identificacion' => '2016670266',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont267@correo.com',
'password' => '1234',
'identificacion' => '2016670267',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont268@correo.com',
'password' => '1234',
'identificacion' => '2016670268',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont269@correo.com',
'password' => '1234',
'identificacion' => '2016670269',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont270@correo.com',
'password' => '1234',
'identificacion' => '2016670270',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont271@correo.com',
'password' => '1234',
'identificacion' => '2016670271',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont272@correo.com',
'password' => '1234',
'identificacion' => '2016670272',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont273@correo.com',
'password' => '1234',
'identificacion' => '2016670273',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont274@correo.com',
'password' => '1234',
'identificacion' => '2016670274',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont275@correo.com',
'password' => '1234',
'identificacion' => '2016670275',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont276@correo.com',
'password' => '1234',
'identificacion' => '2016670276',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont277@correo.com',
'password' => '1234',
'identificacion' => '2016670277',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont278@correo.com',
'password' => '1234',
'identificacion' => '2016670278',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont279@correo.com',
'password' => '1234',
'identificacion' => '2016670279',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont280@correo.com',
'password' => '1234',
'identificacion' => '2016670280',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont281@correo.com',
'password' => '1234',
'identificacion' => '2016670281',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont282@correo.com',
'password' => '1234',
'identificacion' => '2016670282',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont283@correo.com',
'password' => '1234',
'identificacion' => '2016670283',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont284@correo.com',
'password' => '1234',
'identificacion' => '2016670284',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont285@correo.com',
'password' => '1234',
'identificacion' => '2016670285',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont286@correo.com',
'password' => '1234',
'identificacion' => '2016670286',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont287@correo.com',
'password' => '1234',
'identificacion' => '2016670287',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont288@correo.com',
'password' => '1234',
'identificacion' => '2016670288',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont289@correo.com',
'password' => '1234',
'identificacion' => '2016670289',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont290@correo.com',
'password' => '1234',
'identificacion' => '2016670290',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont291@correo.com',
'password' => '1234',
'identificacion' => '2016670291',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont292@correo.com',
'password' => '1234',
'identificacion' => '2016670292',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont293@correo.com',
'password' => '1234',
'identificacion' => '2016670293',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont294@correo.com',
'password' => '1234',
'identificacion' => '2016670294',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont295@correo.com',
'password' => '1234',
'identificacion' => '2016670295',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont296@correo.com',
'password' => '1234',
'identificacion' => '2016670296',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont297@correo.com',
'password' => '1234',
'identificacion' => '2016670297',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont298@correo.com',
'password' => '1234',
'identificacion' => '2016670298',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont299@correo.com',
'password' => '1234',
'identificacion' => '2016670299',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont300@correo.com',
'password' => '1234',
'identificacion' => '2016670300',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont301@correo.com',
'password' => '1234',
'identificacion' => '2016670301',
]);

DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont302@correo.com',
'password' => '1234',
'identificacion' => '2016670302',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont303@correo.com',
'password' => '1234',
'identificacion' => '2016670303',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont304@correo.com',
'password' => '1234',
'identificacion' => '2016670304',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont305@correo.com',
'password' => '1234',
'identificacion' => '2016670305',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont306@correo.com',
'password' => '1234',
'identificacion' => '2016670306',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont307@correo.com',
'password' => '1234',
'identificacion' => '2016670307',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont308@correo.com',
'password' => '1234',
'identificacion' => '2016670308',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont309@correo.com',
'password' => '1234',
'identificacion' => '2016670309',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont310@correo.com',
'password' => '1234',
'identificacion' => '2016670310',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont311@correo.com',
'password' => '1234',
'identificacion' => '2016670311',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont312@correo.com',
'password' => '1234',
'identificacion' => '2016670312',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont313@correo.com',
'password' => '1234',
'identificacion' => '2016670313',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont314@correo.com',
'password' => '1234',
'identificacion' => '2016670314',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont315@correo.com',
'password' => '1234',
'identificacion' => '2016670315',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont316@correo.com',
'password' => '1234',
'identificacion' => '2016670316',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont317@correo.com',
'password' => '1234',
'identificacion' => '2016670317',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont318@correo.com',
'password' => '1234',
'identificacion' => '2016670318',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont319@correo.com',
'password' => '1234',
'identificacion' => '2016670319',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont320@correo.com',
'password' => '1234',
'identificacion' => '2016670320',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont321@correo.com',
'password' => '1234',
'identificacion' => '2016670321',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont322@correo.com',
'password' => '1234',
'identificacion' => '2016670322',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont323@correo.com',
'password' => '1234',
'identificacion' => '2016670323',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont324@correo.com',
'password' => '1234',
'identificacion' => '2016670324',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont325@correo.com',
'password' => '1234',
'identificacion' => '2016670325',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont326@correo.com',
'password' => '1234',
'identificacion' => '2016670326',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont327@correo.com',
'password' => '1234',
'identificacion' => '2016670327',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont328@correo.com',
'password' => '1234',
'identificacion' => '2016670328',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont329@correo.com',
'password' => '1234',
'identificacion' => '2016670329',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont330@correo.com',
'password' => '1234',
'identificacion' => '2016670330',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont331@correo.com',
'password' => '1234',
'identificacion' => '2016670331',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont332@correo.com',
'password' => '1234',
'identificacion' => '2016670332',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont333@correo.com',
'password' => '1234',
'identificacion' => '2016670333',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont334@correo.com',
'password' => '1234',
'identificacion' => '2016670334',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont335@correo.com',
'password' => '1234',
'identificacion' => '2016670335',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont336@correo.com',
'password' => '1234',
'identificacion' => '2016670336',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont337@correo.com',
'password' => '1234',
'identificacion' => '2016670337',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont338@correo.com',
'password' => '1234',
'identificacion' => '2016670338',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont339@correo.com',
'password' => '1234',
'identificacion' => '2016670339',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont340@correo.com',
'password' => '1234',
'identificacion' => '2016670340',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont341@correo.com',
'password' => '1234',
'identificacion' => '2016670341',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont342@correo.com',
'password' => '1234',
'identificacion' => '2016670342',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont343@correo.com',
'password' => '1234',
'identificacion' => '2016670343',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont344@correo.com',
'password' => '1234',
'identificacion' => '2016670344',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont345@correo.com',
'password' => '1234',
'identificacion' => '2016670345',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont346@correo.com',
'password' => '1234',
'identificacion' => '2016670346',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont347@correo.com',
'password' => '1234',
'identificacion' => '2016670347',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont348@correo.com',
'password' => '1234',
'identificacion' => '2016670348',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont349@correo.com',
'password' => '1234',
'identificacion' => '2016670349',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont350@correo.com',
'password' => '1234',
'identificacion' => '2016670350',
]);


DB::table('usuario')->insert([
'nombre' => 'A',
'apellidoPaterno' => 'Belmont',
'apellidoMaterno' => 'Silva',
'email' => 'Belmont351@correo.com',
'password' => '1234',
'identificacion' => '2016670351',
]);
    }
}
