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

    <!-- links -->

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Dnyanshree Institute of Engineering & Technology</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
</head>
<!-- data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90" -->

<body>

    <!-- header -->

    <header id="header" class="header header-layout-type-header-2rows">

        <div class=" header-top">

            <div class="container">

                <marquee class="desktop-marquee" width="100%" direction="left" scrollamount="5" height="30px">
                    <p class="text-uppercase" style="font-weight: 600;"><span class="" style="margin-left: 100px;">
                            Admission Open
                            2023-2024 Admission Open 2023-2024 |Admission Open 2023-2024 | Admission Open 2023-2024 |
                            Admission Open
                            2023-2024| Admission Open 2023-2024 </span></p>
                </marquee>
                <div class=" row">
                    <!-- Left -->
                    <div class="col-xl-auto pt-0 header-top-left align-self text-center text-xl-start">
                        <ul class="header-contact-info ">
                            <li class="header-contact-info-phone" style="color: white;">
                                <i class="fa-solid font-icon fa-phone sm-display-block" style="color: #ffffff;">
                                </i>
                                Tel: +91-8600009009
                            </li>
                            <li class="header-contact-info-mail" style="color: white;">
                                <i class="fa fa-envelope font-icon sm-display-block" style="color: #ffffff;"></i>
                                admindiet@dnyanshree.edu.in
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-auto ms-xl-auto header-top-right align-self text-center text-xl-end">

                        <div class="element pt-0 pb-0">

                            <a href="https://www.facebook.com/DNYANSHREE.Institute.OfficalPage/"
                                class="text-white me-4">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/dnyanshree?lang=en" class="text-white me-4">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UCOQ1xPbkPLmf8DQkU1RN3ww" class="text-white me-4">
                                <i class="fa-brands fa-youtube"></i> </a>

                            <a href="https://www.instagram.com/dnyanshree_institute/?hl=en" class="text-white me-4">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/school/dnyanshree-college-of-engineering-and-technology/?originalSubdomain=in"
                                class="text-white me-4">
                                <i class="fab fa-linkedin"></i>
                            </a>

                        </div>
                        <div class="element pt-0 pt-lg-10 pb-10 ">
                            <a type="button" href="form.php" class="btn btn-warning" style="font-weight: 700;">Admission
                                Enquiry</a>

                            <!-- <a type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-bs-whatever="@mdo"
                                style="font-weight: 700;">Admission Enquiry</a> -->



                        </div>
                        <div class="element pt-10 pt-lg-10 pb-10  head-btn">

                            <a type="button" href="https://msbte.org.in/" class="btn btn-warning"
                                style="font-weight: 700;">MSBTE</a>
                        </div>
                        <div class="element pt-10 pt-lg-10 pb-10  head-btn">

                            <a type="button" href="https://dbatu.ac.in/" style="font-weight: 700;"
                                class="btn btn-warning">DBATU</a>
                        </div>
                        <div class="element pt-10 pt-lg-10 pb-10  head-btn">

                            <a type="button" href="https://www.aicte-india.org/" style="font-weight: 700;"
                                class="btn btn-warning">AICTE</a>
                        </div>

                    </div>
                </div>

            </div>

        </div>
        </div>
    </header>



    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg bg-body-tertiary position-sticky header-scrolled  "
        style="top: 0px; background-color: #ffffff;     z-index: 1030; ">
        <div class="container-fluid">
            <a href="" class="main-logo">
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

                    <li class="nav-item dropdown active">
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
                            <li><a class="dropdown-item" href="introduction.html"
                                    style="color: black; font-weight: 500;">RWMCET-introduction</a></li>
                            <hr class="dropdown-divider">
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: black; font-weight: 500;">
                                    Dnyanshree
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="degree.html"
                                            style="color: black; font-weight: 500;">Degree</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="diploma.html"
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
                                    <li><a class="dropdown-item" href="chairperson.html"
                                            style="color: black; font-weight: 500;">From Chairperson's
                                            Desk</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="md.html"
                                            style="color: black; font-weight: 500;">From MD's Desk</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="ceo.html"
                                            style="color: black; font-weight: 500;">From CEO's Desk</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="principal.html"
                                            style="color: black; font-weight: 500;">From Principals's Desk</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="vice-principal.html"
                                            style="color: black; font-weight: 500;">From Vice
                                            Principals's
                                            Desk</a></li>
                                </ul>
                            </li>
                            <hr class="dropdown-divider">
                            <li><a class="dropdown-item" href="governbody.html"
                                    style="color: black; font-weight: 500;">Government Body</a></li>
                            <hr class="dropdown-divider">
                            <li class="nav-item dropend ">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="color: black; font-weight: 500;">
                                    Administration
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Faculty List</a></li>
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
                                            style="color: black; font-weight: 500;">College Development
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Internal Complaints
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
                                            style="color: black; font-weight: 500;">Grievance Redressal
                                            Portal</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Grievance Redressal
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">RTI
                                            Committee</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Student Council</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">Grievance</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#" style="color: black; font-weight: 500;">All
                                            Other Committee</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" href="#"
                                            style="color: black; font-weight: 500;">RTI</a></li>
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
                                    href="program.html">Program</a></li>
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
                                    href="program.html">Intake </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                    href="Eligiblity.html">Eligibility Criteria </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="fee.html">Fee
                                    Structure </a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" style="color: black; font-weight: 500;" href="faq.html">FAQs
                                </a></li>
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
                                            href="#">General Science and
                                            Humanities</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Computer Science And
                                            Engineering</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Electronics and
                                            Tele-communication
                                            Engineering</a></li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Mechanical Engineering</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Electrical Engineering</a>
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
                                            href="#">General Science and
                                            Humanities</a>
                                    </li>
                                    <hr class="dropdown-divider">
                                    <li><a class="dropdown-item" style="color: black; font-weight: 500;"
                                            href="#">Mechanical Engineering</a>
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
                                            href="#">Degree</a></li>
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
                                            href="#">Degree</a></li>
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
                                    href="#">Enterprenuler</a></li>
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
    <!-- Carousal -->

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/banner-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/banner-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/banner-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Section -->

    <section>
        <div class="container pt-5">
            <div class="section-content">
                <div class="row ">
                    <div class="row " style="padding: 15px;">

                        <div class="col-md" style="padding-right: 20px; padding-left: 20px;">

                            <div class="col-12 mb-30 mt-0 card text-center "
                                style="color: rgb(148, 0, 156);  padding: 15px;  box-shadow: rgba(208, 0, 255, 0.1) 0px 2px 5px 0px, rgba(0, 0, 0, 0.06) 0px 2px 5px 0px; border-bottom: solid 5px rgb(134, 0, 140) !important;">
                                <h2 class="" style=" color: rgb(134, 0, 140);  padding: 3px; border-radius: 10px; ">For
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
                                            data-value="900" class="counter value animate-number mt-0 mb-10 appeared"
                                            akhi="900">
                                            0</h2>
                                        <p class="text-dark title mb-20">Trued Engineers</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-6 col-mt-3">
                                    <div class="funfact-item text-center mb-md-60">

                                        <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                            data-value="150" class="counter value animate-number mt-0 mb-10 appeared"
                                            akhi="150">
                                            0</h2>
                                        <p class="text-dark title mb-20">Recruiters</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-6 col-mt-3">
                                    <div class="funfact-item text-center mb-sm-60">

                                        <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                            data-value="600" class="counter value animate-number mt-0 mb-10 appeared"
                                            akhi="600">
                                            0</h2>
                                        <p class="text-dark title mb-20">Placements</p>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 col-6 col-mt-3">
                                    <div class="funfact-item text-center">

                                        <h2 style="  color: rgb(134, 0, 140);" data-animation-duration="2000"
                                            data-value="2800" class="counter value animate-number mt-0 mb-10 appeared"
                                            akhi="2800">
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
                                            <p class="text-gray mb-0">Consistent University toppers since past 5 years.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                        <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 p-10 ">
                            <!-- partials/inquiry.html -->
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
                                                type="text" required="" placeholder="Enter Name" aria-required="true">
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
                                                <select style="border-radius: 5px; " id="person_select" name="program"
                                                    class="form-control" required="" aria-required="true">
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
                                                <select style="border-radius: 5px; " id="person_select" name="branch"
                                                    class="form-control" required="" aria-required="true">
                                                    <option value="">--Choose Subject--</option>
                                                    <option value="Mechanical Engineering">Mechanical Engineering
                                                    </option>
                                                    <option value="Computer Engineering">Computer Engineering</option>
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
                                            style="border-radius: 10px; padding: 15px 80px; ">Submit Request</button>
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


    <!-- section About -->

    <section class=" bg-silver-light bg-no-repeat bg-pos-center-bottom" style="background-color: #f6ecfc;">
        <div class="container">
            <div class="card  section-content" style="border-bottom: solid 5px rgb(134, 0, 140) !important;">
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6 order-1">
                        <div class="box-hover-effect tm-sc-video-popup tm-sc-video-popup-button-over-image"
                            style="margin-top: 60px;">
                            <div class="effect-wrapper" style="border: solid 2px #fff; border-radius: 15px; ">
                                <div class="thumb">
                                    <img class="w-100" src="assets/banner-4.jpg" alt="">
                                    <a class="hover-link" data-lightbox-gallery="youtube-video"
                                        href="https://www.youtube.com/watch?v=5g8YQHdLbsQ" title=""></a>
                                </div>
                                <div class="animated-css-play-button"><span class="play-icon"><i class="fa fa-play">
                                            <a class="hover-link" data-lightbox-gallery="youtube-video"
                                                href="https://www.youtube.com/watch?v=5g8YQHdLbsQ"
                                                title=""></a></i></span></div>


                            </div>
                        </div>
                    </div>
                    <div class=" card1 col-md-12 col-lg-6 col-xl-6 order-2"
                        style="padding-left: 50px; padding-right: 50px;">
                        <h6 class="letter-space-4 text-dark text-uppercase mt-0 mb-0">All About</h6>
                        <h2 class=" text-dark mt-0 line-bottom line-bottom-theme-colored2" style="font-weight: bold; position: relative;
    margin-bottom: 35px;
    padding-bottom: 10px;">
                            Dnyanshree</h2>
                        <p class="text-dark" style="text-align: justify;">Raosaheb Wangde Master Charitable Trust’s
                            “Dnyanshree Institute of Engineering &amp; Technology (DIET)”, Sajjangad Road, Satara, a
                            well-known Engineering Institute, was founded in 2012 by great visionary Hon. Chairman Mr.
                            Dnyaneshwar B. Wangde (Bhai). The Institute is situated at the base of historic fort
                            ‘Sajjangad’
                            and its campus has recognition for its pollution- free ambience. The surrounding natural
                            landscape increases the beauty of the campus.</p>
                        <a href="#" class="btn btn-sm btn-dark mb-md-40"
                            style="background-color: #fFf; color: #000;">Know
                            more</a>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- section courses -->
    <section>
        <div class="container pt-80 pb-10">
            <h2 class="text-titlecase mt-0 line-bottom line-bottom-theme-colored2"
                style="font-weight: bold; color: #000000;">Programs
                Offered</h2>

            <div class="row">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one"
                            aria-selected="true">Degree Courses</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two"
                            type="button" role="tab" aria-controls="pills-two" aria-selected="false">Diploma
                            Courses</button>
                    </li>


                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one" role="tabpanel"
                        aria-labelledby="pills-one-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="images/p1.jpg" class="image-fluid w-100" alt="">
                                    <div class="overlay"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-3">Netflix Clone</h5>
                                <p>Using HTML , CSS , JS</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="images/p2.jpg" class="image-fluid w-100" alt="">
                                    <div class="overlay"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-3">Netflix Clone</h5>
                                <p>Using HTML , CSS , JS</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="images/p3.jpg" class="image-fluid w-100" alt="">
                                    <div class="overlay"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-3">Netflix Clone</h5>
                                <p>Using HTML , CSS , JS</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab"
                        tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="images/p1.jpg" class="image-fluid w-100" alt="">
                                    <div class="overlay"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-3">Netflix Clone</h5>
                                <p>Using HTML , CSS , JS</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="images/p2.jpg" class="image-fluid w-100" alt="">
                                    <div class="overlay"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-3">Netflix Clone</h5>
                                <p>Using HTML , CSS , JS</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="images/p3.jpg" class="image-fluid w-100" alt="">
                                    <div class="overlay"><i class="fa-solid fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-3">Netflix Clone</h5>
                                <p>Using HTML , CSS , JS</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- ?second Courousal -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/banner-1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/banner-2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/banner-3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- testomial -->

    <div class="section" style="margin-top: 80px;">

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000" style=" background-image: linear-gradient(135deg, rgba(134, 0, 140, 50), rgba(0, 0, 118, 1));
            opacity: 1.8;position: relative;  z-index: 0;  height: 500px;">


                    <div class="row d-flex justify-content-center" style="margin-top: 150px;">
                        <div class="col-lg-8">
                            <div class="tm-carousel-item">
                                <div class="tm-testimonial">
                                    <div class="testimonial-inner">
                                        <div class="testimonial-text-holder">
                                            <div class="testimonial-image-holder mb-30">
                                                <div class="author-thumb"> <img width="75" height="75"
                                                        src="assets/vitthal.png" class="img-thumbnail rounded-circle"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="text-white author-text">ग्रामीण भागातील
                                                विध्यार्थ्यांना
                                                उत्तमोत्तम शिक्षण मिळावे या एकाच ध्येयाने आदरणीय भाई
                                                वांगडे
                                                यांच्या नेतृत्वाखाली झटत असलेल्या ज्ञानश्रीच्या सर्व
                                                प्राध्यापक
                                                व कर्मचाऱ्यांचे खूपच कौतुक वाटते. भाईंची माणसं
                                                जोडण्याची आणि
                                                टिकवून ठेवण्याची हातोटी निश्चितच शिकण्यासारखी आहे.
                                                एवढ्या
                                                चांगल्या वास्तूला भेट दिल्याचे समाधान कायम मनात
                                                राहील. खूप खूप
                                                शुभेच्छा.</div>
                                            <div class="star-rating">
                                                <span data-tm-width="100%" style="width: 100%;"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-author-details">
                                            <div class="testimonial-author-info-holder">
                                                <h5 class="text-white name">DIPAK VITTHAL BHATUSE
                                                </h5>
                                                <span class="text-white job-position">Sr. Journalist
                                                    Zee 24
                                                    Tass</span> <a class="company-url" href="#"></a>
                                                <ul
                                                    class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="far fa-star fa-sm"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000" style=" background-image: linear-gradient(135deg, rgba(134, 0, 140, 50), rgba(0, 0, 118, 1));
            opacity: 1.8;position: relative;  z-index: 0;  height: 500px;">
                    <div class="row d-flex justify-content-center" style="margin-top: 150px;">
                        <div class="col-lg-8">
                            <div class="tm-carousel-item">
                                <div class="tm-testimonial">
                                    <div class="testimonial-inner">
                                        <div class="testimonial-text-holder">
                                            <div class="testimonial-image-holder mb-30">
                                                <div class="author-thumb"> <img width="75" height="75"
                                                        src="assets/songore.png" class="img-thumbnail rounded-circle"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="text-white author-text"> To, Respected Bhai
                                                &amp; Team,
                                                Inspired by such a wonderful college of Engineering
                                                for these
                                                all poor &amp; village students. Excellent work done
                                                by you.
                                                Would love to help poor and needy students as
                                                required.</div>

                                        </div>
                                        <div class="testimonial-author-details">
                                            <div class="testimonial-author-info-holder">
                                                <h5 class="text-white name">DR.SAURABH
                                                    SANGORE,(MD,DGO)</h5>
                                                <span class="text-white job-position">Chairman and
                                                    Managing
                                                    Director, Phonenix Hosptial Pvt. Ltd.</span> <a class="company-url"
                                                    href="#"></a>
                                                <ul
                                                    class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="far fa-star fa-sm"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="2000" style=" background-image: linear-gradient(135deg, rgba(134, 0, 140, 50), rgba(0, 0, 118, 1));
                            opacity: 1.8;position: relative;  z-index: 0;  height: 500px;">
                    <div class="row d-flex justify-content-center" style="margin-top: 150px;">
                        <div class="col-lg-8">
                            <div class="tm-carousel-item">
                                <div class="tm-testimonial">
                                    <div class="testimonial-inner">
                                        <div class="testimonial-text-holder">
                                            <div class="testimonial-image-holder mb-30">
                                                <div class="author-thumb"> <img width="75" height="75"
                                                        src="assets/vinit.jpg" class="img-thumbnail rounded-circle"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="text-white author-text">ग्रामीण भागातील
                                                विध्यार्थ्यांना
                                                उत्तमोत्तम शिक्षण मिळावे या एकाच ध्येयाने आदरणीय भाई
                                                वांगडे
                                                यांच्या नेतृत्वाखाली झटत असलेल्या ज्ञानश्रीच्या सर्व
                                                प्राध्यापक
                                                व कर्मचाऱ्यांचे खूपच कौतुक वाटते. भाईंची माणसं
                                                जोडण्याची आणि
                                                टिकवून ठेवण्याची हातोटी निश्चितच शिकण्यासारखी आहे.
                                                एवढ्या
                                                चांगल्या वास्तूला भेट दिल्याचे समाधान कायम मनात
                                                राहील. खूप खूप
                                                शुभेच्छा.</div>
                                            <div class="star-rating">
                                                <span data-tm-width="100%" style="width: 100%;"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-author-details">
                                            <div class="testimonial-author-info-holder">
                                                <h5 class="text-white name">Vinit Jawale</h5>
                                                <span class="text-white job-position">Sr. Journalist
                                                    Zee 24
                                                    Tass</span> <a class="company-url" href="#"></a>
                                                <ul
                                                    class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="far fa-star fa-sm"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="carousel-item" data-bs-interval="2000" style=" background-image: linear-gradient(135deg, rgba(134, 0, 140, 50), rgba(0, 0, 118, 1));
                            opacity: 1.8;position: relative;  z-index: 0;  height: 500px;">
                    <div class="row d-flex justify-content-center" style="margin-top: 150px;">
                        <div class="col-lg-8">
                            <div class="tm-carousel-item">
                                <div class="tm-testimonial">
                                    <div class="testimonial-inner">
                                        <div class="testimonial-text-holder">
                                            <div class="testimonial-image-holder mb-30">
                                                <div class="author-thumb"> <img width="75" height="75"
                                                        src="assets/cooper.png" class="img-thumbnail rounded-circle"
                                                        alt="">
                                                </div>
                                            </div>
                                            <div class="text-white author-text">One of its kind in
                                                the world.
                                                Very lovely and great. Wish you every success.</div>
                                            <div class="star-rating">
                                                <span data-tm-width="100%" style="width: 100%;"></span>
                                            </div>
                                        </div>
                                        <div class="testimonial-author-details">
                                            <div class="testimonial-author-info-holder">
                                                <h5 class="text-white name">FARROKH N. COOPER</h5>
                                                <span class="text-white job-position">Chairman &amp;
                                                    Managing
                                                    Director, Cooper Corp. Satara</span> <a class="company-url"
                                                    href="#"></a>
                                                <ul
                                                    class="list-unstyled d-flex justify-content-center text-warning mb-0">
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="fas fa-star fa-sm"></i></li>
                                                    <li><i class="far fa-star fa-sm"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

    </div>
    </div>


    <!-- Gallary -->

    <div class="section" style="margin-top: 200px;">
        <div class="container">
            <div class="section-title">
                <div class="row">
                    <div class="col-md-8">
                        <div class="mb-60">
                            <div class="tm-sc tm-sc-section-title section-title">
                                <div class="title-wrapper">
                                    <h2 class="text-uppercase line-bottom line-bottom-theme-colored1"><span
                                            class="text-theme-colored1" style="color: black ; ">Gallery</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="assets/1.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="assets/2.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape" />
                    </div>
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="assets/7.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        <img src="assets/8.jpeg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Wintry Mountain Landscape" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="assets/3.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Mountains in the Clouds" />

                        <img src="assets/4.jpeg" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />
                    </div>

                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="assets/5.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="assets/6.jpeg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park" />
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="assets/9.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="assets/10.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park" />
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <img src="assets/11.jpg" class="w-100 shadow-1-strong rounded mb-4" alt="Waves at Sea" />

                        <img src="assets/12.jpg" class="w-100 shadow-1-strong rounded mb-4"
                            alt="Yosemite National Park" />
                    </div>
                </div>

            </div>
        </div>

        <!-- Company Slider -->


        <section class="bg-theme-colored">
            <div class="container pt-15 mb-10">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-titlecase line-bottom line-bottom-theme-colored2"
                                style="font-weight: bold; color: black;">Top
                                Recruiters in Industry</h2>



                            <marquee class="desktop-marquee" width="100%" direction="left" scrollamount="12"
                                height="auto">

                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/acme.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/advik.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/amura.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/bajaj.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/coditas.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/cognizant.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/dhoot.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/dxc.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/eleation.png"
                                        alt="Image"> </a>

                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/gurdian.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/gurdian.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/hp.png"
                                        alt="Image">
                                </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/hudl.png"
                                        alt="Image"> </a>

                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/iasys.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/infosys.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/jhon deere.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/justpay.png"
                                        alt="Image"> </a>


                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/lti.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/minicooper.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/mutha.png"
                                        alt="Image"> </a>

                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/nissan.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/quality.png"
                                        alt="Image"> </a>


                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/sq.png"
                                        alt="Image"> </a>


                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/tata.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/techno.png"
                                        alt="Image"> </a>

                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/topgear.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/vanderlande.png"
                                        alt="Image"> </a>
                                <a style="padding: 10px;" target="_blank" href="#"> <img src="assets/wipro.png"
                                        alt="Image"> </a>


                            </marquee>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- About Section -->



        <section class="bg-white">
            <div class="container pt-25">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/a-1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/a-2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/a-3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/a-5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>



                    </div>


                    <div class="col-md">

                        <div class="col-12 mb-20 mt-0 text-left">
                            <h1 class="" style=" color: #9700a7;  padding: 3px; border-radius: 10px; font-size: 72; ">
                                <strong style="color: #9700a7;">Impeccable Placements </strong>
                            </h1>
                        </div>
                        <div class="row">
                            <div class=" card3 col-xs-12 col-md-12 order-1 "
                                style=" padding: 30px; border-bottom: #9700a7 solid 5px;">
                                <div class=" bg-white p-0">
                                    <a style="border-radius: 8px;" class="icon  icon-dark float-start mb-0 me-20 mt-10"
                                        href="#">
                                        <img src="https://img.icons8.com/pastel-glyph/64/000000/student-male--v2.png">
                                    </a>
                                    <div class="icon-box-details overflow-hidden" style="border-radius: 8px;">
                                        <h3 class="icon-box-title font-weight-700 m-0 mb-0">600+ Placements in 150+
                                            Companies
                                        </h3>
                                        <p>Top Placement record in core companies with highest packages in the district.
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <div class="card3 col-xs-12 col-md-12 order-2 pt-30 "
                                style="padding: 30px ;  border-bottom: #9700a7  solid 5px ; ">
                                <div class="bg-white p-0 ">
                                    <a style="border-radius: 8px;" class="icon icon-dark float-start mb-0 mr-20 mt-10"
                                        href="#">
                                        <img src="https://img.icons8.com/dotty/80/000000/stocks-growth.png">
                                    </a>
                                    <div class="icon-box-details overflow-hidden">
                                        <h3 class="icon-box-title font-weight-700 m-0 mb-0">7.5+ LPA Highest Packages
                                        </h3>
                                        <p>Our students annually avail the most lucrative jobs which offer lucrative
                                            packages in
                                            the most distinguished industries.</p>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row " style="padding-top: 20px;">
                            <div class="col-md-3 col-sm-3 col-6 col-mt-3 card4 "
                                style="border-right: #9700a7 solid 2px;">
                                <div class="funfact-item text-center mb-md-60">
                                    <!-- <i class="funfact-icon pe-7s-smile text-theme-colored1"></i> -->
                                    <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                        data-value="900" class="counter animate-number mt-0 mb-10 appeared">900</h2>
                                    <p class="text-dark title mb-20">True Engineers</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6 col-mt-3 card4"
                                style="border-right: #9700a7 solid 2px;">
                                <div class="funfact-item text-center mb-md-60">
                                    <!-- <i class="funfact-icon pe-7s-note2 text-theme-colored1"></i> -->
                                    <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                        data-value="150" class="counter animate-number mt-0 mb-10 appeared">150</h2>
                                    <p class="text-dark title mb-20">Recruiters</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6 col-mt-3 card4"
                                style="border-right: #9700a7 solid 2px;">
                                <div class="funfact-item text-center mb-sm-60">
                                    <!-- <i class="funfact-icon pe-7s-users text-theme-colored1"></i> -->
                                    <h2 style=" color: rgb(134, 0, 140);" data-animation-duration="2000"
                                        data-value="600" class="counter animate-number mt-0 mb-10 appeared">600</h2>
                                    <p class="text-dark title mb-20">Placements</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3 col-6 col-mt-3 " style="border-right: #9700a7 solid 2px;">
                                <div class="funfact-item text-center">
                                    <!-- <i class="funfact-icon pe-7s-cup text-theme-colored1"></i> -->
                                    <h2 style="  color: rgb(134, 0, 140);" data-animation-duration="2000"
                                        data-value="2800" class="counter animate-number mt-0 mb-10 appeared">2,800</h2>
                                    <p class="text-dark title mb-20">Scholarships Awarded</p>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
        </section>

        <!-- Rankers section -->

        <!-- <section class="bg-theme-colored">
            <div class="container pt-15 mb-10">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 class="text-titlecase line-bottom line-bottom-theme-colored2"
                                style="font-weight: bold; color: #000;">
                                University Rankers</h2>



                        </div>

                        <div class="col-md-12 col-lg-12">
                             <div class="tm-owl-carousel-4col mb-60 owl-carousel owl-theme owl-loaded owl-drag"
                                data-dots="true">










                                <div class="owl-stage-outer owl-height" style="height: 313.438px;">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-3701px, 0px, 0px); transition: all 0.3s ease 0s; width: 6730px;">
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 8.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 9.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 10.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 11.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 12.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 3.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 4.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 5.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 6.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 7.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 8.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item active" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 9.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item active" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 10.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item active" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 11.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item active" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 12.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 3.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 4.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 5.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 6.png" alt="images"></div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 306.5px; margin-right: 30px;">
                                            <div class="item"><img src="/Rankers/Asset 7.png" alt="images"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav disabled"><button class="owl-prev"><i
                                            class="fa fa-chevron-left"></i></button><button class="owl-next"><i
                                            class="fa fa-chevron-right"></i></button></div>
                                <div class="owl-dots"><button class="owl-dot"><span></span></button><button
                                        class="owl-dot active"><span></span></button><button
                                        class="owl-dot"><span></span></button></div>
                                <div class="owl-thumbs"></div>
                            </div> 


                            <div class="multi-carousel" id="carousel">
                                <div class="multi-carousel-inner">
                                    <div class="multi-carousel-item" style="width: 33.3333%;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/1.webp"
                                            alt="Table Full of Spices" class="w-100">
                                    </div>
                                    <div class="multi-carousel-item" style="width: 33.3333%;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/2.webp"
                                            alt="Winter Landscape" class="w-100">
                                    </div>
                                    <div class="multi-carousel-item" style="width: 33.3333%;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/3.webp"
                                            alt="View of the City in the Mountains" class="w-100">
                                    </div>
                                    <div class="multi-carousel-item" style="width: 33.3333%;">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/Thumbnails/Slides/4.webp"
                                            alt="Place Royale Bruxelles" class="w-100">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" tabindex="0" data-mdb-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </button>
                                <button class="carousel-control-next" type="button" tabindex="0" data-mdb-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>  -->


        <!-- footer  -->

        <footer id="footer" class="footer layer-overlay overlay-dark-9" data-tm-bg-img="assets/footer.jpeg"
            style="background-image: url(assets/footer.jpeg); margin-top: 50px;">
            <div class="footer-widget-area">
                <div class="container pt-90 pb-60" style="padding: 50px;">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                                <div class="thumb" style="margin-top: 80px;">
                                    <img alt="Logo" src="assets/logo-2.png" style="height: 40px;">
                                </div>
                                <div class="description" style="color: white; margin-top: 10px;"> A/P- Sonwadi-Gajawadi,
                                    Sajjangad Road,
                                    Satara-415013</div>
                            </div>
                            <ul class="styled-icons icon-dark icon-theme-colored1 icon-rounded clearfix">
                                <li><a class="social-link"
                                        href="https://www.facebook.com/DNYANSHREE.Institute.OfficalPage/"><i
                                            class="fab fa-facebook"></i></a></li>
                                <li><a class="social-link" href="https://twitter.com/dnyanshree?lang=en"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a class="social-link"
                                        href="https://www.youtube.com/channel/UCOQ1xPbkPLmf8DQkU1RN3ww"><i
                                            class="fab fa-youtube"></i></a></li>
                                <li><a class="social-link"
                                        href="https://www.instagram.com/dnyanshree_institute/?hl=en"><i
                                            class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3" style="margin-top: 80px;">
                            <div class="widget widget_nav_menu">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Quick Links
                                </h4>
                                <ul>
                                    <li><a href="#" style="text-decoration: none; color: white;">About Us</a></li>
                                    <li><a href="#" style="text-decoration: none; color: white;">Programmes</a></li>
                                    <li><a href="#" style="text-decoration: none; color: white;">Admissions</a></li>
                                    <li><a href="#" style="text-decoration: none; color: white;">Placements</a></li>
                                    <li><a href="#" style="text-decoration: none; color: white;">Blog</a></li>
                                    <li><a href="#" style="text-decoration: none; color: white;">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3">
                            <div class="widget">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1"
                                    style="margin-top: 80px;">National
                                    Day
                                    Celebration</h4>
                                <div class="opening-hours border-dark">
                                    <img src="assets/national day.jpg" class="img-responsive" style="height: 150px;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-3" style="margin-bottom: 30px; margin-top: 80px;">
                            <div class="widget">
                                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Har Ghar
                                    Tiranga
                                </h4>
                                <div class="opening-hours border-dark" style="height: auto; max-width: 100%;">
                                    <img src="assets/tiranga.jpg" class="img-responsive" style="height: 300px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom" data-tm-bg-color="#2A2A2A"
                    style="background-color: rgb(42, 42, 42) !important; padding: 30px;">
                    <div class="container">
                        <div class="row pt-20 pb-20">
                            <div class="col-sm-6">
                                <div class="footer-paragraph">
                                    © 2021 Dnyanshree Institute of Engineering &amp; Technology. All Rights Reserved.
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                      <div class="footer-paragraph text-right">
                        Site Template
                      </div>
                    </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="/script.js"></script>
        <!-- Optional JavaScript; choose one of the two! -->

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