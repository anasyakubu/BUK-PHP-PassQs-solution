<?php
// 1. Anonymous function with default course
$customFun = function ($name, $department, $course = "ITC3304") {
    echo "$name is in the $department department. His favourite course is $course.";
};
$customFun("Anas", "IT", "");
?>
<br><br>

<?php
// 2. Switch statement to display day name
$dayNumber = 3;
switch ($dayNumber) {
    case 1: echo "Sunday"; break;
    case 2: echo "Monday"; break;
    case 3: echo "Tuesday"; break;
    case 4: echo "Wednesday"; break;
    case 5: echo "Thursday"; break;
    case 6: echo "Friday"; break;
    case 7: echo "Saturday"; break;
    default: echo "Invalid number! Please enter a number between 1 and 7.";
}
?>
<br><br>

<?php
// 3. Convert string to array and print each element
$data = "ABU;BUK;FUT";
$arrayData = explode(";", $data);
foreach ($arrayData as $item) {
    echo $item . "<br>";
}
?>
<br><br>

<?php
// 4. Associative array printing
$arrayData = [
    'name' => 'Anas Yakubu',
    'age' => 30,
    'occupation' => 'Backend Developer'
];
foreach ($arrayData as $key => $value) {
    echo ucfirst($key) . ": $value<br>";
}
?>
<br><br>

<?php
// 5. For loop to print even numbers between 1 and 100
for ($i = 2; $i <= 100; $i += 2) {
    echo $i . "<br>";
}
?>
<br><br>

<?php
// 6. While loop incrementing by 10
$value = 0;
while ($value < 100) {
    echo $value . "<br>";
    $value += 10;
}
?>
<br><br>

<?php
// 7. Database connection check
$conn = mysqli_connect("localhost", "root", "", "school_records");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Database connected successfully";
}
?>


<br><br>

<?php
//8. Compare Three Variables
$a = 10;
$b = 20;
$c = 15;

if ($a >= $b && $a >= $c) {
    echo "Largest: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "Largest: $b";
} else {
    echo "Largest: $c";
}
?>


<br><br>

<?php

//9. BMI Calculator

function calculateBMI($weight, $height) {
    $bmi = $weight / ($height * $height);
    echo "Your BMI is: " . round($bmi, 2);
}

calculateBMI(70, 1.75); // Example usage
?>


<br><br>

<?php
// 10. Book Class
class Book {
    public $title;
    public $author;
    public $yearPublished;
    public $isbn;

    public function __construct($title, $author, $yearPublished, $isbn) {
        $this->title = $title;
        $this->author = $author;
        $this->yearPublished = $yearPublished;
        $this->isbn = $isbn;
    }

    public function getBookInfo() {
        return "Title: {$this->title}, Author: {$this->author}, Year: {$this->yearPublished}, ISBN: {$this->isbn}";
    }
}

class EBook extends Book {
    public $fileSize;

    public function __construct($title, $author, $yearPublished, $isbn, $fileSize) {
        parent::__construct($title, $author, $yearPublished, $isbn);
        $this->fileSize = $fileSize;
    }

    public function getBookInfo() {
        return parent::getBookInfo() . ", File Size: {$this->fileSize}MB";
    }
}

$book = new Book("PHP Basics", "John Doe", 2020, "123-456789");
$ebook = new EBook("Advanced PHP", "Jane Smith", 2022, "987-654321", 5);

echo $book->getBookInfo() . "<br>";
echo $ebook->getBookInfo();
?>