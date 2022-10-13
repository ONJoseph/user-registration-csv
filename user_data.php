<?php
print_r($_POST);
$name = $_POST['name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$country = $_POST['country'];

echo "NAME: " . $name . "<br>";
echo "EMAIL: " . $email . "<br>";
echo "DOB: " . $DOB . "<br>";
echo "gender: " . $gender . "<br>";
echo "country: " . $country . "<br>";

$csv = 
array($_POST['name'],$_POST['email'],$_POST['DOB'],$_POST['country']);

$file = fopen('form.csv', 'a');

foreach ($csv as $line) 
{
  fputcsv($file,explode(',',$line));
}

fclose($file); 
?>
