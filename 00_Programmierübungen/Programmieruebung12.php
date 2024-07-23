<?php

// You will be provided with 3 arrays: $hrSalaries, $salesSalaries, $itSalaries

$hrSalaries = ['Alice' => 5000, 'Bob' => 4800, 'Charlie' => 5500];
$salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
$itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];


// Write your code here


// Consolidate Departmental Records:

$companySalaries = array_merge($hrSalaries, $salesSalaries, $itSalaries);


//Identify the Minimum Salary: 

$lowestSalaries = [];
$minSalary = min($companySalaries);

foreach ($companySalaries as $name => $salary) {
    if ($salary === $minSalary) {
        $lowestSalaries[$name] = $salary;
    }
}

//var_dump($lowestSalaries);
