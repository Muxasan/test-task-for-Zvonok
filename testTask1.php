<?php
$data = "Андрей 9
Василий 11
Роман 7
Андрей 2
Роман 1
Андрей 6
Иванов Иван 3
Иван 5
Роман 11
Василий 6";

$rows = explode("\n", $data);
$userList = [];

foreach($rows as $row) {
	list($name, $value) = explode(" ", $row);
	$result[$name][] = (int) $value;
}

foreach ($userList as $name => $numbers) {
	$output = implode(', ', $numbers);
	echo "$name: $output; " . array_sum($numbers) . "\n";
}