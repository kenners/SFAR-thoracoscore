<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SFAR - Société Française d'Anesthésie et de Réanimation</title>
<link rel="shortcut icon" href="../_images/favicon.ico" /> 
<link href="../_styles/style.css"  rel="stylesheet" type="text/css" />
<link href="../_styles/menu.css"  rel="stylesheet" type="text/css" />
<link href="../_styles/acte.css" rel="stylesheet" type="text/css" />
<link href="../_styles/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="../_styles/jquery-jgrowl.css"  rel="stylesheet" type="text/css" />
<link href="../_styles/thickbox.css"  rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../_styles/lightbox.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="../_styles/jquery.lightbox-0.5.css" media="screen" />
<link rel="alternate" href="/flux/articles.php" type="application/rss+xml" title="Flux RSS Articles SFAR" />
<link rel="alternate" href="/flux/evenements.php" type="application/rss+xml" title="Flux RSS Evenements SFAR" />
	
<script type="text/javascript" src="../_scripts/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="../_scripts/jquery-jgrowl.js"></script>
<script type="text/javascript" src="../_scripts/jquery-ui-min.js"></script>
<script type="text/javascript" src="../_scripts/jquery.scrollNews.js"></script>
<script type="text/javascript" src="../_scripts/acta/open.js"></script>
<script type="text/javascript" src="../_scripts/jwplayer.js"></script>
<script type="text/javascript" src="../_scripts/thickbox.js"></script>

<!-- <a href="#" class="appelBiblio">[if lt IE 7.]</a> -->
<script src="../_scripts/jquery.pngFix.pack.js" type="text/javascript" defer="true"></script>
<!-- <a href="#" class="appelBiblio">[endif]</a> -->

<script type="text/javascript" src="../_scripts/jquery.lightbox-0.5.js"></script>
<script type="text/javascript">
    $(function() {
        $('#image a').lightBox();
		$('#image2 a').lightBox();
    });
</script>

<script type="text/javascript">
function afficheArticles(idCategorie) {
	$("#listeArticles").load('../_librairies/t_ajax.php',{id_ajax:23, categorie_id:idCategorie});
}

function afficheArticles2(idCategorie) {
	$("#listeArticles2011").load('../_librairies/t_ajax.php',{id_ajax:27, categorie_id:idCategorie});
}
</script>



<style type="text/css">
	#top{
	width:950px;
	height:109px;
			background:#FFF url(../_images/top.gif) no-repeat top left;
		
	}

</style><SCRIPT LANGUAGE=javascript>function CalcAGE(form) {
form.zage.value = form.age[form.age.selectedIndex].value
form.zmort.value = CalcMort(form)
}
function CalcSEX(form) {
form.zsex.value = form.sex[form.sex.selectedIndex].value
form.zmort.value = CalcMort(form)
}
function CalcASA(form) {
form.zasa.value = form.asa[form.asa.selectedIndex].value
form.zmort.value = CalcMort(form)
}
function CalcPERFORMANCE(form) {
form.zperformance.value = form.performance[form.performance.selectedIndex].value
form.zmort.value = CalcMort(form)
}
function CalcDYSPNEA(form) {
form.zdyspnea.value = form.dyspnea[form.dyspnea.selectedIndex].value
form.zmort.value = CalcMort(form)
}
function CalcPRIORITY(form) {
form.zpriority.value = form.priority[form.priority.selectedIndex].value
form.zmort.value = CalcMort(form)
}
function CalcPROCEDURE(form) {
form.zprocedure.value = form.procedure[form.procedure.selectedIndex].value
form.zmort.value = CalcMort(form)
}


function CalcDIAGNOSIS(form) {
form.zdiagnosis.value = form.diagnosis[form.diagnosis.selectedIndex].value

form.zmort.value = CalcMort(form)
}
function CalcCOMORBIDITY(form) {
form.zcomorbidity.value = form.comorbidity[form.comorbidity.selectedIndex].value
form.zmort.value = CalcMort(form)
}

