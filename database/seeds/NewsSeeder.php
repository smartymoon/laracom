<?php

use Illuminate\Database\Seeder;
use App\Model\NewsCat;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cates  = [
             '公司新闻','行业新闻','精彩专题'
        ];
        foreach($cates as $cate){
            $newCate = new NewsCat();
            $res = $newCate->create(['name'=>$cate]);
            $res->news()->saveMany(factory('App\Model\News',4)->make());
        }
    }
}
