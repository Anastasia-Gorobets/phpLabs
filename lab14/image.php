<?php
//Include the code
require_once 'phplot-6.2.0/phplot-6.2.0/phplot.php';
//Define the object
$plot = new PHPlot(800,800,'res.png');
$plot->SetIsInline(True);
//Define some data
$example_data=[];
for($i=0;$i<=35;$i++){
    $example_data[]=[$i,mt_rand(5,50)];
}
$plot->SetDataColors('green');
$plot->SetDataValues($example_data);
//Turn off X axis ticks and labels because they get in the way:
$plot->SetXTickLabelPos('none');
$plot->SetXTickPos('none');
$plot->SetTitle("Plot example");
$plot->SetXTitle('X Data');
$plot->SetYTitle('Y Data');
$plot->DrawGraph();