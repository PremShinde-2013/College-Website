<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "college_web";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn)
{
    echo "success";

} else
{
    die("Error" . mysqli_connect_error());
}


?>

<?php

$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    include 'partials/_dbconnect.php';

    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $program = $_POST["program"];
    $branch = $_POST["branch"];
    $sql = "INSERT INTO `inquiry_form` (`name`, `email`, `mobile`, `program`, `branch`, `timestamp`) VALUES ('$name', '$email', '$mobile', '$program', '$branch', current_timestamp() )";


    $result = mysqli_query($conn, $sql);

    if ($result)
    {
        $showAlert = true;
    } else
    {
        $showError = "Something Went wrong";
    }
}

?>