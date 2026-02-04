<?php
echo "<h2>PHP Datatypes</h2>";

// String
$name = "Sneha";
echo "String: $name <br>";

// Integer
$age = 21;
echo "Integer: $age <br>";

// Float
$percentage = 95.5;
echo "Float: $percentage <br>";

// Boolean
$isStudent = true;
echo "Boolean: ";
echo $isStudent ? "True" : "False";
echo "<br>";

// Array
$subjects = array("PHP", "DBMS", "CN");
echo "Array: ";
print_r($subjects);
echo "<br><br>";

/* ---------- Variable Scope ---------- */

echo "<h2>Variable Scope</h2>";

// Global Scope
$college = "ABC College";

function globalScopeExample() {
    global $college;
    echo "Global Scope Variable: $college <br>";
}
globalScopeExample();

// Local Scope
function localScopeExample() {
    $course = "B.Tech";
    echo "Local Scope Variable: $course <br>";
}
localScopeExample();

// Static Scope
function staticScopeExample() {
    static $count = 0;
    $count++;
    echo "Static Variable Count: $count <br>";
}

echo "<h3>Static Scope Test</h3>";
staticScopeExample();
staticScopeExample();
staticScopeExample();
?>