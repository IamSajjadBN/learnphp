<div dir="rtl">

# آموزش OOP در PHP

## مقدمه
برنامه‌نویسی شی‌گرا یک رویکرد برنامه‌نویسی است که بر اساس ایده اشیاء و روابط بین آن‌ها می‌باشد. در PHP، شی‌گرایی امکانات بسیاری را برای سازماندهی کد، افزایش قابلیت تجدیدپذیری و توسعه‌پذیری ارائه می‌دهد.

## کلاس‌ها و اشیاء
یک کلاس به عنوان یک الگوی ساختاری برای اشیاء در نظر گرفته می‌شود. اشیاء نمونه‌های از یک کلاس هستند.


</div>

```php
class Person {
    // ویژگی‌ها (متغیرها)
    public $name;
    public $age;

    // متد‌ها (توابع)
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function greet() {
        return "سلام، من $this->name هستم و $this->age سال دارم.";
    }
}

// ایجاد یک شیء از کلاس Person
$person1 = new Person("آرمان", 25);

// فراخوانی یک متد از شیء
echo $person1->greet();
```

<div dir="rtl">

## وراثت
یک کلاس می‌تواند از یک یا چند کلاس دیگر به عنوان پدر (والد) وارث شود.

</div>

```php
class Student extends Person {
    public $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function study() {
        return "$this->name در حال مطالعه است.";
    }
}

// ایجاد یک شیء از کلاس Student
$student1 = new Student("سارا", 20, "S123");

// فراخوانی متد‌های کلاس و کلاس پدر
echo $student1->greet();
echo $student1->study();

```

<div dir="rtl">

## انکپسولیشن
انکاپسولیشن به مفهوم مخفی‌سازی جزئیات داخلی یک کلاس اشاره دارد. متغیرها و متدهای خصوصی و عمومی در اینجا نقش دارند.
</div>

```php
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        $this->balance += $amount;
    }

    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return $amount;
        } else {
            return "موجودی کافی نیست.";
        }
    }

    public function getBalance() {
        return $this->balance;
    }
}

// نمونه استفاده
$account = new BankAccount();
$account->deposit(1000);
echo $account->getBalance(); // 1000
echo $account->withdraw(500); // 500
echo $account->getBalance(); // 500

```

<div dir="rtl">

## پلی‌مورفیسم
پلی‌مورفیسم به امکان یکسانی نام متد در کلاس‌های مختلف با پیاده‌سازی‌های متفاوت اشاره دارد.
</div>

```php
interface Shape {
    public function calculateArea();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// نمونه استفاده
$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo $circle->calculateArea(); // 78.5
echo $rectangle->calculateArea(); // 24


```