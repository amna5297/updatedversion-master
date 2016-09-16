
<?php

    include("../dbconnect.php");
    include_once("../security/functions.php");

    sec_session_start();




    $fullname=$_POST["fullname"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $nationality=$_POST["nationality"];
    $institute=$_POST["institute"];
    $program=$_POST["program"];
    $address=$_POST["address"];
    $city=$_POST["city"];
    $country=$_POST["country"];
    $munassociation=$_POST["munassociation"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $cnic=$_POST["cnic"];
    $skypeid=$_POST["skypeid"];
    $accommodation=$_POST["accommodation"];
    $visarequirement=$_POST["visarequirement"];

    $diet = $_POST["diet"];
    $allergies = $_POST["allergies"];

    $_SESSION["email"]= $email;

    $dobs = $dob;

    // prepare and bind

    $stmt = $conn->prepare("INSERT INTO CommitteeDirectorate (fullname, dob, gender, nationality, institute, program, address, city, country, munassociation, email, phone, cnic, skypeid, accommodation, visarequirement, diet, allergies) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssssssssss", $fullname, $dobs,  $gender, $nationality,  $institute, $program, $address, $city,
          $country, $munassociation, $email, $phone, $cnic, $skypeid, $accommodation, $visarequirement, $diet, $allergies);

    /*

    $stmt =  "INSERT INTO CommitteeDirectorate (fullname, dob, gender, nationality, institute, program, yearofstudy, address, city, country, munassociation, email, phone, cnic, skypeid, accommodation, visarequirement) VALUES
                  ('$fullname', '1995-01-01',  '$gender', '$nationality',  '$institute', '$program', '$yearofstudy', '$address', '$city',
                        '$country', '$munassociation', '$email', '$phone', '$cnic', '$skypeid', '$accommodation', '$visarequirement');";


    if ($conn->query($stmt)){
         echo "<h2>ADDED!</h2>";
     }
    else{
        echo 'NOT added to db';
    }
*/



    $stmt->execute();
    $stmt->close();
    $conn->close();


?>
