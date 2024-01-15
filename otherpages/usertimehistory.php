<?php 
require 'backend/adminauthentication.php';
require 'backend/database.php'
?>

<html>
<head>
<link type="text/css" rel="stylesheet" href="../css/admins.css">
      <title>User time History</title>
      
</head>
<body>

      <nav> 
            <div class="menu-icon">
                  <span class="fas fa-bars"></span>
            </div>

            <div class="logo">User Time History</div>

            <div class="nav-items">
                  <li><a href="admin.php">Home</a></li>
                  <li><a>User Time History</a></li>
            </div>

            <div class="search-icon">
                  <span class="fas fa-search"></span>
            </div>

      </nav> 
      
      <div class="button-container">
        <form action="" method="GET">
            <input type="text" name="search" value="<?php if (isset($_GET["search"])){echo $_GET["search"];} ?>" placeholder="Input user Employee ID">
            <button type="submit" class="create-btn">Search</button>
        </form>
            
      </div>
      <table class="content">
            <tr class="header">
                  <th>Employee ID</th>
                  <th>Full Name</th>
                  <th>Department</th>
                  <th>Date In</th>
                  <th>Time In</th>
                  <th>Date Out</th>
                  <th>Time Out</th>
            </tr>
            <?php include 'backend/livesearch.php'; ?>
      </table>

  
</body>

</html>