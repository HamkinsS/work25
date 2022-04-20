<?php
Class worker
{
	private $name;
	private $age;
	private $salary;
	public function setName($n){
	   $this->name= $n;
    }
public function getName(){
return $this->name;
}
public function setAge($a){
$this->age= $a;
}
public function getAge(){
return $this->age;
}
public function setSalary($s){
$this->salary=$s;
}
public function getSalary(){
return $this->salary;
}	
}
$obj = new worker();
$obj -> setName = "Иван";
$obj -> setAge = 25;
$obj ->	setSalary = 1000;

$obj2 = new worker();
$obj2 -> setName = "Вася";
$obj2 -> setAge = 26;
$obj2 -> setSalary = 1000;

echo "Сумма возрастов",($obj -> setAge + $obj2 -> setAge);

echo "Сумма зарплат",($obj -> setSalary + $obj2->setSalary);
