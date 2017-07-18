<?php

use Illuminate\Database\Seeder;

class clinicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clinica')->insert([
            'numero' => '0',
            'tipo' => 'Sub Del.',
            'municipio_id' => '58',
            'mapa'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d41623.14776222582!2d-102.59717057394697!3d22.765334713626213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUPIIZ-IPN%2C+Zacatecas!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x86824931098d672b%3A0x81e350358c34bbd9!2sIMSS+Subdelegaci%C3%B3n+Zacatecas%2C+Av.+Solidaridad+2%2C+Militar%2C+98617+Guadalupe%2C+Zac.!3m2!1d22.7581779!2d-102.5222299!5e0!3m2!1ses!2smx!4v1495584465921" width="90%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
        ]);
        
        DB::table('clinica')->insert([
            'numero' => '1',
            'tipo' => 'HGZMF',
            'municipio_id' => '58',
            'mapa'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d12373.766879175771!2d-102.58526506211027!3d22.77492056162897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUPIIZ-IPN%2C+Zacatecas!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x86824e93068b2cb3%3A0xe9af7064ac9c92b7!2sIMSS%2C+Avenida+Universidad+102%2C+Lomas+del+Patrocinio%2C+98060+Zacatecas%2C+Zac.!3m2!1d22.7662625!2d-102.5598576!5e0!3m2!1ses!2smx!4v1495545674418" width="80%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
        ]);

        DB::table('clinica')->insert([
            'numero' => '2',
            'tipo' => 'HGZMF',
            'municipio_id' => '12',
        ]);

        DB::table('clinica')->insert([
            'numero' => '1',
            'tipo' => 'UMF',
            'municipio_id' => '58',
        ]);

        DB::table('clinica')->insert([
            'numero' => '3',
            'tipo' => 'UMF',
            'municipio_id' => '17',
            'mapa'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d58866.371709448445!2d-102.59695057258196!3d22.759879582056154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUnidad+Profesional+Interdisciplinaria+de+Ingenier%C3%ADa+Campus+Zacatecas%2C+Cerro+del+Gato+Ejido+la+Escondida%2C+Col.+Ciudad+Administrativa%2C+Boulevard+El+Bote+S%2FN%2C+98160+Zacatecas%2C+Zac.!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x14075c6919446cab%3A0x24ebe537d6f1b527!2sIMSS%2C+Calle+1910+123%2C+Centro%2C+98600+Guadalupe%2C+Zac.!3m2!1d22.7469552!2d-102.5122234!5e0!3m2!1ses!2smx!4v1495568557449" width="80%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
        ]);

         DB::table('clinica')->insert([
            'numero' => '4',
            'tipo' => 'UMF',
            'municipio_id' => '17',
            'mapa'=>'<iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d58863.39533191359!2d-102.61268627254599!3d22.76678373115269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x86824dfdee323e95%3A0x4b1a2d127500ff5c!2sUPIIZ-IPN%2C+Zacatecas!3m2!1d22.7839529!2d-102.61572989999999!4m5!1s0x86824ec8e848a215%3A0x37337628f866ac2e!2sAv.+M%C3%A9xico%2C+Guadalupe%2C+Zac.!3m2!1d22.7608093!2d-102.5396004!5e0!3m2!1ses!2smx!4v1495583519603" width="80%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>',
        ]);

          DB::table('clinica')->insert([
            'numero' => '5',
            'tipo' => 'UMF',
            'municipio_id' => '20',
        ]);

          DB::table('clinica')->insert([
            'numero' => '6',
            'tipo' => 'UMF',
            'municipio_id' => '39',
        ]);

          DB::table('clinica')->insert([
            'numero' => '7',
            'tipo' => 'UMF',
            'municipio_id' => '42',
        ]);

            DB::table('clinica')->insert([
            'numero' => '9',
            'tipo' => 'UMF',
            'municipio_id' => '8',
        ]);

            DB::table('clinica')->insert([
            'numero' => '10',
            'tipo' => 'UMF',
            'municipio_id' => '19',
        ]);

            DB::table('clinica')->insert([
            'numero' => '11',
            'tipo' => 'UMF',
            'municipio_id' => '34',
        ]);

            DB::table('clinica')->insert([
            'numero' => '13',
            'tipo' => 'UMF',
            'municipio_id' => '26',
        ]);

             DB::table('clinica')->insert([
            'numero' => '14',
            'tipo' => 'UMF',
            'municipio_id' => '27',
        ]);

             DB::table('clinica')->insert([
            'numero' => '15',
            'tipo' => 'UMF',
            'municipio_id' => '26',
        ]);
             DB::table('clinica')->insert([
            'numero' => '16',
            'tipo' => 'UMF',
            'municipio_id' => '7',
        ]);
             DB::table('clinica')->insert([
            'numero' => '17',
            'tipo' => 'UMF',
            'municipio_id' => '7',
        ]);
             DB::table('clinica')->insert([
            'numero' => '18',
            'tipo' => 'UMF',
            'municipio_id' => '42',
        ]);
             DB::table('clinica')->insert([
            'numero' => '20',
            'tipo' => 'UMF',
            'municipio_id' => '3',
        ]);
             DB::table('clinica')->insert([
            'numero' => '21',
            'tipo' => 'UMF',
            'municipio_id' => '5',
        ]);
             DB::table('clinica')->insert([
            'numero' => '22',
            'tipo' => 'UMF',
            'municipio_id' => '48',
        ]);
             DB::table('clinica')->insert([
            'numero' => '23',
            'tipo' => 'UMF',
            'municipio_id' => '5',
        ]);

             DB::table('clinica')->insert([
            'numero' => '24',
            'tipo' => 'UMF',
            'municipio_id' => '16',
        ]);

             DB::table('clinica')->insert([
            'numero' => '25',
            'tipo' => 'UMF',
            'municipio_id' => '18',
        ]);

             DB::table('clinica')->insert([
            'numero' => '26',
            'tipo' => 'UMF',
            'municipio_id' => '22',
        ]);

             DB::table('clinica')->insert([
            'numero' => '27',
            'tipo' => 'UMF',
            'municipio_id' => '23',
        ]);
             DB::table('clinica')->insert([
            'numero' => '28',
            'tipo' => 'UMF',
            'municipio_id' => '24',
        ]);
             DB::table('clinica')->insert([
            'numero' => '29',
            'tipo' => 'UMF',
            'municipio_id' => '25',
        ]);

        DB::table('clinica')->insert([
            'numero' => '30',
            'tipo' => 'UMF',
            'municipio_id' => '29',
        ]);

        DB::table('clinica')->insert([
            'numero' => '31',
            'tipo' => 'UMF',
            'municipio_id' => '30',
        ]);

        DB::table('clinica')->insert([
            'numero' => '32',
            'tipo' => 'UMF',
            'municipio_id' => '31',
        ]);

        DB::table('clinica')->insert([
            'numero' => '33',
            'tipo' => 'UMF',
            'municipio_id' => '32',
        ]);

        DB::table('clinica')->insert([
            'numero' => '35',
            'tipo' => 'UMF',
            'municipio_id' => '35',
        ]);

        DB::table('clinica')->insert([
            'numero' => '36',
            'tipo' => 'UMF',
            'municipio_id' => '36',
        ]);

        DB::table('clinica')->insert([
            'numero' => '37',
            'tipo' => 'UMF',
            'municipio_id' => '37',
        ]);

        DB::table('clinica')->insert([
            'numero' => '38',
            'tipo' => 'UMF',
            'municipio_id' => '9',
        ]);

        DB::table('clinica')->insert([
            'numero' => '39',
            'tipo' => 'UMF',
            'municipio_id' => '44',
        ]);
        DB::table('clinica')->insert([
            'numero' => '40',
            'tipo' => 'UMF',
            'municipio_id' => '45',
        ]);

        DB::table('clinica')->insert([
            'numero' => '41',
            'tipo' => 'UMF',
            'municipio_id' => '46',
        ]);

        DB::table('clinica')->insert([
            'numero' => '42',
            'tipo' => 'UMF',
            'municipio_id' => '46',
        ]);

        DB::table('clinica')->insert([
            'numero' => '43',
            'tipo' => 'UMF',
            'municipio_id' => '48',
        ]);

        DB::table('clinica')->insert([
            'numero' => '44',
            'tipo' => 'UMF',
            'municipio_id' => '51',
        ]);

        DB::table('clinica')->insert([
            'numero' => '45',
            'tipo' => 'UMF',
            'municipio_id' => '53',
        ]);

        DB::table('clinica')->insert([
            'numero' => '46',
            'tipo' => 'UMF',
            'municipio_id' => '54',
        ]);

        DB::table('clinica')->insert([
            'numero' => '47',
            'tipo' => 'UMF',
            'municipio_id' => '55',
        ]);

        DB::table('clinica')->insert([
            'numero' => '48',
            'tipo' => 'UMF',
            'municipio_id' => '56',
        ]);

        DB::table('clinica')->insert([
            'numero' => '49',
            'tipo' => 'UMF',
            'municipio_id' => '40',
        ]);

        DB::table('clinica')->insert([
            'numero' => '50',
            'tipo' => 'UAMF',
            'municipio_id' => '52',
        ]);

        DB::table('clinica')->insert([
            'numero' => '52',
            'tipo' => 'UMF',
            'municipio_id' => '6',
        ]);

        DB::table('clinica')->insert([
            'numero' => '55',
            'tipo' => 'UMF',
            'municipio_id' => '12',
        ]);

        DB::table('clinica')->insert([
            'numero' => '8',
            'tipo' => 'HRS',
            'municipio_id' => '38',
        ]);

        DB::table('clinica')->insert([
            'numero' => '12',
            'tipo' => 'HRS',
            'municipio_id' => '8',
        ]);

        DB::table('clinica')->insert([
            'numero' => '51',
            'tipo' => 'HRS',
            'municipio_id' => '57',
        ]);

        DB::table('clinica')->insert([
            'numero' => '53',
            'tipo' => 'HRS',
            'municipio_id' => '39',
        ]);

        DB::table('clinica')->insert([
            'numero' => '54',
            'tipo' => 'HRS',
            'municipio_id' => '48',
        ]);
    }
}
