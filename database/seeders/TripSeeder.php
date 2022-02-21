<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('trips')->insert([
            //Amman
            [
                'name' => 'Amman House 1',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-01-29 00:00:00',
                'days' => 5,
                'category_id' => 2,
                'price' => 400,
                'max_visitors' => 7,
                'minimum_age' => 18,
                'image' => 'apartment-five.png',
                'guide_id' => 3
            ],

            [
                'name' => 'Amman House 2',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-01-29 00:00:00',
                'days' => 5,
                'category_id' => 2,
                'price' => 200,
                'max_visitors' => 3,
                'minimum_age' => 18,
                'image' => 'apartment-two.png',
                'guide_id' => 3
            ],
            // Zarqa
            [
                'name' => 'Zarqa House 1',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-01-29 00:00:00',
                'days' => 14,
                'category_id' => 6,
                'price' => 1500,
                'max_visitors' => 10,
                'minimum_age' => 18,
                'image' => 'apartment-three.png',
                'guide_id' => 3
            ],
            [
                'name' => 'Zarqa House 2',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2021-12-29 00:00:00',
                'days' => 7,
                'category_id' => 6,
                'price' => 550,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'apartment-six.png',
                'guide_id' => 3
            ],
            // //Irbid
            [
                'name' => 'Irbid House 1',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-01-13 00:00:00',
                'days' => 13,
                'category_id' => 1,
                'price' => 1000,
                'max_visitors' => 14,
                'minimum_age' => 18,
                'image' => 'apartment-four.png',
                'guide_id' => 3
            ],
            [
                'name' => 'Irbid House 2',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-01-13 00:00:00',
                'days' => 3,
                'category_id' => 1,
                'price' => 900,
                'max_visitors' => 12,
                'minimum_age' => 18,
                'image' => 'apartment-one.png',
                'guide_id' => 4
            ],
            // //Jerash
            [
                'name' => 'Jerash House 1',
                'description' => ' Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-02-01 00:00:00',
                'days' => 10,
                'category_id' => 3,
                'price' => 350,
                'max_visitors' => 16,
                'minimum_age' => 18,
                'image' => 'apartment-seven.jpg',
                'guide_id' => 4
            ], [
                'name' => 'Jerash House 2',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-02-10 00:00:00',
                'days' => 5,
                'category_id' => 3,
                'price' => 100,
                'max_visitors' => 9,
                'minimum_age' => 18,
                'image' => 'apartment-eight.jpg',
                'guide_id' => 4
            ],
            // //Ajloun
            [
                'name' => 'Ajloun House 1',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-02-10 00:00:00',
                'days' => 7,
                'category_id' => 4,
                'price' => 70,
                'max_visitors' => 8,
                'minimum_age' => 18,
                'image' => 'apartment-nine.jpg',
                'guide_id' => 4
            ],
            [
                'name' => 'Ajloun House 2',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-02-10 00:00:00',
                'days' => 4,
                'category_id' => 4,
                'price' => 100,
                'max_visitors' => 5,
                'minimum_age' => 18,
                'image' => 'apartment-ten.jpg',
                'guide_id' => 4
            ],
            // //Madaba
            [
                'name' => 'Madaba House 1',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-02-10 00:00:00',
                'days' => 3,
                'category_id' => 5,
                'price' => 150,
                'max_visitors' => 13,
                'minimum_age' => 18,
                'image' => 'apartment-eleven.jpg',
                'guide_id' => 4
            ], [
                'name' => 'Madaba House 2',
                'description' => 'Each unit comes with a sofa, a seating area, a flat-screen TV with cable channels, a well-fitted kitchenette, and a private bathroom with a hairdryer. A microwave, a minibar and stovetop are also provided, as well as a kettle and a coffee machine.
                ',
                'date' => '2022-02-10 00:00:00',
                'days' => 10,
                'category_id' => 5,
                'price' => 200,
                'max_visitors' => 20,
                'minimum_age' => 18,
                'image' => 'apartment-twelve.jpg',
                'guide_id' => 4
            ],
            // //Aqaba
            // [
            //     'name' => 'Mamluk Castle',
            //     'description' => 'Mamluk Castle is in a city of Aqaba in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 14,
            //     'category_id' => 6,
            //     'price' => 250,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Mamluk_Castle.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'The ruins of Ayla',
            //     'description' => 'The ruins of Ayla is in a city of Aqaba in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 10,
            //     'category_id' => 6,
            //     'price' => 500,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'The_ruins_of_Ayla.jpg',
            //     'guide_id' => 4
            // ],
            // //Ma\'an
            // [
            //     'name' => 'Shobak Castle',
            //     'description' => 'Shobak Castle is in a city of Ma\'an in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 3,
            //     'category_id' => 7,
            //     'price' => 100,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Shobak_Castle.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Street of Facades',
            //     'description' => 'Street of Facades is in a city of Ma\'an in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 2,
            //     'category_id' => 7,
            //     'price' => 50,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Street_of_Facades.jpg',
            //     'guide_id' => 4
            // ],
            // //Karak
            // [
            //     'name' => 'The Museum at the Lowest Place on Earth',
            //     'description' => 'The Museum at the Lowest Place on Earth is in a city of Karak in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 10,
            //     'category_id' => 8,
            //     'price' => 150,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'The_Museum_at_the_Lowest_Place_on_Earth.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Wadi Bin Hammad',
            //     'description' => 'Wadi Bin Hammad is in a city of Karak in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 11,
            //     'category_id' => 8,
            //     'price' => 300,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Wadi_Bin_Hammad.jpg',
            //     'guide_id' => 4
            // ],
            // //Al Mafraq
            // [
            //     'name' => 'National Archaeological Museum',
            //     'description' => 'National Archaeological Museum is in a city of Al Mafraq in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 4,
            //     'category_id' => 9,
            //     'price' => 200,
            //     'max_visitors' => 24,
            //     'minimum_age' => 18,
            //     'image' => 'National_Archaeological_Museum.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Abu Darwish Mosque',
            //     'description' => 'Abu Darwish Mosque is in a city of Al Mafraq in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 2,
            //     'category_id' => 9,
            //     'price' => 50,
            //     'max_visitors' => 24,
            //     'minimum_age' => 18,
            //     'image' => 'Abu_Darwish_Mosque.jpg',
            //     'guide_id' => 4
            // ], //Al Salt
            // [
            //     'name' => 'Abu Jaber Museum',
            //     'description' => 'Abu Jaber Museum is in a city of Al Salt in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 3,
            //     'category_id' => 10,
            //     'price' => 50,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Abu_Jaber_Museum.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Prophet Joshua\'s Shrine',
            //     'description' => 'Prophet Joshua\'s Shrine is in a city of Al Salt in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 3,
            //     'category_id' => 10,
            //     'price' => 150,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Prophet_Joshuas_Shrine.jpg',
            //     'guide_id' => 4
            // ],
            // //Balqa`a
            // [
            //     'name' => 'The Harmony Trail',
            //     'description' => 'The Harmony Trail is in a city of Al Balqa`a in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 4,
            //     'category_id' => 11,
            //     'price' => 250,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'The_Harmony_Trail.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Al Salt Archaeological Museum',
            //     'description' => 'Al Salt Archaeological Museum is in a city of Al Balqa`a in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 3,
            //     'category_id' => 11,
            //     'price' => 250,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Al_Salt_Archaeological_Museum.jpg',
            //     'guide_id' => 4
            // ],
            // //Tafila
            // [
            //     'name' => 'Wadi Ghuweir',
            //     'description' => 'Wadi Ghuweir is in a city of Tafila in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 10,
            //     'category_id' => 12,
            //     'price' => 750,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Wadi_Ghuweir.jpg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Dana Cooperative - Hiking and Trails',
            //     'description' => 'Dana Cooperative - Hiking and Trails is in a city of Tafila in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 5,
            //     'category_id' => 12,
            //     'price' => 250,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Dana_Cooperative_Hiking_and_Trails.jpg',
            //     'guide_id' => 4
            // ],
            // //Al Zarqa
            // [
            //     'name' => 'Shaumari Nature Reserve',
            //     'description' => 'Wadi Ghuweir is in a city of Al Zarqa in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 4,
            //     'category_id' => 13,
            //     'price' => 150,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Shaumari_Nature_Reserve.jpeg',
            //     'guide_id' => 4
            // ],
            // [
            //     'name' => 'Quseir Amra',
            //     'description' => 'Quseir Amra is in a city of Al Zarqa in the south of Jordan. The city is the administrative center of the Jerash Governorate, and has a population of 50,745 as of 2015. It is located 48 kilometres (30 mi) north of the capital city Amman.',
            //     'date' => '2022-02-10 00:00:00',
            //     'days' => 3,
            //     'category_id' => 13,
            //     'price' => 50,
            //     'max_visitors' => 20,
            //     'minimum_age' => 18,
            //     'image' => 'Quseir_Amra.jpg',
            //     'guide_id' => 3
            // ],

        ]);
    }
}