function CalcMort(form) {
z = eval(form.zage.value)
z = z + eval(form.zsex.value)
z = z + eval(form.zasa.value)
z = z + eval(form.zperformance.value)
z = z + eval(form.zdyspnea.value)
z = z + eval(form.zpriority.value)
z = z + eval(form.zprocedure.value)
z = z + eval(form.zdiagnosis.value)
z = z + eval(form.zcomorbidity.value)
z = z -7.3737
z = Math.exp(z) / (1 + Math.exp(z))
z = "Predict.Death Rate = "+Fmt(100 * z) + " %"
form.zmort.value= z
return z
}
function Fmt(x) {
var v
if(x>=0) { v=''+(x+0.05)} else { v=''+(x-0.05) }
return v.substring(0,v.indexOf('.')+3)
}</SCRIPT>

</head>

<body>

<div id="page">


<div id="top" title="SFAR Société Française d'Anesthésie et de Réanimation">
<script type="text/javascript">
function erreur(text) 
{
	$.jGrowl(text, { position: 'center' });
}
		
function clearChamp(id, valeur) 
{
	if (document.getElementById(id).value ==valeur) 
		document.getElementById(id).value = '';
	else if (!document.getElementById(id).value) 
		document.getElementById(id).value = valeur;
}

function clearChamp2(id, valeur) 
{
	if (document.getElementById(id).value == valeur) 
	{
		document.getElementById(id).value = '';
		//document.getElementById(id).type = 'password';
	}	
	else if (!document.getElementById(id).value) 
	{ 
		document.getElementById(id).value = valeur;
		//document.getElementById(id).type = 'text';
	}
}
</script>
<a href="../accueil/index.php" style="cursor:pointer;"><div class="clic-logo"></div></a>
<div id="bloc-membre">
		<form method="post" action="/scores2/thoracoscore2.php">
		<input type="hidden" name="id_form" value="50" />
		<table width="275" height="97px" cellpadding="0" cellspacing="0">
			<tr>
			  	<td colspan="3" align="center" class="titre12-bleuvert">ACCÈS MEMBRES</td>
			</tr>
			<tr>
			  	<td width="88" height="26" class="bleu11v">Identifiant&nbsp;:</td>
			  	<td width="133">
					<input type="text" name="identifiant" id="identifiant" value="Numéro d'adhérent" onfocus="clearChamp('identifiant', 'Numéro d\'adhérent');" onblur="clearChamp('identifiant', 'Numéro d\'adhérent');" style="width:130px;" />
			  	</td>
			  	<td width="32">&nbsp;</td>
			</tr>
			<tr>
			  	<td class="bleu11v">Mot de passe&nbsp;:</td>
			  	<td>
                	<input type="password" name="motpasse" id="motpasse" value="Mot de passe" onfocus="clearChamp2('motpasse', 'Mot de passe');" onblur="clearChamp2('motpasse', 'Mot de passe');" style="width:130px;" />
                </td>
			  	<td align="center">
				 	<input type="submit" name="button3" id="button3" value=" " class="btn-ok-vert" />
			  	</td>
			</tr>
			<tr>
			  	<td colspan="3" align="left" class="gris10">
                	<a href="../accueil/mdp-oubli.php">
                    	&gt; Numéro d'adhérent ou mot de passe oublié
                    </a>
                    <br />
					<a href="http://www.sfar.org/article/311/devenir-membre-de-la-sfar">
                    &gt; Devenir membre de la SFAR
                    </a>
              	</td>
			</tr>
		</table>
		</form>
		</div><!-- fin bloc membre-->

</div><!-- fin div top-->

<div id="main">
<script type="text/javascript">
	function afficheMenu(id) {
		document.getElementById(id).style.top='35px';
	}
	
	function cacheMenu(id) {
		javascript:document.getElementById(id).style.top='-900px';
	}
</script>
<script type="text/javascript">
<!--
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>



