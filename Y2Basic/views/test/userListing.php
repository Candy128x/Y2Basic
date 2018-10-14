<?php

echo "<table border=1 cellpadding='10'>";
echo "<tr>";
echo "<td>id</td>"."<td>name</td>";
echo "</tr>";

foreach($users as $user)
{
    echo "<tr>";
    echo "<td>" . $user->id . "</td>";
    echo "<td>" . $user->name . "</td>";
    echo "</tr>";
}

echo "</table>";
?>