<?php
//$_GET $_POST $_REQUEST // CAPITAL
//['controlname']

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];
$d = $_POST['txt4'];
$e = $_POST['txt5'];
$f = $_POST['txt6'];
$g = $_POST['txt7'];
$h = $_POST['txt8'];
$i = $_POST['txt9'];
$j = $_POST['txt10'];

echo "<table border=1>";
echo "<tr>
    <th>Full Name</th>
    <th>Your State</th>
    <th>Your City</th>
    <th>Age</th>
    <th>Qualifications</th>
    <th>Current Profession</th>
    <th>Calling Number</th>
    <th>WhatsApp Number</th>
    <th>Email Address</th>
    <th>Which time is comfortable to talk on call?</th>
    </tr>";
echo "<tr>
        <td>$a</td>
        <td>$b</td>
        <td>$c</td>
        <td>$d</td>
        <td>$e</td>
        <td>$f</td>
        <td>$g</td>
        <td>$h</td>
        <td>$i</td>
        <td>$j</td>
    </tr>";