<div id="menu">
  <ul id="menu-ul">
    <li id="item-1" class="rubrique" onmouseover="javascript:afficheMenu('sub2')" onmouseout="javascript:cacheMenu('sub2');"><a href="#" onclick="return false;" class="bord-droit" title="La SFAR"><span style="padding-top:6px;" >La SFAR</span></a>
      <div id="sub2" class="sub" onmouseover="javascript:afficheMenu('sub2')" onmouseout="javascript:cacheMenu('sub2');">
        <div class="subInner">
          <ul>
 <!--           <li><a href="../sfar-et-comites/presentation.php">• Pr&eacute;sentation et statuts </a></li> -->
            <li><a href="/article/308/presentation-et-statuts">• Pr&eacute;sentation et statuts </a></li> 

            <li><a href="/article/309/organisation-de-la-sfar">• Organisation </a></li>
                       <li><a href="http://www.sfar2012.com" target="_blank">• Congrès National</a></li>
            <li><a href="/article/311/devenir-membre-de-la-sfar">• Adhérer à la SFAR</a></li>
          </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
    </li>
    <li id="item-2" class="rubrique" onmouseover="javascript:afficheMenu('sub3')" onmouseout="javascript:cacheMenu('sub3');"> <a href="#" onclick="return false;" class="bord-droit" title="Actualités"><span style="padding-top:6px;" >Actualités</span></a>
     <div id="sub3" class="sub" onmouseover="javascript:afficheMenu('sub3')" onmouseout="javascript:cacheMenu('sub3');">
        <div class="subInner">
          <ul>
            <li>
            <a href="/accueil/editorial/2012/04">• &Eacute;ditorial</a>            </li>
            <li><a href="/categorie/7/communique/1">• Communiqu&eacute;s</a></li>
            <li><a href="../accueil/agenda.php">• Agenda - &Eacute;v&eacute;nements</a></li>
            <li>
            <a href="/selection/selections-du-mois/2012/04">• S&eacute;lections du mois</a>            </li>         
          </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
     </li>
     
     
    <li id="item-3" class="rubrique" onmouseover="javascript:afficheMenu('sub4')" onmouseout="javascript:cacheMenu('sub4');"> <a href="#" onclick="return false;" class="bord-droit" title="Référentiels"><span style="padding-top:6px;">Référentiels</span></a> 
      <div id="sub4" class="sub" onmouseover="javascript:afficheMenu('sub4')" onmouseout="javascript:cacheMenu('sub4');">
        <div class="subInner">
          <ul>
          	<li><a href="/categorie/10/conf-rences-experts-rfe/1">• Conf&eacute;rences Experts / RFE</a></li>
            <li><a href="/categorie/9/conferences-consensus/1">• Conf&eacute;rences consensus</a></li>
            <li><a href="/categorie/12/rpc/1">• RPC</a></li>
            <li><a href="/categorie/8/recommandations-de-la-sfar/1">• Recommandations de la SFAR</a></li>
            <li><a href="/categorie/13/fiches-techniques/1">• Autres r&eacute;f&eacute;rentiels</a></li>
            <li><a href="recherche-avancee.php">• Accès par thème</a></li>
            
          </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
      </li>
        
        
        
    <li id="item-4" class="rubrique" onmouseover="javascript:afficheMenu('sub5')" onmouseout="javascript:cacheMenu('sub5');"> <a href="#" onclick="return false;" class="bord-droit" title="Ressources et utilitaires"><span style="padding-top:6px;">Documentation</span></a> 
      <div id="sub5" class="sub" onmouseover="javascript:afficheMenu('sub5')" onmouseout="javascript:cacheMenu('sub5');">
        <div class="subInner">
          <ul>
            <li><a href="/categorie/37/fiches-d-urgence/1">• Fiches d'urgence</a></li>
            <li><a href="/article/315/scores">• Scores</a></li>
            <li><a href="/accueil/categorie-actas/"> • Actes des congrès</a></li>
            <li><a href="/accueil/categorie-iconf/"> • iConférences des congrès</a></li>
            <li><a href="/accueil/article/840/5emes-rencontres-en-reanimation-l-epuration-extrarenale-en-reanimation "> • Rencontres en réanimation</a></li>
            
            <li><a href="/categorie/17/qfp/1">• QFP</a></li>
            <li><a href="/categorie/18/terrains-particuliers-correspondants/1">• Terrains particuliers : correspondants</a></li>
            <li><a href="/categorie/38/travaux-des-comites/1">• Travaux des comités</a></li>
                      </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
     </li>
        
        
    <li id="item-5" class="rubrique" onmouseover="javascript:afficheMenu('sub6')" onmouseout="javascript:cacheMenu('sub6');"> <a href="#" onclick="return false;" class="bord-droit" title="Vie professionnelle et vigilance">Vie professionnelle<br />&amp; Vigilance</a> 
      <div id="sub6" class="sub" onmouseover="javascript:afficheMenu('sub6')" onmouseout="javascript:cacheMenu('sub6');">
        <div class="subInner">
          <ul>
            <li><a href="/categorie/22/contexte-professionnel/1">• Contexte professionnel</a></li>
            <li><a href="/categorie/23/alertes-sanitaires/1">• Alertes sanitaires</a></li>
            <li><a href="/categorie/24/sant-publique/1">• Santé publique</a></li>
            <li><a href="/categorie/25/textes-reglementaires/1">• Textes r&eacute;glementaires</a></li>
            <li><a href="/categorie/26/t2a-ccam/1">• T2A-CCAM</a></li>
            <li><a href="/categorie/27/informations-aux-patients/1">• Informations aux patients</a></li>
            <li><a href="/categorie/28/fiches-patients/1">• Fiches patients</a></li>
          </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
      </li>
    
    <li id="item-6" class="rubrique" onmouseover="javascript:afficheMenu('sub7')" onmouseout="javascript:cacheMenu('sub7');"> <a href="#" onclick="return false;" class="bord-droit" title="Recherche clinique et expérimentale"><span style="padding-top:6px;" >Recherche</span></a>
      <div class="sub" id="sub7" onmouseover="javascript:afficheMenu('sub7')" onmouseout="javascript:cacheMenu('sub7');">
        <div class="subInner">
          <ul>
          	<li><a href="../accueil/categorie/29/la-recherche-en-anesth-sie-r-animation/1">• La recherche en Anesthésie Réanimation</a></li>
            <li><a href="/categorie/30/bourses/1">• Bourses</a></li>
            <li><a href="/categorie/31/contrats/1">• Contrats</a></li>
            <li><a href="/categorie/32/grand-prix-de-recherche/1">• Grand Prix de recherche</a></li>
			<!--<li><a href="/accueil/sondage-ventilation">• Enquêtes</a></li>-->
            <li><a href="http://www.r3g.fr/enquete//index.php?sid=33224%3C=fr" target="_blank">• Enquêtes</a></li>
          </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
    </li>
    
     <li id="item-7" class="rubrique"  onmouseover="javascript:afficheMenu('sub8')" onmouseout="javascript:cacheMenu('sub8');"> <a href="#" onclick="return false;" class="bord-droit" title="Formations EPP &amp; DCP"><span style="padding-top:6px;" >Formations</span></a> 
       <div id="sub8" class="sub" onmouseover="javascript:afficheMenu('sub8')" onmouseout="javascript:cacheMenu('sub8');">
        <div class="subInner">
		<ul>
		  <li><span style="font:bold 14px Arial,Helvetica,sans-serif;"><font color="#FF6633">Formations de la SFAR</font></span>
		  <li>
		   <li><a href="/evenements/118/les-ateliers-rea-echographie-en-reanimation-nice">• Ateliers Réa 2012</a></li>
		   <li><a href="http://www.sfar2012.com" target="_blank">• Congrès SFAR 2012</a></li>
		   <li><a href="http://www.jmtsfar.com" target="_blank">• Journée Monothématique</a></li>
           <li><a href="/evenements/117/versailles-international-intensive-care-symposium">• VINCS 2012</a></li>
		    

			 <li><span style="font:bold 12px Arial,Helvetica,sans-serif;"><font color="#FF6633">Autres formations</font></span>
			 <li>
			 <li><a href="../accueil/agenda.php">• Calendrier des congr&egrave;s</a></li>
            <li><a href="/categorie/40/du-diu-autres/1">• DU, DIU, autres</a></li>
            <li><a href="/categorie/41/epp-dpc/1">• EPP, DPC</a></li>       
          </ul>
        </div>
        <!-- .subInner -->
      </div>
      <!-- .sub -->
     </li>
     
    <li id="item-8" class="rubrique" onmouseover="javascript:afficheMenu('sub9')" onmouseout="javascript:cacheMenu('sub9');"> 
    <a href="../contact/contact.php" class="bord-droit" title="Contact"><span style="padding-top:6px;">Contact</span></a>
    
   </li>
    
    
    
     <li id="item-9"> <a href="/article/319/summary"><img src="../_images/drapeau-uk.gif" alt="Drapeau anglais" width="25" height="17" border="0"  align="middle" style="margin-top:6px;margin-left:10px;"  title="version anglaise"/></a>
     </li>
    
  </ul>
