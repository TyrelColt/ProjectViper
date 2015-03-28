<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Viper</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="school-panels.css" type="text/css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body>

<!-- Navigation begins... -->

<nav class="navbar navbar-viper navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><span class="glyphicon glyphicon-apple"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Recent Updates<span class="badge">0</span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><span class="badge">Updated</span>Harvard University</a></li>
                        <li><a href="#"><span class="badge">Removed</span>Alamo Colleges</a></li>
                        <li><a href="#"><span class="badge">Added</span>Oregon State University</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Menu<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-right search-form" role="search">
                <input type="text" class="form-control" placeholder="Search" />
            </form>
        </div>
    </div>
</nav>

<!-- Navigation ends... -->
<?php
    $file  = "mycsv.csv";
    $csv   = file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    //print json_encode($array, JSON_PRETTY_PRINT);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "0: " .$array[1][0] ."<br>";
    echo "1: " .$array[1][1] ."<br>";
    echo "2: " .$array[1][2] ."<br>";
    echo "3: " .$array[1][3] ."<br>";
    echo "4: " .$array[1][4] ."<br>";
    echo "5: " .$array[1][5] ."<br>";
    echo "6: " .$array[1][6] ."<br>";
    echo "7: " .$array[1][7] ."<br>";
    echo "8: " .$array[1][8] ."<br>";
    echo "9: " .$array[1][9] ."<br>";
?>
<!--
<div class="s-container">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <span class="glyphicon glyphicon-plus"></span>
                        &nbsp;&nbsp;Pensacola State University
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table table-condensed" data-toggle="table">
                    <thead>
                    <tr>
                        <th>Package</th>
                        <th>Account Status</th>
                        <th>Implementation Consultant</th>
                        <th>CSM</th>
                        <th>Canvas URL</th>
                    </tr>
                    </thead>
                    <tbody class="searchable">
                    <tr>
                        <td>Premium; Tier 1</td>
                        <td>Account Management</td>
                        <td>Mike Cotterman</td>
                        <td>Barrett Doran</td>
                        <td><a href="https://pensacolastate.instructure.com/accounts/self">pensacolastate.instructure.com</a></td>
                    </tr>
                    </tbody>
                </table>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Role</th>
                            <th>Name</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody class="searchable">
                        <tr>
                            <th>Main LMS Contact</th>
                            <td>Jim Moriarty</td>
                            <td>jim.moriarty@pensacolastate.edu</td>
                        </tr>
                        <tr>
                            <th>LMS Support</th>
                            <td>Molly Hooper</td>
                            <td>molly.hooper@pensacolastate.edu</td>
                        </tr>
                        <tr>
                            <th>Zendesk Admin</th>
                            <td>John Watson</td>
                            <td>john.watson@pensacolastate.edu</td>
                        </tr>
                        <tr>
                            <th>Emergency Contact</th>
                            <td>Sherlock Holmes</td>
                            <td>sherlock.holmes@pensacolastate.edu</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
-->
</body>

<script src="school-panels.js"></script>

</html>                    