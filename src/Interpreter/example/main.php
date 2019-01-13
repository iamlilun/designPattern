<?php
declare(strict_types=1);
/*------------------------------------
 | 音樂解釋器 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */
use Src\Interpreter\example\PlayContext;
use Src\Interpreter\example\Note;
use Src\Interpreter\example\Scale;

require_once __DIR__ . '/../../../vendor/autoload.php';

$context = new PlayContext();

echo "上海灘:\n";

$context->setPlayText("O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 G 0.5 A 0.5 O 3 C 1 O 2 A 0.5 G 1 C 0.5 E 0.5 D 3 ");
echo $context->getPlayText();
$expression = null;

try{
    while (strlen($context->getPlayText()) > 0){
        $str = substr($context->getPlayText(), 0, 1);

        switch ($str){
            case "O":
                $expression = new Scale();
                break;
            case "C":
            case "D":
            case "E":
            case "F":
            case "G":
            case "A":
            case "B":
            case "P":
                $expression = new Note();
                break;
        }
        $expression->interpret($context);
    }
} catch (\Exception $e) {
    echo $e->getMessage();
}