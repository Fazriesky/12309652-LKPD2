<?php
for ($x = 0; $x < 2 * (4 + 1); $x++) {
    if ($x % 5 == 4) {
        echo "<br>";
    } else {
        echo str_repeat("*", 8) . "<br>";
    }
}
?>