<?php 
    $startingDate = $_POST["date"];
    $numberOfDays = $_POST["days"];

    
    //convert string to date
    $date=date_create($startingDate);
    date_add($date,date_interval_create_from_date_string("$numberOfDays weekdays"));
    echo "The date is: " . date_format($date,"Y-m-d");

?>