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


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary position-sticky header-scrolled  "
        style="top: 0px; background-color: #ffffff;     z-index: 1030; ">
        <div class="container-fluid">
            <a href="index.php" class="main-logo">
                <img src="assets/dnyanshreelogo.png" class="logo" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="fa-solid fa-bars" style="color: #000000;"></i>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">

                    <li class="nav-item dropdown">
                        <a class="nav-link " href="index.php" role="button" aria-expanded="false"
                            style="color: black; font-weight: 500;">
                            Home
                        </a>

                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black; font-weight: 500;">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about/introduction.php"
                                    style="color: black; font-weight: 500;">RWMCET-introduction</a></li>
                            <hr class="dropdown-divider">
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: black; font-weight: 500;">
                                    Dnyanshree
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about/degree.php"
                                            style="color: black; font-weight: 500;">Degree</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="about/diploma.php"
                                            style="color: black; font-weight: 500;">Diploma</a></li>
                                </ul>
                            </li>
                            <hr class="dropdown-divider">
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: black; font-weight: 500;">
                                    Management
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="about/chairperson.php"
                                            style="color: black; font-weight: 500;">From Chairperson's
                                            Desk</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="about/md.php"
                                            style="color: black; font-weight: 500;">From MD's Desk</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="about/ceo.php"
                                            style="color: black; font-weight: 500;">From CEO's Desk</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="about/principal.php"
                                            style="color: black; font-weight: 500;">From Principals's Desk</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="about/vice-principal.php"
                                            style="color: black; font-weight: 500;">From Vice
                                            Principals's
                                            Desk</a></li>
                                </ul>
                            </li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="about/governbody.php"
                                    style="color: black; font-weight: 500;">Government Body</a></li>
                            <hr class="dropdown-divider">
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: black; font-weight: 500;">
                                    Administration
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Faculty
                                            List</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">Staff
                                            List</a></li>
                                </ul>
                            </li>

                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">IQAC </a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;"> Institute
                                    Policy</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;"> Best
                                    Practices</a></li>

                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: black; font-weight: 500;">
                                    Committiees
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">College
                                            Development
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Internal
                                            Complaints
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">SC/ST
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">Anti
                                            Ragging Squad</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Anti-Ragging and Student
                                            Discipline
                                            Committie</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Grievance
                                            Redressal
                                            Portal</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Grievance
                                            Redressal
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">RTI
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Student
                                            Council</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Grievance</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">All
                                            Other Committee</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">RTI</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black; font-weight: 500;">
                            Academics
                        </a>
                        <ul class="dropdown-menu">
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="/Academics/program.php">Program</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Institute
                                    Calender </a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#"> Academic
                                    Ruler and Regulation</a>
                            </li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Feedback of
                                    stakeholder </a></li>
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    AICTE
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">LOA &
                                            EOA</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Fees
                                            2023-24</a></li>
                                    <hr class="dropdown-divider">
                                    <li class="nav-item dropend ">
                                        <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;"
                                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Grievance
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                                    href="#">Student And
                                                    Faculty
                                                    Feedback</a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black; font-weight: 500;">
                            NAAC
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Institutional
                                    information for
                                    Quality
                                    Assessment(IIQA)</a></li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#"> NAAC SSR</a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Admission
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="#">Collage_brochure</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="/Academics/program.php">Intake </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="/Admission/Eligiblity.php">Eligibility Criteria </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="/Admission/fee.php">Fee Structure </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="/Admission/faq.php">FAQs </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Programs
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Degree Programme
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">General
                                            Science and
                                            Humanities</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Computer
                                            Science And
                                            Engineering</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Electronics and
                                            Tele-communication
                                            Engineering</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Mechanical
                                            Engineering</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Electrical
                                            Engineering</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#">Civil Engineering</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Diploma Programme
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">General
                                            Science and
                                            Humanities</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Mechanical
                                            Engineering</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Electronics and
                                            Tele-communication
                                            Engineering</a></li>
                                </ul>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Departmental
                                    News </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Student
                                    Section </a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" style="color: black; font-weight: 500;">
                            Placements
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">TPO's
                                    Message</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Top
                                    Recruiters</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Placement
                                    Activities</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Placement
                                    Results </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Placement
                                    News</a></li>
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Placement Records
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Degree</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Diploma</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Annual Report
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Degree</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Diploma</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Alumni
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">About
                                    Alumni</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Alumni Vision
                                </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="#">Enterprenuler</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Alumni
                                    Association</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Alumni
                                    meets</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Alumni
                                    Contribution</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" style="color: black; font-weight: 500;" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Others
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Library</a>
                            </li>
                    </li>

                    <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#"> Gallery</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Contact</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="#">Login</a></li>

                </ul>
                </li>

                </ul>

            </div>
        </div>
    </nav>



    <?php

    if ($showAlert)
    {

        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Congratulations</strong> Your Request is Submitted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    if ($showError)
    {

        echo ' <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong>   ' . $showError . '   You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }

    ?>

    <div class="container">

        <section>
            <div class="container pt-5">
                <div class="section-content">
                    <div class="row ">
                        <div class="row " style="padding: 15px;">

                            <div class="col-md" style="padding-right: 20px; padding-left: 20px;">

                                <div class="col-12 mb-30 mt-0 card text-center "
                                    style="color: rgb(148, 0, 156);  padding: 15px;  box-shadow: rgba(208, 0, 255, 0.1) 0px 2px 5px 0px, rgba(0, 0, 0, 0.06) 0px 2px 5px 0px; border-bottom: solid 5px rgb(134, 0, 140) !important;">
                                    <h2 class="" style=" color: rgb(134, 0, 140);  padding: 3px; border-radius: 10px; ">
                                        For
                                        the
                                        <strong
                                            style=" color: rgb(134, 0, 140);  padding: 3px; border-radius: 10px; ">Leaders
                                            of tommorow</strong>
                                    </h2>
                                </div>

                                <div class="row " style="padding: 15px;">
                                    <div class="col-md-3 col-sm-3 col-6 col-mt-5">
                                        <div class="funfact-item text-center mb-md-60">

                                            <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                                data-value="900"
                                                class="counter value animate-number mt-0 mb-10 appeared" akhi="900">
                                                0</h2>
                                            <p class="text-dark title mb-20">Trued Engineers</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-6 col-mt-3">
                                        <div class="funfact-item text-center mb-md-60">

                                            <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                                data-value="150"
                                                class="counter value animate-number mt-0 mb-10 appeared" akhi="150">
                                                0</h2>
                                            <p class="text-dark title mb-20">Recruiters</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-6 col-mt-3">
                                        <div class="funfact-item text-center mb-sm-60">

                                            <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                                data-value="600"
                                                class="counter value animate-number mt-0 mb-10 appeared" akhi="600">
                                                0</h2>
                                            <p class="text-dark title mb-20">Placements</p>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-6 col-mt-3">
                                        <div class="funfact-item text-center">

                                            <h2 style="  color: rgb(134, 0, 140);" data-animation-duration="2000"
                                                data-value="2800"
                                                class="counter value animate-number mt-0 mb-10 appeared" akhi="2800">
                                                0
                                            </h2>
                                            <p class="text-dark title mb-20">Scholarships Awarded</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class=" col-xs-6 col-md-6 order-1 ">
                                        <div class="icon-box iconbox-theme-colored2 bg-white p-15 mb-30 border-1px"
                                            style=" box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; border-top: solid 5px rgb(134, 0, 140) !important; border-radius: 15px; padding: 15px; margin-bottom: 30px;">
                                            <a style="border-radius: 8px; margin-right: 20px; "
                                                class="icon  icon-dark   float-start mb-0 mr-20 mt-10" href="#">
                                                <i class="fas fa-university"></i>
                                            </a>
                                            <div class="icon-box-details overflow-hidden" style="border-radius: 8px;">
                                                <h5 class="icon-box-title font-weight-600 m-0 mb-0 "
                                                    style="color: black; margin-left: 20px; ">
                                                    World Class Campus</h5>
                                                <p class="text-gray mb-0">Campus equipped with all modern era education
                                                    machinery.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6 order-2 ">
                                        <div class="icon-box iconbox-theme-colored2 bg-white p-15 mb-30 border-1px"
                                            style="box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; border-top: solid 5px #ffc200 !important;  border-radius: 15px; padding: 15px; margin-bottom: 30px; ">
                                            <a style="border-radius: 8px; margin-right: 20px; "
                                                class="icon icon-dark border-left-theme-colored1-3px float-start mb-0 mr-20 mt-10"
                                                href="#">
                                                <i class="fas fa-user-graduate"></i>
                                            </a>
                                            <div class="icon-box-details overflow-hidden">
                                                <h5 class="icon-box-title font-weight-600 m-0 mb-0"
                                                    style="color: black; margin-left: 20px; ">
                                                    #1 Placements in Satara
                                                </h5>
                                                <p class="text-gray mb-0">Top Placement record in core companies with
                                                    highest
                                                    packages in the district.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6 order-4 ">
                                        <div class="icon-box iconbox-theme-colored2 bg-white p-15 mb-30 border-1px"
                                            style=" box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; border-top: solid 5px #ffc200 !important;   border-radius: 15px; padding: 15px; margin-bottom: 30px;">
                                            <a style="border-radius: 8px;  margin-right: 20px; "
                                                class="icon icon-dark border-left-theme-colored1-3px float-start mb-0 mr-20 mt-10"
                                                href="#">
                                                <i class="fas fa-tv"></i>
                                            </a>
                                            <div class="icon-box-details overflow-hidden">
                                                <h5 class="icon-box-title font-weight-600 m-0 mb-0"
                                                    style="color: black; margin-left: 20px; ">Digitally Equipped
                                                    Learning
                                                </h5>
                                                <p class="text-gray mb-0">Digital infrastructure with all necessary
                                                    equipments
                                                    for online learning.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-6 order-3 ">
                                        <div class="icon-box iconbox-theme-colored2 bg-white p-15 mb-30 border-1px"
                                            style=" box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px; border-top: solid 5px rgb(134, 0, 140) !important;   border-radius: 15px; padding: 15px; margin-bottom: 30px;">
                                            <a style="border-radius: 8px;  margin-right: 20px; "
                                                class="icon icon-dark border-left-theme-colored1-3px float-start mb-0 mr-20 mt-10"
                                                href="#">
                                                <i class="fas fa-user-edit"></i>
                                            </a>
                                            <div class="icon-box-details overflow-hidden">
                                                <h5 class="icon-box-title font-weight-600 m-0 mb-0"
                                                    style="color: black; margin-left: 20px; ">100+ Academic Excellence
                                                </h5>
                                                <p class="text-gray mb-0">Consistent University toppers since past 5
                                                    years.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 p-10 ">

                                <!-- Contact Form -->
                                <form action="index.php" class="booking-form form-home bg-theme-colored1 " method="POST"
                                    novalidate="novalidate" style="border-radius: 15px;   background: linear-gradient(125deg, #9700a7, #020079); padding: 30px;
 ">
                                    <h3 class="text-white mt-0 " style="margin-bottom: 20px;">Enquire for <span
                                            class="text-theme-colored2"><strong
                                                style="    color: #f8ba09">Admission</strong></span></h3>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb-2 mb-10" style="margin-bottom: 10px;">
                                                <input style="border-radius: 5px;" name="name" class="form-control"
                                                    type="text" required="" placeholder="Enter Name"
                                                    aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-2 mb-10" style="margin-bottom: 10px;">
                                                <input style="border-radius: 5px;" name="email"
                                                    class="form-control required email" type="email"
                                                    placeholder="Enter Email" aria-required="true">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb-2 mb-10" style="margin-bottom: 10px;">
                                                <input style="border-radius: 5px;" name="mobile"
                                                    class="form-control required" type="text" placeholder="Enter Phone"
                                                    aria-required="true">
                                            </div>
                                        </div>


                                        <div class="col-sm-12">
                                            <div class="mb-2 mb-10" style="margin-bottom: 10px;">
                                                <div class="styled-select">
                                                    <select style="border-radius: 5px; " id="person_select"
                                                        name="program" class="form-control" required=""
                                                        aria-required="true">
                                                        <option value=""> --Choose Program-- </option>
                                                        <option value="Degree">Degree</option>
                                                        <option value="Diploma">Diploma</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb-2 " style="margin-bottom: 12px;">
                                                <div class="styled-select">
                                                    <select style="border-radius: 5px; " id="person_select"
                                                        name="branch" class="form-control" required=""
                                                        aria-required="true">
                                                        <option value="">--Choose Subject--</option>
                                                        <option value="Mechanical Engineering">Mechanical Engineering
                                                        </option>
                                                        <option value="Computer Engineering">Computer Engineering
                                                        </option>
                                                        <option value="Electrical Engineering">Electrical Engineering
                                                        </option>
                                                        <option value="Civil Engineering">Civil Engineering</option>
                                                        <option value="E&TC Engineering">E&TC Engineering</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- <div class="mb-1 mb-10">
                      <textarea style="border-radius: 5px;" name="form_message" class="form-control required" placeholder="Enter Message" rows="3" aria-required="true"></textarea>
                    </div> -->
                                        <div class="mb-2 mb-0 mt-20"
                                            style="margin-top: 20px; margin-bottom: 0; margin-bottom: 2;">
                                            <input
                                                style="border-radius: 5px; margin-bottom: 0; margin-bottom: 2px; margin-top: 20px; "
                                                name="form_botcheck" class="form-control" type="hidden" value="">
                                            <button type="submit" name="submit"
                                                class="btn btn-theme-colored2 align-self-center text-dark btn-warning text-center btn-block"
                                                style="border-radius: 10px; padding: 15px 80px; ">Submit
                                                Request</button>
                                        </div>


                                        <!-- Appointment Form Validation-->
                                        <script type="text/javascript">
                                        //   $("#home_appointment_form").validate({
                                        //     submitHandler: function(form) {
                                        //       var form_btn = $(form).find('button[type="submit"]');
                                        //       var form_result_div = '#form-result';
                                        //       $(form_result_div).remove();
                                        //       form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                        //       var form_btn_old_msg = form_btn.html();
                                        //       form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                        //       $(form).ajaxSubmit({
                                        //         dataType:  'json',
                                        //         success: function(data) {
                                        //           if( data.status == 'true' ) {
                                        //             $(form).find('.form-control').val('');
                                        //           }
                                        //           form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        //           $(form_result_div).html(data.message).fadeIn('slow');
                                        //           setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                        //         }
                                        //       });
                                        //     }
                                        //   });
                                        </script>
                                        <!-- Appointment Form Ends -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <script src="/script.js"></script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>