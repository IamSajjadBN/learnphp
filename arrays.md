<div dir="rtl">

# آموزش آرایه‌ها در PHP

آرایه‌ها یکی از قابلیت‌های قدرتمند PHP هستند که به شما امکان می‌دهند گروهی از مقادیر را در یک متغیر ذخیره کنید. در اینجا با نحوه تعریف، دسترسی به اعضا، و عملیات متداول با آرایه‌ها در PHP آشنا خواهید شد.

## تعریف آرایه

آرایه در PHP می‌تواند شامل مقادیر مختلفی باشد. برای تعریف یک آرایه از تابع `array()` استفاده می‌شود.

<div dir="ltr">

```php
<?php
// تعریف یک آرایه
$cars = array("ب‌ام‌و", "تویوتا", "هوندا", "مرسدس");

// یا با استفاده از نوع دیگری از تعریف آرایه
$fruits = ["سیب", "موز", "پرتقال"];
?>
```

</div>

## دسترسی به اعضا
شما می‌توانید به اعضای آرایه با استفاده از ایندکس آنها دسترسی پیدا کنید. ایندکس‌ها در PHP از ۰ شروع می‌شوند.

<div dir="ltr">

```php
<?php
// دسترسی به اعضا با استفاده از ایندکس
echo $cars[0]; // خروجی: ب‌ام‌و
echo $fruits[2]; // خروجی: پرتقال
?>

```

</div>

## افزودن و حذف اعضا
برای افزودن یک عنصر جدید به آرایه، از دستور [] یا تابع array_push() استفاده می‌شود.

<div dir="ltr">

```php
<?php
// افزودن عنصر جدید
$cars[] = "آئودی";
array_push($fruits, "انگور");

// حذف عنصر با استفاده از unset()
unset($cars[1]);

?>

```

</div>

## حلقه‌ها بر روی آرایه‌ها
استفاده از حلقه‌ها (مانند حلقه foreach) برای پیمایش آرایه‌ها بسیار رایج است.

<div dir="ltr">

```php
<?php
// حلقه foreach بر روی آرایه
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>

```

</div>

## توابع مرتبط با آرایه‌ها
در PHP تعدادی تابع مفید برای کار با آرایه‌ها وجود دارد، از جمله count()، array_merge() و array_reverse().

<div dir="ltr">

```php
<?php
// تعداد اعضا در آرایه
$count = count($fruits);
echo "تعداد میوه‌ها: " . $count;

// ادغام دو آرایه
$moreFruits = ["مانگو", "آناناس"];
$combinedArray = array_merge($fruits, $moreFruits);

// برعکس کردن آرایه
$reversedArray = array_reverse($combinedArray);
?>

```

</div>


</div>