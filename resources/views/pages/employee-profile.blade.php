<h1>Employee Profile</h1>


<?php
echo '<pre>';
var_dump($employee);
echo '</pre>';
echo '<pre>';
    echo "Employee ID: ".$employee->employee_id."\n";
    echo "Name: ".$employee->first_name." ".$employee->last_name."\n";
    echo "Email: ".$employee->first_name." ".$employee->last_name."\n";
    echo "Phone Number: ".$employee->phone_number."\n";
echo '</pre>';
