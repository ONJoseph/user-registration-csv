<?php
if(isset($_POST['btnRegister']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['name'])) $name = trim($_POST['name']); else echo "Name is required!";
    if(isset($_POST['email'])) $email = trim($_POST['email']); else echo "email is required!";
    if(isset($_POST['dob'])) $dob = trim($_POST['dob']); else echo "dob is required!";
    if(isset($_POST['gender'])) $gender = trim($_POST['gender']); else echo "gender is required!";
    if(isset($_POST['country'])) $country = trim($_POST['country']); else echo "country is required!";

    $filename = "./userdata.csv";
    $handle = fopen($filename, 'w');
    $data = array(
        array('Name', 'Email', 'Date of Birth', 'Gender', 'Country'),
        array($name, $email, $dob, $gender, $country)
    );

    foreach ($data as $line){
        if(fputcsv($handle, $line)){
            print_r($line);
        } else echo "Unable to write to file!";
    }
    fclose($handle);
}
