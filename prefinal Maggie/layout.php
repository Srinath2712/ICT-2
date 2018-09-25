<?php
session_start();

include_once('include/config.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dash.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha3a84-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>

    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Maggie Maylin Dashboard</h3>
            </div>

            <ul class="list-unstyled components">
                <p >Hi Maggie</p>
                <li>
                    <a href="home_edit.php">Edit Home</a>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Edit C & H pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="trauma_edit.php">Edit Trauma</a>
                        </li>
                        <li>
                            <a href="anxietystressdepression_edit.php">Edit Anxiety/Stress/Depression</a>
                        </li>
                        <li>
                            <a href="fearsphobiascompulsions_edit.php">Edit Fears/Phobias/Compulsion</a>
                        </li>
                        <li>
                            <a href="smokingalcoholdrugsgambling_edit.php">Edit Smoking/Alcohol/Drugs/Gambling</a>
                        </li>
                        <li>
                            <a href="weightloss_edit.php">Edit Weight Loss</a>
                        </li>
                        <li>
                            <a href="relationships_edit.php">Edit Relationships</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="meditation_edit.php">Edit Meditation</a>
                </li>
                <li>
                    <a href="supervision_edit.php">Edit Supervision</a>
                </li>
                <li>
                    <a href="announcements_edit.php">Edit Announcements</a>
                </li>
                <li>
                    <a href="fees_edit.php">Edit Fees</a>
                </li>
                <li>
                    <a href="contact_edit.php">View Messages from customers</a>
                </li>
            </ul>


        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                          <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link " aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" data-target="submenu" href="#">
                            Counciling & Hypnosis

                          </a>
                          <div class="dropdown-menu" aria-labelledby="submenu">
                            <a href="trauma.php" class="dropdown-item">Trauma</a>
                            <a href="anxietystressdepression.php" class="dropdown-item">Anxiety/Stress/Depression</a>
                            <a href="fearsphobiascompulsions.php" class="dropdown-item">Fears/Phobias/Compulsions</a>
                            <a href="smokingalcoholdrugsgambling.php" class="dropdown-item">Smoking/Alcohol/Drugs/Gambling</a>
                            <a href="weightloss.php" class="dropdown-item">Weight Loss</a>
                            <a href="relationships.php" class="dropdown-item">Relationships</a>
                          </div>
                        </li>
                          <li class="nav-item">
                            <a href="meditation.php" class="nav-link">Meditation</a>
                          </li>
                          <li class="nav-item">
                            <a href="supervision.php" class="nav-link">Supervision</a>
                          </li>
                          <li class="nav-item">
                            <a href="announcements.php" class="nav-link">Announcements</a>
                          </li>
                          <li class="nav-item">
                            <a href="fees.php" class="nav-link">Fees</a>
                          </li>
                          <li class="nav-item">
                            <a href="contact.php" class="nav-link">Contact</a>
                          </li>
                          <li class="nav-item">
                            <a href="logout.php" class="nav-link font-weight-bold">Logout</a>
                          </li>
                      </ul>
                    </div>
                </div>
            </nav>




          </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
