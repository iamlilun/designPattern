<?php
declare(strict_types=1);
/*
 |--------------------------------------
 | 學生A的考卷 Concrete Class
 |--------------------------------------
 |
 |
 */


namespace Src\Template\example;


class TestPaperA extends TestPaper
{
    function answer1()
    {
        return 'b';
    }

    function answer2()
    {
        return 'b';
    }

    function answer3()
    {
        return 'b';
    }
}