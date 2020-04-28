<?php
session_start();
if(isset($_GET['theme']))
{
$_SESSION['theme']=$_GET['theme'];
header("index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>LinkedIn</title>
<meta charset="utf-8">
	    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

     <!--Css-->
    <link rel="stylesheet" href="css/style.css" />
	<?php 
	if(isset($_SESSION['theme']) && $_SESSION['theme'] == 1236 )
	{
	echo "<link rel='stylesheet' href='css/dark.css' />";	
	}
	?>
    
	
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	


</head>
<body>
<header><img src="images/logo.png" id="logo"/>
<button id="BtnSearchEntete"><i class='fa fa-search'></i></button>
<input type="search" name="search" placeholder="Recherche" id="SearchBoxEntete" />

<div class="LinkBox BorderLeft"><p><i class='fa fa-th'></i><br /> Produits <i class='fa fa-sort-down'></i></p></div>
<div class="LinkBox ImageBx"><div class="boxavatarEnt"><img src="images/avatar.jpg" /></div><p> Vous <i class='fa fa-sort-down'></i></p></div>
<div class="LinkBox LinkBoxF"><p><i class='fa fa-bell-o'></i><font>8</font><br /> Notifications</p></div>
<div class="LinkBox LinkBoxF"><p><i class='fa fa-comments-o'></i><font>16</font><br /> Messagerie</p></div>
<div class="LinkBox LinkBoxF"><p><i class='fa fa-suitcase'></i><br /> Emplois</p></div>
<div class="LinkBox LinkBoxF"><p><i class='fa fa-user'></i><font>5</font><br /> Réseau</p></div>
<div class="LinkBox active"><p><i class='fa fa-home'></i><br /> Accueil</p></div>
</header>

<P class="LinkTheme">
<?php
if(isset($_SESSION['theme']) && $_SESSION['theme'] == 1236 )
{
echo "<a href='index.php?theme=174637'><i class='fa fa-cogs'></i> Mode Normal</a>";	
}
else
{
echo "<a href='index.php?theme=1236'><i class='fa fa-cogs'></i> Mode Sombre</a>";	
}
?>
</p>

<div id="contenaire">

<h1 id="contenaireCenter"> <font>Advance in your career -</font> Millions of members use LinkedIn Learning. Unlock your free access today. </h1>

<div id="BoxMessage">
<div id="BoxMessageTop">
<div id="avatarBoxMsg"><img src="images/avatar.jpg" /></div>
<p><font id="Messagerie">Messagerie</font> <font id="nbm">16</font> <font id="EditMsg"><i class='fa fa-edit'></i></font> <font id="MenuMsg">...</font></p>
</div>
<div id="MsgContenaire">
<button id="BtnSearch"><i class='fa fa-search'></i></button>
<input type="search" name="search" placeholder="Rechercher dans les messages" id="SearchBox" />
<button id="BtnFiltre"><i class='fa fa-sliders'></i></button>

<div class="MessageBoxItem">
<div class="AvatarMessageItem"><img src="images/wolensky.jpg" /></div>
<div class="InfosTextMsg">
<h2>Jean Wolensky <font class="NbrMsgItem">5</font></h2>
<p>Merci de vous connecter à...</p>
</div>
</div>

<div class="MessageBoxItem">
<div class="AvatarMessageItem"><img src="images/sheshel.jpg" /></div>
<div class="InfosTextMsg">
<h2>Sheshe Shelshel <font class="NbrMsgItem">3</font></h2>
<p>Merci de vous connecter à...</p>
</div>
</div>

<div class="MessageBoxItem">
<div class="AvatarMessageItem"><img src="images/reginald.jpg" /></div>
<div class="InfosTextMsg">
<h2>Reginald Ladouceur <font class="NbrMsgItem">1</font></h2>
<p>Merci de vous connecter à...</p>
</div>
</div>

<div class="MessageBoxItem">
<div class="AvatarMessageItem"><img src="images/guercy.jpg" /></div>
<div class="InfosTextMsg">
<h2>Guercy Richard <font class="NbrMsgItem">7</font></h2>
<p>Merci de vous connecter à...</p>
</div>
</div>

</div>

</div>



<section id="boxleft">
<div class="boxleftMultiple">
<div id="profilTopImage"><img src="images/back.jpg" /></div>
<div id="Boxavatar"><img src="images/avatar.jpg" /></div>
<div class="TexteCenterBox">
<h1>Appolon Guy-alain</h1>
<p>--</p>
</div>

<div class="TexteBoxInfos">
<p class="itemGray">Relations <font class='colorBlue'>85</font></p>
<p class="leftItem">Développez votre réseau</p>
<p class="itemGray">Accédez à des infos et des outils exclusifs</p>
<p class="leftItem">Essai de Premium gratuit d’un mois</p>
</div>
<div class="TexteBoxInfos">
<p class="leftItem"><b><i class='fa fa-bookmark-o'></i> &nbspÉléments enregistrés</b> </p>
</div>

</div>
<div class="boxleftMultipleBorderTop">
<div id="topBarCadre"></div>
<div id="ProfilPage"><img src="images/appographic2.jpg" /></div>
<div class="TexteBoxInfosTop">
<h1>Appo-graphic Conception</h1>
<p class="itemGray">Notifications de la page <font class='colorBlue'>25</font></p>
<p class="itemGray">Visiteurs sur la page <font class='colorBlue'>352</font></p>
</div>
<div class="TexteBoxInfos">
<p class="leftItem"><b>Voir les satistiques sur les visiteurs</b> </p>
</div>
</div>
<div class="boxleftMultiple">
<div class="TexteBoxInfosTop">
<p class="recent">Récent</p>
<p class="itemGray"># actualites</p>
<p class="itemGray"># Euro</p>
<p class="itemGray"># Foot</p>
<p class="itemGray"># Sport</p>
<p class="itemGray"># Design</p><br />
</div>
</div>

<div class="boxleftMultiple">
<div class="TexteBoxInfosTop">
<p class="recent">Hashtags suivis</p>
<p class="itemGray"># actualites</p>
<p class="itemGray"># Euro</p>
<p class="itemGray"># Foot</p>
<p class="itemGray"># Sport</p>
<p class="itemGray"># Design</p><br />
</div>
</div>

</section>

<section id="boxcenter">
<div class="boxleftMultiple">
<div id="PostBox">
<h2><i class='fa fa-edit'></i> Commencer un post</h2>

<div class="PostBoxItem"><i class='fa fa-file-text-o'></i></div>
<div class="PostBoxItem"><i class='fa fa-video-camera'></i></div>
<div class="PostBoxItem"><i class='fa fa-camera'></i></div>
</div>

<div id="ecrirearticle"><p>Écrivez un article <font color="gray">sur LinkedIn</font></p></div>
</div>
<div id='boxBarClasser'></div><div id="classerpar"><p><font color="gray">Classer par</font> <b>Haut<i class='fa fa-sort-down'></i></b><p></div>

<div class="boxleftMultiple">
<div id="BoxPostTop"><p><b>Haiti info Entreprneurs</b> <font color="gray">aime ceci</font> <font id="menuPoint">...</font></p></div>

<div class="boxavatarPost"><img src='images/reginald.jpg'></div> <h4>Reginald Ladouceur . <font color="gray">3e et plus</font></h4>
<p class="paragraphGray">Communicologue-Gestionnaire-Leader-Entrepreneur</p>
<p class="paragraph">Avec <a href="https://www.maketpamht.com">www.maketpamht.com</a> Faire son shopping en ligne c’est simple et rapide, il vous suffit de faire un tour sur le site et d’y choisir la catégorie qui vous intéresse puis de spécifier quel type de produit il vous faut à travers les filtres. <font color="gray">...Voir plus</font></p>
<img src="images/flyer2.jpg" class="AffichePost" />

<p class="infosComments"><i class='fa fa-thumbs-o-up'></i> 85 . 19 Commentaires . 3572 vues </p>
<div class="BoxLinkComment">
<p><i class='fa fa-thumbs-o-up'></i> J'aime &nbsp&nbsp&nbsp<i class='fa fa-comment-o'></i> Commenter &nbsp&nbsp&nbsp<i class='fa fa-share'></i> Partager</p>
</div>

</div>

<div class="boxleftMultiple">
<div id="BoxPostTop"><p><b>Haiti info Entreprneurs</b> <font color="gray">aime ceci</font> <font id="menuPoint">...</font></p></div>

<div class="boxavatarPost"><img src='images/reginald.jpg'></div> <h4>Reginald Ladouceur . <font color="gray">3e et plus</font></h4>
<p class="paragraphGray">Communicologue-Gestionnaire-Leader-Entrepreneur</p>
<p class="paragraph">Avec <a href="https://www.maketpamht.com">www.maketpamht.com</a> Faire son shopping en ligne c’est simple et rapide, il vous suffit de faire un tour sur le site et d’y choisir la catégorie qui vous intéresse puis de spécifier quel type de produit il vous faut à travers les filtres. <font color="gray">...Voir plus</font></p>
<img src="images/flyer2.jpg" class="AffichePost" />

<p class="infosComments"><i class='fa fa-thumbs-o-up'></i> 85 . 19 Commentaires . 3572 vues </p>
<div class="BoxLinkComment">
<p><i class='fa fa-thumbs-o-up'></i> J'aime &nbsp&nbsp&nbsp<i class='fa fa-comment-o'></i> Commenter &nbsp&nbsp&nbsp<i class='fa fa-share'></i> Partager</p>
</div>

</div>

</section>

<section id="boxright">

<div class="boxleftMultiple">
<div class="BoxInfosRight">
<p class="addActu">Ajouter à votre fil d'activité <font class="filactu"><i class='fa fa-arrow-circle-o-up'></i></font></p>

<div class="FilactuBox">
<div class="FilactuAvatarBox"><img src="images/dynastycover.jpg" /></div>
<h2>DYNASTY HUB <a href="#">+ Suivre</a></h2>
<p>Un projet collectif réalisé par les membres du CEEH</p>
</div>

<div class="FilactuBox">
<div class="FilactuAvatarBox"><img src="images/maketpamprofil.jpg" /></div>
<h2>Makèt pam <a href="#">+ Suivre</a></h2>
<p>Plateforme de vente et de services en ligne</p>
</div>

<div class="FilactuBox">
<div class="FilactuAvatarBox"><img src="images/ceeh.jpg" /></div>
<h2>CEEH <a href="#">+ Suivre</a></h2>
<p>Cercle des étudiants entrepreneurs d'Haiti</p>
</div>

<p class="suggestionP">+ Voir tous les suggestions</p>

</div>
</div>

<div class="boxleftMultiple">
<img src="images/flyer.jpg" class="flyerMp" />
</div>

<div class="boxleftMultiple">
<img src="images/flyer.jpg" class="flyerMp" />
</div>

</section>


<div>
</body>
</html>