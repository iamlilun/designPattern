<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 試卷父類別 Abstract
 |--------------------------------------
 |
 |
 */


namespace Src\Template\example;


abstract class TestPaper
{
    public function testQuestion1()
    {
        echo " 楊過得到，後來給了郭靖，煉成倚天劍，屠龍刀的玄鐵劍可能是[] a.球磨鑄鐵 b.馬蹄鐵 c.高速合成鋼 d.碳素織維\n";

        echo "答案 {$this->answer1()} \n";
    }

    public function testQuestion2()
    {
        echo " 楊過.程英.陸無雙產除了情花，造成[] a.這種植物不在害人 b.一種珍物滅絕 c.破壞生物圈平衡 d.該地區沙漠化\n";

        echo "答案 {$this->answer2()} \n";
    }

    public function testQuestion3()
    {
        echo " 藍鳳凰致使華山師徒，桃谷六仙嘔吐不止，如果你是大夫，會給他們開什麼藥[] a.阿斯匹林 b.牛黃解毒片 c.氟呱酸 d.大量牛奶\n";

        echo "答案 {$this->answer3()} \n";
    }

    abstract function answer1();
    abstract function answer2();
    abstract function answer3();

}