</div><!-- #menu --></div> <!-- main-->


<div id="left">
<div class="bloc-recherche">
	<form action="/accueil/recherche.php" id="cse-search-box">
    <input type="hidden" name="cx" value="014604052300473643553:muejgkhxgrw" />
    <input type="hidden" name="cof" value="FORID:10;NB:1" />
    <input type="hidden" name="ie" value="UTF-8" />
    <table width="156" style="height:124px;" cellpadding="0" cellspacing="0">
        <tr>
            <td width="98px" align="center" class="orange12gras">RECHERCHER</td>
            <td width="46px">&nbsp;</td>
        </tr>
        <tr>
            <td colspan="2" align="center"><label>
            <input type="text" name="q" size="31" id="q" style="width:143px;" value="Votre recherche" title="votre recherche" onfocus="clearChamp('q', 'Votre recherche');" onblur="clearChamp('q', 'Votre recherche');"/>
            </label></td>
        </tr>
        <tr>
            <td colspan="2" align="center" class="gris10"><input type="submit" name="sa" id="button" value=" "  class="btn-ok" /></td>
        </tr>
       
        <tr>
            <td colspan="2" align="center" class="gris10"><a href="../accueil/recherche-avancee.php">&gt; Recherche avancée</a></td>
        </tr>
	
    </table>
    </form>
