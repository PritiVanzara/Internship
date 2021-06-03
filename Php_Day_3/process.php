<?php

$a = $_POST['txt1'];
$b = $_POST['txt2'];
$c = $_POST['txt3'];

echo "<table border=1>";
echo "<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    </tr>
    <tr>
        <td>$a</td>
        <td>$b</td>
        <td>$c</td>
    </tr>";