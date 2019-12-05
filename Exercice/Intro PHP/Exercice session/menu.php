<link rel="stylesheet" href="pure-layout-marketing/css/layouts/marketing.css">   
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
      
            <a href="admin.php" class="pure-menu-heading ">Menu administrateur</a>
            <ul class="pure-menu-list">    
                <li  <?php if ($menu == 'admin1') 
				             {echo 'class="pure-menu-item pure-menu-selected"';} 
						   else {echo 'class="pure-menu-item"';}?>><a href="admin1.php" class="pure-menu-link">La gestion des inscriptions </a></li>
                <li <?php if ($menu == 'admin2') 
				             {echo 'class="pure-menu-item pure-menu-selected"';} 
						   else {echo 'class="pure-menu-item"';}?>><a href="admin2.php" class="pure-menu-link">La gestion des clients </a></li>
                <li <?php if ($menu == 'admin3') 
				             {echo 'class="pure-menu-item pure-menu-selected"';} 
						   else {echo 'class="pure-menu-item"';}?>><a href="admin3.php" class="pure-menu-link">La gestion des catégories</a></li>
            </ul>
		
    </div>
</div>



