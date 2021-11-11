<?php
class Person
{
    public $name;
    public $surname;
    public $age;

    public function __construct($name, $surname, $age)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->sayFoo();
    }
    public function sayFoo()
    {
        echo "$this->name say \"foo\"" . "<br>";
    }
}

class Teacher extends Person
{
    public function __construct($name, $surname, $age, $subject)
    {
        $this->name = $name;
        $this->subject = $subject;
        $this->calcAge();
    }
    public function calcAge()
    {
        echo "$this->name ведет $this->subject <br>";
    }
}




$personIlya = new Person('Ilya', 'Starikov', 2001);
$personMarina = new Teacher('Marina', 'Starikova', 1980, 'Math');


// class A {
//     public function __construct(){
//         $this->foo();
//     }
//     public function foo() {
//         static $x = 0;
//         echo ++$x;
//     }
// }
// $a1 = new A();//1
// $a2 = new A();//2
// $a1->foo();//3
// $a2->foo();//4
// $a1->foo();//5
// $a2->foo();//6

class A
{
    public function __construct()
    {
        $this->foo();
    }
    public function foo()
    {
        static $x = 0;
        echo ++$x;
    }
}
class B extends A
{
}
$a1 = new A(); //1
$b1 = new B(); //1
$a1->foo(); //2
$b1->foo(); //2
$a1->foo(); //3
$b1->foo();//4

//Динамические методы в PHP «не размножаются». Даже если у нас будет сто объектов этого класса,
// метод будет существовать лишь в одном экземпляре, просто при каждом вызове в него будет пробрасываться разный $this.
// Наследование класса (и метода) приводит к тому, что всё-таки создается новый метод.
// Вывод: динамические методы в PHP существуют в контексте классов, а не объектов.
// И только лишь в рантайме происходит подстановка "$this = текущий_объект".