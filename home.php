<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
    <title>Scholaris</title>

    <link rel="icon" href="">
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

    <script type="text/javascript" src="bootstrap/js/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

    <script type="text/javascript">
    	$(function loading(){
    		$(".middle-box").hide().delay(3000).show('slow');
            $(".bounce").show('slow').delay(3000).hide('slow');
            $(".log-msg").show('slow').delay(3000).hide('slow');
    	})
        $(function(){
            $("#msg1").hide();
            $("#msg2").hide();
            $("#msg3").hide();
            $("#msg4").hide();
            $("#msg5").hide();

            $("#btn-user-guide").click(function(){
                $(".middle-box").hide('slow');
                $("#msg1").show('slow');
            })
            $("#suivant-msg2").click(function(){
                $("#msg1").hide();
                $("#msg2").show('slow');
            })
            $("#suivant-msg3").click(function(){
                $("#msg2").hide();
                $("#msg3").show('slow');
            })
            $("#suivant-msg4").click(function(){
                $("#msg3").hide();
                $("#msg4").show('slow');
            })
            $("#suivant-msg5").click(function(){
                $("#msg4").hide();
                $("#msg5").show('slow');
            })
        })
    </script>

</head>
<body style="font-family:'calibri light';" onload="loading()">
<div class="visible-xs visible-sm">
	<div class="bounce"></div>
    <div class="log-msg">
        Chargement du contenu ...
    </div>
	<div class="middle-box">
		<p class="xs-text middle-box-text">
            <span style="font-size: 40px;">Scholaris</span><br/>
			Etudions avec plus de simplicité !
		</p>
	
	    <img src="learn1.gif" class="img-responsive">
        <button class="btn" id="btn-user-guide">Guide d'utilisation</button>
        <a href="view/accueil.php" class="btn">Accueil</a>
    </div>

    <div id="msg1" class="msg">
        Bienvenu dans Scholaris<br/>
        L'espace dédié aux mathématiques<br/>
        <button class="btn" id="suivant-msg2">Suivant</button>
    </div>
    <div id="msg2" class="sub-msg">
        Le bouton contenant l'icône <span class="fa fa-users"></span>  vous permet de vous enregistrez pour qu'ainsi vous soyez compté parmi nos élèves.<br/>
        <button class="btn" id="suivant-msg3">Suivant</button>
    </div>
    <div id="msg3" class="sub-msg">
        Le bouton contenat l'icône <span class="fa fa-list"></span> vous permet d'avoir accès au menu, vous aurez ainsi la possibilité d'accéder à l'espace de cours ou l'espace d'exercice<br>
        <button class="btn" id="suivant-msg4">Suivant</button>
    </div>
    <div id="msg4" class="sub-msg">
        L'application vous présentera quelques astuces pour traiter des exercices de mathématique, les libellés de chaque astuce apparaissent lorsque vous cliquez sur le bouton contenant un <b>#</b> suivit d'un nombre et ils disparaitront lorsque vous cliquez sur la croix.<br/>
        <button class="btn" id="suivant-msg5">Suivant</button>

    </div>
    <div id="msg5" class="msg">
        Merci de nous avoir choisi et profitez bien de l'application.<br/>
        <img src="learn2.gif" class="img-responsive">
        <a href="view/accueil.php" class="btn"> Accueil</a>
    </div>
</div>

    <div class="container lg2-text hidden-xs hidden-sm" style="text-align: center;">
        Le contenu pour ordinateur est en phase de création.<br/>
        Veuillez choisir comme périphérique un smartphone ou une tablette<br/>
        <img src="learn2.gif" class="img-responsive">
    </div>

</body>
</html>