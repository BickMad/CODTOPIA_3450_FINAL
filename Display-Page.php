<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Display Page</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Display-Page.css" media="screen">
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
    <meta property="og:title" content="Display Page">
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
    <section class="u-clearfix u-custom-color-2 u-section-1" id="sec-36ba">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1"></div>
        </div>

        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">

                <?php

                $idNumber = 0;
                
                if(isset ($_GET['delete_id'] )){
                  $delete_query = "DELETE FROM LOADOUT WHERE LOAD_ID = " . $_GET
                  ['delete_id'] . ";";
                  $result = $conn->query($delete_query);
                }
                $query = "SELECT * FROM loadout";
                $result= mysqli_query($conn, $query);


                
                
                
                while($row = $result->fetch_assoc()){
                  $idNumber++;

                  if($idNumber % 2 == 1)
                  echo '</div></div>';
                  echo '<div class = "u-size-30">';
                  echo '<div class = "u-layout-row>';
                  
                  echo '<div class="u-black u-container-style u-layout-cell u-radius-50 u-shape-round u-size-30 u-layout-cell-1" style="width:600px"> ';
                
                  echo '<div class="u-border-6 u-border-white u-container-layout u-valign-bottom u-container-layout-1">';

                  echo '<h4 class="u-align-center u-text u-text-custom-color-2 u-text-default u-text-1">'.$row['LOAD_NAME'].'</h4>';

                  echo '<h4 class="u-align-center u-text u-text-custom-color-2 u-text-3">'.$row['GUN_NAME'].'</h4>';

                  echo '<p class="u-align-center u-text u-text-custom-color-2 u-text-4">'.$row['CLASS_DESCRIPTION'].'<br></p>';


                  echo '<form action="See-Favorite.php" method="post">';
                  echo '<input name="submit[' . $row['LOAD_ID'] . ']" type="submit" value="See Full Class" class="u-align-center u-black u-border-3 u-border-custom-color-2 u-btn u-btn-round u-button-style u-hover-custom-color-2 u-radius-50 u-btn-1" style="border-width:3px">'; 
                  echo '</form>';

                  
                  echo "<a class = 'u-align-center u-black u-border-3 u-border-custom-color-2 u-btn u-btn-round u-button-style u-hover-custom-color-2 u-radius-50 u-btn-1' href=?delete_id=" . $row['LOAD_ID'] . ">Delete</a>"; 
                  
                  echo '<form action="Edit-a-Favorite.php" method="post">';
                  echo '<input name="submit[' . $row['LOAD_ID'] . ']" type="submit" value="Edit" class="u-align-center u-black u-border-3 u-border-custom-color-2 u-btn u-btn-round u-button-style u-hover-custom-color-2 u-radius-50 u-btn-1" style="border-width:3px">'; 
                  echo '</form>';

                  

                  echo '</div></div>';
            
                }


              


                ?>

                


                

                  







            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
  
</body></html>