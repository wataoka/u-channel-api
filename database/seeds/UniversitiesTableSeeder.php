<?php

use Illuminate\Database\Seeder;

class UniversitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('universities')->truncate();
        DB::table('universities')->insert([
            ['logical_name' => 'tokyo-university', 
             'physical_name' => '東京大学',
             'logical_region' => 'kanto',
             'physical_region' => '関東',
             'logical_prefecture' => 'tokyo',
             'physical_prefecture' => '東京',
            ],
            ['logical_name' => 'keio-university', 
             'physical_name' => '慶應義塾大学',
             'logical_region' => 'kanto',
             'physical_region' => '関東',
             'logical_prefecture' => 'tokyo',
             'physical_prefecture' => '東京',
            ],
            ['logical_name' => 'waseda-university', 
             'physical_name' => '早稲田大学',
             'logical_region' => 'kanto',
             'physical_region' => '関東',
             'logical_prefecture' => 'tokyo',
             'physical_prefecture' => '東京',
            ],
            ['logical_name' => 'kobe-university', 
             'physical_name' => '神戸大学',
             'logical_region' => 'kinki',
             'physical_region' => '近畿',
             'logical_prefecture' => 'hyogo',
             'physical_prefecture' => '兵庫',
            ],
            ['logical_name' => 'osaka-university', 
             'physical_name' => '大阪大学',
             'logical_region' => 'kinki',
             'physical_region' => '近畿',
             'logical_prefecture' => 'osaka',
             'physical_prefecture' => '大阪',
            ],
            ['logical_name' => 'osaka-city-university', 
             'physical_name' => '大阪市立大学',
             'logical_region' => 'kinki',
             'physical_region' => '近畿',
             'logical_prefecture' => 'osaka',
             'physical_prefecture' => '大阪',
            ],
        ]);
    }
}
