<?php



$servername = "localhost";
$username = "codtopia";
$password = "Halothane6426";
$dbname = "codtopia";

//create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}

echo '<link rel="stylesheet" href="Edit.CSS" media="screen">';
$query = "SELECT * FROM loadout";
$result= mysqli_query($conn, $query);


if(isset($_POST['edit_select']))
{
    $Class_Name = $_POST['Class_Name'];
    $Class_Description = $_POST['Class_Description'];
    $Gun = $_POST['Gun'];
    $Optic = $_POST['Optic'];
    $Laser = $_POST['Laser'];
    $Muzzle = $_POST['Muzzle'];
    $Underbarrel = $_POST['Underbarrel'];
    $Ammunition = $_POST['Ammunition'];
    $Rear_Grip = $_POST['Rear_Grip'];
    $Tactical = $_POST['Tactical'];
    $Lethal = $_POST['Lethal'];
    $Field_Upgrade = $_POST['Field_Upgrade'];
    $Perk_Num1 = $_POST['Perk_Num1'];
    $Perk_Num2 = $_POST['Perk_Num2'];
    $Perk_Num3 = $_POST['Perk_Num3'];                                                   

    $query = "UPDATE LOADOUT SET LOAD_NAME = '$Class_Name', CLASS_DESCRIPTION = '$Class_Description', GUN_NAME = '$Gun', ATM1_NAME = '$Optic', ATM2_NAME = '$Laser', ATM3_NAME = '$Muzzle', ATM4_NAME = '$Underbarrel', ATM5_NAME = '$Ammunition', ATM6_NAME = '$Rear_Grip', EQ1_NAME = '$Tactical', EQ2_NAME = '$Lethal', FU_NAME = '$Field_Upgrade', PERK1_NAME = '$Perk_Num1', PERK2_NAME = '$Perk_Num2', PERK3_NAME = '$Perk_Num3'  WHERE LOAD_NAME = '$Class_Name'";
    $query_run = mysqli_query($conn, $query);

    echo'<div class = "TheDiv">';
    echo'<a class="Bigbutton" href="Display-Page.php">Successful Edit!</a>';
    echo'</div>';

    


}