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

if(isset($_POST['save_select']))
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

    $query = "INSERT INTO LOADOUT (LOAD_NAME, CLASS_DESCRIPTION, GUN_NAME, ATM1_NAME, ATM2_NAME, ATM3_NAME, ATM4_NAME, ATM5_NAME, ATM6_NAME, EQ1_NAME, EQ2_NAME, FU_NAME, PERK1_NAME, PERK2_NAME, PERK3_NAME) VALUES ('$Class_Name', '$Class_Description', '$Gun', '$Optic', '$Laser', '$Muzzle', '$Underbarrel', '$Ammunition', '$Rear_Grip', '$Tactical', '$Lethal', '$Field_Upgrade', '$Perk_Num1', '$Perk_Num2', '$Perk_Num3')";

    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['satus'] = "Inserted Succesfully";
        header("Location: Create-a-Favorite.php");
    }
    else
    {
        $_SESSION['status'] = "Not Inserted";
        header("LocationL Create-a-Favorite.php");
    }
}