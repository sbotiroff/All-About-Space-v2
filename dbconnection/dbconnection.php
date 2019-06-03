<!--
Sardor Botirov
11/22/2018

-->
<?php
$serverName = 'localhost'; //please type your localhost
$dbName = 'space'; //please type your database
$userName = 'sbotiroff'; //please type your login
$password = 'Ingame1995'; //please type your password!
ini_set('display_errors', 1);
error_reporting(E_ALL);

try {
    //connection part ###########################################################################
    $dbConnection = new PDO("mysql:host=$serverName;dbname=$dbName", $userName, $password); //######
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //#######
    //#################################################################################//########

    //query that creates table for your databse #######################################
    $queryString = "CREATE TABLE IF NOT EXISTS `disscussion` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(30) NOT NULL,
    `lastname` varchar(30) NOT NULL,
    `comment` text NOT NULL,
    PRIMARY KEY (`id`))
    ENGINE=InnoDB DEFAULT CHARSET=latin1;"; //#######################################
    //###################################################################################
    $execSQL = $dbConnection->exec($queryString);
//###################################################################################
    // will help to catch some connection errors ########################################
} catch (PDOException $errors) { //################
    print "Couldn't connect to the database" . $errors->getMessage(); //#################
} //##################################################################################
$okay = false;
//getting some inputs from user ####################################################
$firstname = $lastname = "";
$errfirst = $errlast = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!cleanUpString($_POST["firstname"])) {
        $errfirst = "Please input valid Fisrtname";
    } else { $errfirst = "";
        $firstname = cleanUpString($_POST["firstname"]);
    }
    if (!cleanUpString($_POST["lastname"])) {
        $errlast = "Please input valid lastname";
    } else { $errlast = "";
        $lastname = cleanUpString($_POST["lastname"]);
    }
    $comment = $_POST['comment'];
    if ($firstname != "" && $lastname != "") {
        $sql = "INSERT IGNORE INTO disscussion (firstname, lastname,comment)
      VALUES ('$firstname', '$lastname','$comment')";
        try {

            $dbConnection->exec($sql);
            $okay = true;
            header('Location: ./discussion.php');
            exit;

        } catch (PDOException $errors) {
            print "Couldn't connect to the database" . $errors->getMessage();

        }

    }

}
//##################################################################################

//function for clean up string #####################################################
function cleanUpString($str)
{
    $string = str_replace(' ', '', $str);
    if ($string != "" && $string != null && $string != false && $string != " ") {
        $string = str_replace(' ', '', $str);
        $string = trim($str, " ");
        $string = strip_tags($str);
        $string = ucwords(strtolower($str));

        return $string;
    }
}
//##################################################################################

?>