</div><!-- fin bloc recherche--> 
<br />

<div class="btn-bleu">
	<a href="http://www.sfar.org/article/311/devenir-membre-de-la-sfar" title="Devenir membre">Devenir membre<br />de la SFAR</a>
</div>
   

    
<div class="btn-vert"><a href="../espace-grand-public/espace-grand-public.php" title="Espace grand public">Espace Grand public</a></div>


<a href="http://www.sfar.org/article/210/egar" title="EGAR"><img src="../_images/btn-egar.gif" border="0" alt="egar" /></a>
<div class="bloc-nl">
        <span class="orange12" ><a href="../accueil/inscription.php"><strong>Inscription à la<br />
    Newsletter</strong></a></span>
    </div><!-- fin bloc nl-->
<a href="http://www.sfar2012.com" target="_blank"><img src="../_images/sfar2012.gif" border="0" /></a>
<br /><br />


<p class="titre12-violet" align="center">Les th&egrave;mes du moment</p>

        <span class="tag14">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=antibioprophylaxie&sa=+">
			<strong>antibioprophylaxie</strong>        </a> 
        </span>
                <span class="tag10">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=Votre+recherche&sa=+">
			Votre recherche        </a> 
        </span>
                <span class="tag14">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=Maladie+thrombo-embolique&sa=+">
			Maladie thrombo-embolique        </a> 
        </span>
                <span class="tag10">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=polytraumatis%C3%A9&sa=+">
			polytraumatisé        </a> 
        </span>
                <span class="tag14">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=sdra&sa=+">
			<strong>sdra</strong>        </a> 
        </span>
                <span class="tag12">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=Anti-aggr%C3%A9geants&sa=+">
			<strong>Anti-aggrégeants</strong>        </a> 
        </span>
                <span class="tag12">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=transfusion&sa=+">
			transfusion        </a> 
        </span>
                <span class="tag14">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=sepsis&sa=+">
			<strong>sepsis</strong>        </a> 
        </span>
                <span class="tag10">
        <a href="../accueil/recherche.php?cx=014604052300473643553%3Amuejgkhxgrw&cof=FORID%3A10%3BNB%3A1&ie=UTF-8&q=Stents&sa=+">
			Stents        </a> 
        </span>
        <br />
<br />


<img src="../_images/separateur.gif" alt="separateur" /><br />
<br />
<div class="btn-violet">
	<a href="../article/320/partenaires-privilegies-de-la-sfar" title="Partenaires privilégiés de la SFAR">Partenaires privilégiés <br />
	de la SFAR</a>
</div><br />
<p>
<a href="https://www.healthonnet.org/HONcode/Conduct_f.html?HONConduct923446" onclick="window.open(this.href); return false;" >
	<img src="http://www.honcode.ch/HONcode/Seal/French/HONConduct923446_s.gif" hspace="2" vspace="2" align="left" width="49" height="72" style="border:0px" title="Ce site respecte les principes de la charte HONcode de HON" alt="Ce site respecte les principes de la charte HONcode de HON" />
</a> 
Ce site respecte les <a href="http://www.healthonnet.org/HONcode/Conduct_f.html" onclick="window.open(this.href); return false;"> principes de la charte HONcode</a>.<br />Site certifi&eacute; en partenariat avec la Haute Autorit&eacute; de Santé (HAS). <br /><a href="https://www.healthonnet.org/HONcode/Conduct_f.html?HONConduct923446" onclick="window.open(this.href); return false;">V&eacute;rifiez ici.</a> </p>


