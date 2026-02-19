<?php
// $db = new mysqli('localhost', 'root', '', 'vlp_admission_system')or die ("not connect to database");
// echo "connected to database <br>";
// $sql = "create table admission(
//     id int(255) auto_increment primary key,
//     sname varchar(255) not null,
//     pname varchar(255) not null,
//     email varchar(255) not null,
//     phone varchar(255) not null,
//     course varchar(255) not null,
//     document1 varchar(255) not null,
//     document2 varchar(255) not null,
//     document3 varchar(255) not null,
//     document4 varchar(255) not null,
// )";
// if($db->query($sql)===TRUE){
//     echo "table created successfully";
// }else{
//     echo "error creating table: " . $db->error;
// }
// $db->close();


// $db = new mysqli('localhost', 'root', '', 'vlp_admission_system');
// 
// if ($db->connect_error) {
//     die("Database not connected: " . $db->connect_error);
// }
$a = $_POST['sname'];
$b = $_POST['pname'];
$c = $_POST['email'];
$d = $_POST['phone'];
$e = $_POST['course'];
$f = $_FILES['document1']['name'];
$g = $_FILES['document2']['name'];
$h = $_FILES['document3']['name'];
$i = $_FILES['document4']['name'];

function displayData($a, $b, $c, $d, $e, $f, $g, $h, $i) {
    echo "Student Name: " . htmlspecialchars($a) . "<br>";
    echo "Parent Name: " . htmlspecialchars($b) . "<br>";
    echo "Email: " . htmlspecialchars($c) . "<br>";
    echo "Phone: " . htmlspecialchars($d) . "<br>";
    echo "Course: " . htmlspecialchars($e) . "<br>";
    echo "Document 1: " . htmlspecialchars($f) . "<br>";
    echo "Document 2: " . htmlspecialchars($g) . "<br>";
    echo "Document 3: " . htmlspecialchars($h) . "<br>";
    echo "Document 4: " . htmlspecialchars($i) . "<br>";
}

// 
// if (isset($_POST['submit'])) {
// 
//     $sname = $db->real_escape_string($_POST['sname']);
//     $pname = $db->real_escape_string($_POST['pname']);
//     $email = $db->real_escape_string($_POST['email']);
//     $phone = $db->real_escape_string($_POST['phone']);
//     $course = $db->real_escape_string($_POST['course']);
// 
//     $uploadsDir = "../uploads/";
//     if (!is_dir($uploadsDir)) {
//         mkdir($uploadsDir, 0777, true);
//     }
// 
//     $doc1 = time() . "_" . $_FILES['document1']['name'];
//     $doc2 = time() . "_" . $_FILES['document2']['name'];
//     $doc3 = time() . "_" . $_FILES['document3']['name'];
//     $doc4 = time() . "_" . $_FILES['document4']['name'];
// 
//     move_uploaded_file($_FILES['document1']['tmp_name'], $uploadsDir . $doc1);
//     move_uploaded_file($_FILES['document2']['tmp_name'], $uploadsDir . $doc2);
//     move_uploaded_file($_FILES['document3']['tmp_name'], $uploadsDir . $doc3);
//     move_uploaded_file($_FILES['document4']['tmp_name'], $uploadsDir . $doc4);
//     
// 
//     $sql = "INSERT INTO admission 
//     (sname, pname, email, phone, course, document1, document2, document3, document4, document5)
//     VALUES 
//     ('$sname','$pname','$email','$phone','$course','$document1','$document2','$document3','$document4','')";
// 
//     if ($db->query($sql) === TRUE) {
//         echo "Application submitted successfully!";
//     } else {
//         echo "Error saving: " . $db->error;
//     }
// }

//$db->close();


?>