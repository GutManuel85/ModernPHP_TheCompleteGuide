<?php

// You will be provided with 3 arrays: $hrSalaries, $salesSalaries, $itSalaries

$hrSalaries = ['Alice' => 5000, 'Bob' => 6000, 'Charlie' => 5500];
$salesSalaries = ['David' => 6200, 'Elena' => 4800, 'Fiona' => 5300];
$itSalaries = ['Fiona' => 5300, 'George' => 5600, 'Hannah' => 5900, 'Ivan' => 6400];


// Write your code here

//Calculate Departmental Expenditures:

$totalHrSalary = array_sum($hrSalaries);
$totalSalesSalary = array_sum($salesSalaries);
$totalItSalary = array_sum($itSalaries);

$totals = ['HR' => $totalHrSalary, 'Sales' => $totalSalesSalary, 'IT' => $totalItSalary];


//Determine the Highest Expenditure:
$maxDept = '';
$maxAmount = 0;

foreach($totals as $departure => $amount){
    if($amount >= $maxAmount){
        $maxDept = $departure;
        $maxAmount = $amount;
    }
}

echo $maxDept;
