<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 學生B的考卷 Concrete Class
 |--------------------------------------
 |
 |
 */


namespace Src\Template\example;


class TestPaperB extends TestPaper
{
    function answer1()
    {
        return 'a';
    }

    function answer2()
    {
        return 'b';
    }

    function answer3()
    {
        return 'c';
    }
}