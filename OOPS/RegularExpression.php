<?php
/**
 * Purpose: Read in the following message: Hello <<name>>, We have your full name as <<full name>> in our system. your contact number is 91-xxxxxxxxxx. Please,let us know in case of any clarification Thank you BridgeLabz 01/01/2016.
 * @author Nishithkumar
 * @version 1.0
 * @since 30-01-2019
 *
 ******************************************************************************/

include 'Outility.php';
/**
 * taking the given message in a string type
 */
$string = "Hello <<name>>, We have your full name as <<full name>> in our system.
your contact number is 91-xxxxxxxxxx. Please,let us know in case of any clarification Thank you BridgeLabz xx/xx/xxxx.
";

/**
 * developing the regular expression to match the string content
 */
$arrayone = array("/<{2}\w+>{2}/ ", "/<{2}\w+\s\w+>{2}/ ", "/\d{2}\-x{10}+/ ", "/x*\/x*\/x*/ ");

/**
 * asking the user to enter the name:
 */
echo " enter your name:";
$name = Outility::getString();
echo " enter your full name:";
$fullname = Outility::getString();
echo "enter your mobile number:";

/**
 * validating the user has given a minimum of 10 digit number
 */
while (strlen($mobileno = Outility::getInt()) < 10) {
    echo "invalid input" . "\n";
    echo "enter mobileno";
    $mobileno = Outility::getInt();
}
/**
 * using the inbuilt data
 */
$Date = date("d/m/y");
/**
 * using the function to match specific content  name in the string
 */
$string = preg_replace($arrayone[0], $name, $string);
/**
 * using the function to match specific content fullname in the string 
 */
$string = preg_replace($arrayone[1], $fullname, $string);
/**
 * using the function to match specific content mobileno in the string 
 */
$string = preg_replace($arrayone[2], $mobileno, $string);
/**
 * using the function to match specific content mobileno in the string 
 */
$string = preg_replace($arrayone[3], $Date, $string);
echo $string;