<!--<div align="center"><img src="../_images/honcode.gif" alt="Charte HONcode" /></div>
<p class="gris10">Nous adhérons aux <br />
<a href="http://www.hon.ch/HONcode/Conduct_f.html" target="_blank" style="text-decoration:underline;">principes de la charte<br />
HONcode</a><br />
<span class="rouge10"><a href="https://www.hon.ch/HONcode/Conduct_f.html?HONConduct923446" target="_blank">&gt;&gt; v&eacute;rifier ici</a> </span></p>--></div><!-- fin left-->



<div id="middle2">
<h1>Ressources et utilitaires</h1>
<h2 class="bleu"><a name="haut" id="haut"></a>Scoring systems for ICU and surgical patients:</h2>
<h4>Thoracoscore (The Thoracic Surgery Scoring System)  </h4>
<br />

<FORM ACTION="" METHOD=POST><TABLE width="705"  align="center" cellpadding="2" cellspacing="0" bgcolor="#fff7ed" style="border:1px solid  #CCC;"><TBODY>
      <TR>
         <TD style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" >
            <span class="noir12"><B>Variables
            (</B><A HREF="#def" class="normal"><B>help</B></A><B>)
            </B>
            </span></TD>
         <TD style="border-bottom:1px dotted #969696;border-right:1px dotted #969696;" >
            <span class="noir12"><B>Values            (all
            values are mandatory)</B>
            </span></TD>
         <TD style="border-bottom:1px dotted #969696;" >
            <span class="noir12"><B>Beta</B>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Age
            (years)</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=age onChange="CalcAGE(this.form)">
              <OPTION SELECTED>
                <OPTION VALUE=0>&lt; 55
                <OPTION VALUE=".7679">55 - 65
                <OPTION VALUE="1.0073">&gt; 65
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zage VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Sex</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=sex onChange="CalcSEX(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE="0 ">Female
                <OPTION VALUE=".4505">Male
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zsex VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD NOWRAP>
            <span class="noir12"><B>ASA
            Classification</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=asa onChange="CalcASA(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE="0   ">&lt;= 2
                <OPTION VALUE=".6057">&gt;= 3
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zasa VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD NOWRAP>
            <span class="noir12"><B>Performance
            Status Classification</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=performance onChange="CalcPERFORMANCE(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE=0>&lt;= 2
                <OPTION VALUE=".689">&gt;= 3
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zperformance VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Dyspnea
            score</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=dyspnea onChange="CalcDYSPNEA(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE="0  ">&lt;= 2
                <OPTION VALUE=".9075">&gt;= 3
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zdyspnea VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Priority of
            surgery</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=priority onChange="CalcPRIORITY(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE="0   ">Elective
                <OPTION VALUE=".8443">Urgent/Emergency
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zpriority VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Procedure
            class</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=procedure onChange="CalcPROCEDURE(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE="0  ">Other
                <OPTION VALUE="1.2176">Pneumonectomy
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zprocedure VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Diagnosis
            group</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=diagnosis onChange="CalcDIAGNOSIS(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE=0>Benign
                <OPTION VALUE="1.2423">Malignant
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zdiagnosis VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD>
            <span class="noir12"><B>Comorbidity
            Score</B>
            </span></TD>
         <TD>
            <span class="noir12">
            <SELECT NAME=comorbidity onChange="CalcCOMORBIDITY(this.form)">
              <OPTION VALUE=0 SELECTED>
                <OPTION VALUE="0  ">0
                <OPTION VALUE=".7447">&lt;= 2
                <OPTION VALUE=".9065">&gt;= 3
              </SELECT>
            </span></TD>
         <TD>
            <span class="noir12">
            <INPUT TYPE=text NAME=zcomorbidity VALUE="0" SIZE=11>
            </span></TD>
      </TR>
      <TR>
         <TD COLSPAN=2>
            <CENTER>
              <span class="noir12">
              <INPUT TYPE=reset VALUE="  Clear " class="btn-rouge">
              </span>
            </CENTER>
         </TD>
         <TD>
            <span class="noir12"><B>Thoracoscore:<BR>
            </B>
            <INPUT TYPE=text NAME=zmort VALUE="0" SIZE=30><BR>
            Logit
            = -7.3737 + Sum (beta)<BR>
            Predicted death Rate <B>=<BR>
            </B>e<SUP>(Logit)</SUP> / (1 + e
            <SUP>(Logit)</SUP>)
            </span></TD>
      </TR></TBODY>
   </TABLE>
    
