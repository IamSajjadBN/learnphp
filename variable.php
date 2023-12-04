<?php
// این یک کامنت است. کامنت‌ها برای توضیح کد به برنامه‌نویسان استفاده می‌شوند.

// تعریف متغییر از نوع رشته (String)
$first_name = "John";
$last_name = 'Doe';

// تعریف متغییر از نوع عدد صحیح (Integer)
$age = 25;

// تعریف متغییر از نوع عدد اعشاری (Float)
$height = 175.5;

// تعریف متغییر از نوع بولی (Boolean)
$is_student = true;
$is_employed = false;

// تعریف متغییر از نوع آرایه (Array)
$fruits = array("Apple", "Banana", "Orange");

// تعریف متغییر از نوع اشیاء (Object)
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$person1 = new Person("Alice", 30);

// نمایش مقدار متغییرها
echo "نام: " . $first_name . " " . $last_name . "<br>";
echo "سن: " . $age . " سال<br>";
echo "قد: " . $height . " سانتی‌متر<br>";
echo "دانش‌آموز: " . ($is_student ? "بله" : "خیر") . "<br>";
echo "شاغل: " . ($is_employed ? "بله" : "خیر") . "<br>";
echo "میوه‌ها: " . implode(", ", $fruits) . "<br>";
echo "اطلاعات شخص: نام " . $person1->name . "، سن " . $person1->age . " سال<br>";
?>
