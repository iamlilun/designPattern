<?php
declare(strict_types=1);
/*------------------------------------
 | 演奏內容 Context
 |------------------------------------
 |
 |
 |
 */

namespace Src\Interpreter\example;


class PlayContext
{
    /** @var string: 演奏文字 */
    private $text;

    /**
     * @return string
     */
    public function getPlayText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setPlayText(string $text): void
    {
        $this->text = $text;
    }
}