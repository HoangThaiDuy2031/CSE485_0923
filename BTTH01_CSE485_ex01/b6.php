<?php
$keys = array(
    "field1" => "first",
    "field2" => "second",
    "field3" => "third"
);

$values = array(
    "field1value" => "dinosaur",
    "field2value" => "pig",
    "field3value" => "platypus"
);

$keysAndValues = array();

foreach ($keys as $field => $key) {
    $valueKey = $field . "value";
    if (array_key_exists($valueKey, $values)) {
        $keysAndValues[$key] = $values[$valueKey];
    }
}

print_r($keysAndValues);
?>
