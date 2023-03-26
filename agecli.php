<?php

$name = $argv[1];
$birthYear = $argv[2];

// Computes the age
$age = date('Y') - $birthYear;

// Already a voter?
if ($age >= 18) {
    echo "You are a voter\n";
}elseif ($age >= 60) {
    echo "You are a senior citizen\n";
// Check if already a senior citizen
}else {
    echo "You cannot vote yet\n";
}
echo "Your name is $name, and your age is $age years old\n";
?>
