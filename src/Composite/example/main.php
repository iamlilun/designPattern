<?php
declare(strict_types=1);
/*------------------------------------
 | 公司組織 用戶端程式碼
 |------------------------------------
 |
 |
 |
 */

namespace Src\Composite\example;
use Src\Composite\example\ConcreteCompany;
use Src\Composite\example\HRDepartment;
use Src\Composite\example\FinanceDepartment;

require_once __DIR__ . '/../../../vendor/autoload.php';

//總公司
$root = new ConcreteCompany("北京總公司");
$root->add(new HRDepartment("總公司人加資源部"));
$root->add(new FinanceDepartment("總公司財務部"));

//總公司增加上海分支
$comp = new ConcreteCompany("上海華東分公司");
$comp->add(new HRDepartment("華東分公司人加資源部"));
$comp->add(new FinanceDepartment("華東分公司財務部"));
$root->add($comp);

//上海分公司增加南京辦事處
$comp1 = new ConcreteCompany("南京辦事處");
$comp1->add(new HRDepartment("南京辦事處人加資源部"));
$comp1->add(new FinanceDepartment("南京辦事處財務部"));
$comp->add($comp1);

//上海分公司增加杭州辦事處
$comp2 = new ConcreteCompany("杭州辦事處");
$comp2->add(new HRDepartment("杭州辦事處人加資源部"));
$comp2->add(new FinanceDepartment("杭州辦事處財務部"));
$comp->add($comp2);

echo "\n結構圖：\n";
$root->display(1);

echo "\n職責：\n";
$root->lineOfDuty();