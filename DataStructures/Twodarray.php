<?php
/**
* Purpose: program to print the primes and prime anagrams in 2_D format.
* @author Nishithkumar
* @version 1.0
* @since 23-01-2019
*
******************************************************************************/  
        include('Dutility.php');
        include('LinkedList.php');
        $obj=new LinkedList;
        $number=1000;
        $array1=Dutility::primes($number);
        /** retrieving the primeanagrams  */
        $string=Dutility::primeanagrams($array1);
        $array2=explode(" ",$string);
        for($i=0;$i<sizeof($array1);$i++)
{
        $obj->add($array1[$i]);
}
        for($i=0;$i<$obj->size;$i++)
        {
                /** searching the element  */
        $bool=$obj->search($array2[$i]); 
        if($bool==true)
        {
                /** deleting the element in linkedlist */
                $obj->delete($array2[$i]); 
        }
}
//$obj->display();
        /** displaying the element of linkedlist and storing in an array */
        $rrr=$obj->linkeddisplay(); 
        print_r($rrr);
        print_r($array2);
        $dimension=array();
        for($i=0;$i<sizeof($rrr);$i++)
{
        /**storing in to the first dimension of an array */
        $dimension[0][$i]=$rrr[$i]; 
}
        for($j=0;$j<sizeof($array2);$j++)
{
        /** storing in to the second dimension of an array */
        $dimension[1][$j]=$array2[$j]; 
}
// for($i=0;$i<2;$i++)
// {
//         for($j=0;$j<sizeof($array2);$j++)
//         {
//                 echo $dimension[$i][$j];
//         }
//         echo "\n";
// }
// print_r($dimension);
for($i=0;$i<2;$i++)
{
        for($j=0;$j<sizeof($dimension[$i]);$j++)
        {
                /**printing  the elements  */
                echo $dimension[$i][$j]." "; 
        }
        echo "\n";
}