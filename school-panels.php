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

<nav class="navbar navbar-main navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"><span class="glyphicon glyphicon-apple"></span></a>
        </div>
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
</nav>

<!-- Navigation ends... -->

<?php
    $file   = "cheat-sheet.csv";
    $csv    = file_get_contents($file);
    $array  = array_map("str_getcsv", explode("\n", $csv));
    // Replace spaces in school name with underscore
    $replace = array( "$", "#", ",", "(", ")", ".", "&", "/", "\\");
    $school = $array[1][0];
    $school_format = str_replace(" ", "_", $array[1][0]);
    $school_format = str_replace($replace, "", $school_format);

    //Opening div stuff -- (once)
echo "<div class=\"s-container\">";
    echo "<div class=\"panel-group\" id=\"accordion\">";
        echo "<div class=\"panel panel-default\">";
            echo "<div class=\"panel-heading\">";
                echo "<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse_" .$school_format ."\" " .">";
                        echo "<span class=\"glyphicon glyphicon-plus\"></span>";
                        echo "&nbsp;&nbsp;" .$array[1][0];
                echo "</a>";
            echo "</div>";
            echo "<div id=\"collapse_" .$school_format ."\" " ."class=\"panel-collapse collapse\">";
                echo "<div class=\"panel-body\">";
                    echo "<table class=\"table table-condensed\" data-toggle=\"table\">";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th scope=\"col\">Package</th>";
                            echo "<th scope=\"col\">Account Status</th>";
                            echo "<th scope=\"col\">Implementation Consultant</th>";
                            echo "<th scope=\"col\">CSM</th>";
                            echo "<th scope=\"col\">Canvas URL</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        echo "<tr>";
                            echo "<td>" .$array[1][1] ."</td>";
                            echo "<td>" .$array[1][2] ."</td>";
                            echo "<td>" .$array[1][3] ."</td>";
                            echo "<td>" .$array[1][4] ."</td>";
                            echo "<td> <a href=\"https://" .$array[1][9] ."/accounts/self\">" .$array[1][9] ."</a>" ."</td>";
                        echo "</tr>";
                        echo "</tbody>";
                    echo "</table>";
                    echo "<table class=\"table table-hover\">";
                        echo "<thead>";
                        echo "<tr>";
                            echo "<th scope=\"col\">Role</th>";
                            echo "<th scope=\"col\">Name</th>";
                            echo "<th scope=\"col\">Email</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";


    //For loop
    for ($i=1; $i<count($array);$i++) {
        //Check if school is different
        if ($array[$i][0] != $school) {
            // Replace spaces in school name with underscore
            $replace = array( "$", "#", ",", "(", ")", ".", "&", "/", "\\");
            $school = $array[$i][0];
            $school_format = str_replace(" ", "_", $array[$i][0]);
            $school_format = str_replace($replace, "", $school_format);
            //Ending div stuff
                        echo "</tbody>";
                                echo "</table>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
            //Opening div stuff
            echo "<div class=\"s-container\">";
                echo "<div class=\"panel-group\" id=\"accordion\">";
                    echo "<div class=\"panel panel-default\">";
                        echo "<div class=\"panel-heading\">";
                            echo "<a class=\"accordion-toggle\" data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapse_" .$school_format ."\" " .">";
                                    echo "<span class=\"glyphicon glyphicon-plus\"></span>";
                                    echo "&nbsp;&nbsp;" .$array[$i][0];
                            echo "</a>";
                        echo "</div>";
                        echo "<div id=\"collapse_" .$school_format ."\" " ."class=\"panel-collapse collapse\">";
                            echo "<div class=\"panel-body\">";
                                echo "<table class=\"table table-condensed\" data-toggle=\"table\">";
                                    echo "<thead>";
                                    echo "<tr>";
                                        echo "<th scope=\"col\">Package</th>";
                                        echo "<th scope=\"col\">Account Status</th>";
                                        echo "<th scope=\"col\">Implementation Consultant</th>";
                                        echo "<th scope=\"col\">CSM</th>";
                                        echo "<th scope=\"col\">Canvas URL</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                    echo "<tr>";
                                        echo "<td>" .$array[$i][1] ."</td>";
                                        echo "<td>" .$array[$i][2] ."</td>";
                                        echo "<td>" .$array[$i][3] ."</td>";
                                        echo "<td>" .$array[$i][4] ."</td>";
                                        echo "<td> <a href=\"https://" .$array[$i][9] ."/accounts/self\">" .$array[$i][9] ."</a>" ."</td>";
                                    echo "</tr>";
                                echo "</tbody>";
                            echo "</table>";
                            echo "<table class=\"table table-hover\">";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th scope=\"col\">Role</th>";
                                        echo "<th scope=\"col\">Name</th>";
                                        echo "<th scope=\"col\">Email</th>";
                                    echo "</tr>";
                                echo "</thead>";
                            echo "<tbody>";
        }
        //Table rows
        echo "<tr>";
            echo "<th scope=\"row\" id=\"role\">" .$array[$i][8] ."</th>";
            echo "<td>" .$array[$i][5] ." " .$array[$i][6] ."</td>";
            echo "<td>" .$array[$i][7] ."</td>";
        echo "</tr>";
    }

    //Ending div stuff
                                    echo "</tbody>";
                                echo "</table>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
?>

</body>

<script src="school-panels.js"></script>

</html>
