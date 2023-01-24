<h1><?="This is home page"?></h1>
<h2><?="All Employees"?></h2>
<?php
foreach($data as $val){
    echo '<pre>';
    echo "Employee ID: ".$val->employee_id."\n";
    echo "Name: ".$val->first_name." ".$val->last_name."\n";
    echo "Email: ".$val->first_name." ".$val->last_name."\n";
    echo "Phone Number: ".$val->phone_number."\n";
    echo '</pre>';
}
