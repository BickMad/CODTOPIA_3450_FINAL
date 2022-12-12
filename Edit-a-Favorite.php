<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Create a Favorite</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Create-a-Favorite.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.20.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "CODTOPIA"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Create a Favorite">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>   
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
?>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-black u-border-2 u-border-palette-3-base u-clearfix u-header u-header" id="sec-a6b9"><div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-merriweather u-text u-text-default u-text-1">CODT<span class="u-text-custom-color-2"></span>OPIA
        </h1>
        <nav class="u-align-right u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-border-radius u-custom-borders u-custom-color u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-text-shadow u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-black u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-color-2 u-hover-custom-color-2 u-nav-link u-radius-6 u-text-active-white u-text-hover-grey-90" href="Home.php" style="padding: 10px 0px;">Home</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-black u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-color-2 u-hover-custom-color-2 u-nav-link u-radius-6 u-text-active-white u-text-hover-grey-90" href="Create-a-Favorite.php" style="padding: 10px 0px;">Create a Class</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-black u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-color-2 u-hover-custom-color-2 u-nav-link u-radius-6 u-text-active-white u-text-hover-grey-90" href="Display-Page.php" style="padding: 10px 0px;">Display Page</a>
</li><li class="u-nav-item"><a class="u-active-custom-color-2 u-border-2 u-border-active-black u-border-hover-custom-color-2 u-border-no-left u-border-no-right u-border-no-top u-button-style u-custom-color-2 u-hover-custom-color-2 u-nav-link u-radius-6 u-text-active-white u-text-hover-grey-90" href="Gun-Display-Page.php" style="padding: 10px 0px;">Unlock Levels</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php">Home</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Create-a-Favorite.php">Create a Class</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Display-Page.php">Display Page</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Gun-Display-Page.php">Unlock Levels</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-black u-border-2 u-border-palette-3-base u-clearfix u-section-1" id="sec-b831">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-custom-color-2 u-text-1">EDIT FAVORITE CLASS</h1>
        <div class="u-align-center u-border-3 u-border-white u-form u-radius-50 u-white u-form-1">
          <form action="Edit.php" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-0 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 11px;" redirect="true">
            <div class="u-form-group u-form-group-1">
            <label for="text-fd5f" class="u-label u-label-1">CLASS NAME</label>
            <?php
                $id = key($_POST['submit']);

                $query = "SELECT LOAD_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<input type="text" id="text-fd5f" name="Class_Name" value="'.$row['LOAD_NAME'].'" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">';
                }
                
                ?>
              
              
            </div>
            <div class="u-form-group u-form-group-1">
            <label for="text-fd5f" class="u-label u-label-1">CLASS DESCRIPTION</label>
            <?php
                $id = key($_POST['submit']);

                $query = "SELECT CLASS_DESCRIPTION FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<input type="text" id="text-fd5f" name="Class_Description" value="'.$row['CLASS_DESCRIPTION'].'" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">';
                }
                
                ?>
              
              
            </div>                                        
            <div class="u-form-group u-form-select u-form-group-2">
              <label for="select-4f7e" class="u-label u-label-2">GUN</label>
              <div class="u-form-select-wrapper">
                <select id="select-4f7e" name="Gun" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT GUN_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="Item 2">'.$row['GUN_NAME'].'</option>';
                }
                
                ?>
                
                <?php
                  $Gun_Select_Query = "SELECT * FROM guns;";
                  $Gun_Result = $conn->query($Gun_Select_Query);

                  while($row=mysqli_fetch_array($Gun_Result))
                  {
                    echo "<option>$row[GUN_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-3">
              <label for="select-f7d3" class="u-label u-label-3">OPTIC</label>
              <div class="u-form-select-wrapper">
                <select id="select-f7d3" name="Optic" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT ATM1_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="None">'.$row['ATM1_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Attachment_Optic_Select_Query = "SELECT * FROM attachments WHERE ATM_CATEGORY = 'OPTIC';";
                  $Attachment_Optic_Result = $conn->query($Attachment_Optic_Select_Query);

                  while($row=mysqli_fetch_array($Attachment_Optic_Result))
                  {
                    echo "<option>$row[ATM_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-4">
              <label for="select-cf8c" class="u-label u-label-4">LASER</label>
              <div class="u-form-select-wrapper">
                <select id="select-cf8c" name="Laser" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT ATM2_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="None">'.$row['ATM2_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Attachment_Laser_Select_Query = "SELECT * FROM attachments WHERE ATM_CATEGORY = 'LASER';";
                  $Attachment_Laser_Result = $conn->query($Attachment_Laser_Select_Query);

                  while($row=mysqli_fetch_array($Attachment_Laser_Result))
                  {
                    echo "<option>$row[ATM_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-6">
              <label for="select-adcd" class="u-label u-label-6">MUZZLE</label>
              <div class="u-form-select-wrapper">
                <select id="select-adcd" name="Muzzle" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT ATM3_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="None">'.$row['ATM3_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Attachment_Muzzle_Select_Query = "SELECT * FROM attachments WHERE ATM_CATEGORY = 'Muzzle';";
                  $Attachment_Muzzle_Result = $conn->query($Attachment_Muzzle_Select_Query);

                  while($row=mysqli_fetch_array($Attachment_Muzzle_Result))
                  {
                    echo "<option>$row[ATM_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-7">
              <label for="select-4038" class="u-label u-label-7">UNDERBARREL</label>
              <div class="u-form-select-wrapper">
                <select id="select-4038" name="Underbarrel" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                  
                  <?php
                $id = key($_POST['submit']);

                $query = "SELECT ATM4_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="None">'.$row['ATM4_NAME'].'</option>';
                }
                
                ?>
                  <?php
                  $Attachment_Underbarrel_Select_Query = "SELECT * FROM attachments WHERE ATM_CATEGORY = 'UNDERBARREL';";
                  $Attachment_Underbarrel_Result = $conn->query($Attachment_Underbarrel_Select_Query);

                  while($row=mysqli_fetch_array($Attachment_Underbarrel_Result))
                  {
                    echo "<option>$row[ATM_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-8">
              <label for="select-e1bb" class="u-label u-label-8">AMMUNITION</label>
              <div class="u-form-select-wrapper">
                <select id="select-e1bb" name="Ammunition" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT ATM5_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="None">'.$row['ATM5_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Attachment_Ammunition_Select_Query = "SELECT * FROM attachments WHERE ATM_CATEGORY = 'Ammunition';";
                  $Attachment_Ammunition_Result = $conn->query($Attachment_Ammunition_Select_Query);

                  while($row=mysqli_fetch_array($Attachment_Ammunition_Result))
                  {
                    echo "<option>$row[ATM_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-10">
              <label for="select-9aab" class="u-label u-label-10">REAR GRIP</label>
              <div class="u-form-select-wrapper">
                <select id="select-9aab" name="Rear_Grip" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                    <?php
                $id = key($_POST['submit']);

                $query = "SELECT ATM6_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="None">'.$row['ATM6_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Attachment_Reargrip_Select_Query = "SELECT * FROM attachments WHERE ATM_CATEGORY = 'Rear Grip';";
                  $Attachment_Reargrip_Result = $conn->query($Attachment_Reargrip_Select_Query);

                  while($row=mysqli_fetch_array($Attachment_Reargrip_Result))
                  {
                    echo "<option>$row[ATM_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-12">
              <label for="select-a793" class="u-label u-label-12">TACTICAL</label>
              <div class="u-form-select-wrapper">
                <select id="select-a793" name="Tactical" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white u-input-12">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT EQ1_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="SHOCK STICK">'.$row['EQ1_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Tactical_Select_Query = "SELECT * FROM equipment WHERE EQ_CATEGORY = 'Tactical';";
                  $Tactical_Result = $conn->query($Tactical_Select_Query);

                  while($row=mysqli_fetch_array($Tactical_Result))
                  {
                    echo "<option>$row[EQ_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-13">
              <label for="select-31fe" class="u-label u-label-13">LETHAL</label>
              <div class="u-form-select-wrapper">
                <select id="select-31fe" name="Lethal" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white u-input-13">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT EQ2_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="THERMITE">'.$row['EQ2_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Lethal_Select_Query = "SELECT * FROM equipment WHERE EQ_CATEGORY = 'Lethal';";
                  $Lethal_Result = $conn->query($Lethal_Select_Query);

                  while($row=mysqli_fetch_array($Lethal_Result))
                  {
                    echo "<option>$row[EQ_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-partition-factor-3 u-form-select u-form-group-14">
              <label for="select-2a26" class="u-label u-label-14">FIELD UPGRADE</label>
              <div class="u-form-select-wrapper">
                <select id="select-2a26" name="Field_Upgrade" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT FU_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="TACTICAL CAMERA">'.$row['FU_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Field_Upgrades_Select_Query = "SELECT * FROM field_upgrades";
                  $Field_Upgrades_Result = $conn->query($Field_Upgrades_Select_Query);

                  while($row=mysqli_fetch_array($Field_Upgrades_Result))
                  {
                    echo "<option>$row[FU_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-15">
              <label for="select-8c33" class="u-label u-label-15">Perk Number 1</label>
              <div class="u-form-select-wrapper">
                <select id="select-8c33" name="Perk_Num1" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT PERK1_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="PERK PACKAGE 5">'.$row['PERK1_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Perks_Select_Query = "SELECT * FROM PERKS WHERE PERK_CATEGORY = 'Perk 1'";
                  $Perks_Result = $conn->query($Perks_Select_Query);

                  while($row=mysqli_fetch_array($Perks_Result))
                  {
                    echo "<option>$row[PERK_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-15">
              <label for="select-8c33" class="u-label u-label-15">PERK Number 2</label>
              <div class="u-form-select-wrapper">
                <select id="select-8c33" name="Perk_Num2" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT PERK2_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="PERK PACKAGE 5">'.$row['PERK2_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Perks_Select_Query = "SELECT * FROM PERKS WHERE PERK_CATEGORY = 'Perk 2'";
                  $Perks_Result = $conn->query($Perks_Select_Query);

                  while($row=mysqli_fetch_array($Perks_Result))
                  {
                    echo "<option>$row[PERK_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-form-group u-form-select u-form-group-15">
              <label for="select-8c33" class="u-label u-label-15">PERK Number 3</label>
              <div class="u-form-select-wrapper">
                <select id="select-8c33" name="Perk_Num3" class="u-border-3 u-border-custom-color-2 u-input u-input-rectangle u-radius-6 u-white">
                <?php
                $id = key($_POST['submit']);

                $query = "SELECT PERK3_NAME FROM loadout WHERE LOAD_ID=$id";
                $result= mysqli_query($conn, $query);

                while ($row = $result->fetch_assoc()){
                echo '<option value="PERK PACKAGE 5">'.$row['PERK3_NAME'].'</option>';
                }
                
                ?>
                  
                  <?php
                  $Perks_Select_Query = "SELECT * FROM PERKS WHERE PERK_CATEGORY = 'Perk 3'";
                  $Perks_Result = $conn->query($Perks_Select_Query);

                  while($row=mysqli_fetch_array($Perks_Result))
                  {
                    echo "<option>$row[PERK_NAME]</option>";
                  }

                ?>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
              </div>
            </div>
            <div class="u-align-center u-form-group u-form-submit u-form-group-16">



              <button type="submit" name ="edit_select" class="u-black u-border-3 u-border-custom-color-2 u-btn u-btn-round u-btn-submit u-button-style u-hover-custom-color-2 u-radius-37 u-text-hover-white u-text-palette-1-light-3 u-btn-1">Submit</button>
              <input type="submit" value="submit" class="u-form-control-hidden">

            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input  type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
        <a href="#" class="u-align-center u-black u-border-3 u-border-custom-color-2 u-btn u-btn-round u-button-style u-hover-custom-color-2 u-radius-50 u-btn-2">Cancel</a>
      </div>
    </section>
    
    
 
    
  
</body></html>