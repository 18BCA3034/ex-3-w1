<?php 
echo 'Experement 3 (a)<br>';
for($tens=0; $tens<=9; $tens++){
    for($ones=0; $ones<=9; $ones++){
        echo $tens.$ones.',';
    }
    $ones=0;
    echo '<br>';
}