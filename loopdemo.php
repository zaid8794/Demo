<?php
echo "<table border='1'>";
for ($i = 1; $i <= 100; $i++) {
    echo "<tr>";
    if ($i % 2 == 0) {
        echo "<td bgcolor='red'>$i</td>";
    } else {
        echo "<td bgcolor='yellow'>$i</td>";
    }
    echo "</tr>";
}
echo "</table>";
