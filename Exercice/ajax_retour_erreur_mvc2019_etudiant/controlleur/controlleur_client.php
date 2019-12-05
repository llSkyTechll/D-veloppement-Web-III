
<?php
    require('model/ManagerClients.php');
	
	function formulaire(){	
		require 'view/vue_formulaire.php';
	}


    function afficheAutre(){
        require 'view/vue_autre.php';
    }


    function verifieInformations($nom,$prenom){
        if (!empty($nom) or (!empty($prenom))){
            $nomBD = "Roy";
            $prenomBD = "Luc";
            if($nomBD == $nom && $prenomBD == $prenom){ // Si les infos correspondent...
                echo "bon_login";  			  
            }
            else{ 
                echo "mauvais_login";
            } 
        }      
    }
?>   