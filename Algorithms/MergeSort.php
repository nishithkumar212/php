<?php
 include('Alutility.php');
 echo " enter the string:";
 $name=Alutility::getString();
 $input=str_split($name);
 //$input = array("c","r","i","c","k","e","t");
 $output = Alutility::mergeSort($input);
 echo "elements are \n";
 for($i=0;$i<sizeof($output);$i++)
{
    echo $output[$i] ." \n";
}
?>