</FORM></CENTER>

<P class="bleu12"><B>Reference</B></P>

<UL>
   <LI class="bleu12">Falcoz P.E. et al. The
   Thoracic Surgery Scoring System (Thoracoscore): Risk model for
   in-hospital death in 15,183 patients requiring thoracic
   surgery<BR>
   J Thorac Cardiovasc Surg 2007; 133: 325-32</LI>
</UL>
<p class="gris11" align="right"><a href="../article/316/scoring-systems-for-icu-and-surgical-patients" >&lt;&lt; Back to the scores page</a></p>
<P><A NAME=def></A></P>

<p class="bleu12" align="center"><A HREF="#haut"><B>Back
toThoracoscore</B></A></p>

<P class="normal"><B><U>Definitions</U></B></P>

<P class="normal"><B>DYSPNEA ( Medical Research
Council Scale)<BR>
</B>category 0, No dyspnea<BR>
category 1, Slight degree of dyspnea ( troubled by shortness of
breath when hurrying on the level or walking up a slight hill)<BR>
category 2, Moderate degree of dyspnea (walks slower than people of
the same age on the level because of breathlessness)<BR>
category 3, Moderatly severe degree of dyspnea (has to stop because
of breathlessness when walking at own pace on the level)<BR>
category 4, Severe degree of dyspnea (stops for breath after walking
about 100 yards or after a few minutes on the level)<BR>
category 5, Very severe degree of dyspnea (too breathless to leave
the house or breathless when dressing or undressing)</P>

<P class="normal"><B>ASA Physical Status
Classification System<BR>
</B>1: A normal healthy patient<BR>
2: A patient with mild systemic disease<BR>
3: A patient with severe systemic disease<BR>
4: A patient with severe systemic disease that is a constant threat
to life<BR>
5: A moribund patient who is not expected to survive without the
operation<BR>
6: A declared brain-dead patient whose organs are being removed for
donor purposes<BR>
These definitions appear in each annual edition of the <B>ASA
Relative Value Guide. </B>There is no additional information that
will help you further define these categories.</P>

<P class="normal"><B>World Health Organization(
WHO) Zubrod Performance Status Scale<BR>
</B>0: Normal activity<BR>
1: Symptoms, but nearly fully ambulatory<BR>
2: Some bed time, but needs to be in bed less than 50% of normal
daytime<BR>
3: Need to be in bed greater than 50% of normal daytime<BR>
4: Unable to get out of bed</P>

<P class="normal"><B>Comorbidity<BR>
</B>In development data set, 94.6% of the comorbidity was related to
10 major diagnoses:<BR>
Smoking addiction (27.1%), history of cancer (11.8%), COPD (11.5%),
arterial hypertension (10.5%), heart disease (10.4%), diabete
mellitus (7.6%), peripheral vascular disease (6.1%) Obesity (4.9%)
and alcoholism ( 4.7%). No other diagnoses, with the exception of
hyperlipemia ( 2.9%) were mentioned for more than 1% of
patients.</P>

<p class="bleu12" align="center"><A HREF="#haut"><B>Back
toThoracoscore</B></A></p>
<p class="gris11" align="right"><a href="../article/316/scoring-systems-for-icu-and-surgical-patients" >&lt;&lt; Back to the scores page</a></p>
</div>
<!-- fin middle-->


<div style="clear:both"></div>

<div class="arial10" id="bottom">SFAR - Société Française d’Anesthésie et de Réanimation - 74 Rue Raynouard, 75016 PARIS  - Tél. : 01 45 25 82 25 Télécopie : 01 40 50 35 22<br />
  <a href="../accueil/mentions-legales.php">Mentions légales</a> - <a href="../accueil/charte.php">Charte éditoriale</a> - <a href="../contact/contact.php">Contactez-nous</a> </div><!--fin bottom-->


</div><!-- fin div page-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12337875-1");
pageTracker._trackPageview();
} catch(err) {}</script><script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-12337875-1");
pageTracker._trackPageview();
} catch(err) {}</script></body>
</html>
