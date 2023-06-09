<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php 
// String length => strlen() :
echo strlen("Bonjour à tous").'<br>'; // les caractères accentués sont compté 2 .
// fonction comptant le nombre de mot dans une phrase :
echo str_word_count("Bonjour à tous").'<br/>';
echo str_word_count("salut l'ami").'<br/>';
echo str_word_count("Bonjour a tous").'<br/>';

//la répitition avec str_repeat("valeur a repeter" , "nbre de repitition":)
echo str_repeat('bonjour <br> ', 7);
// pour remplacer avec str_replace( prend 4 parametres):
$texte ="Bonjour, comment allez-vous?";// phrase a utiliser pour le remplacement
echo str_replace("Bonjour", "Bonsoir", $texte, $i). "<br/>";// bonsoir replace Bonjour:
echo "nombre de remplacement : " .$i ."<br>";
// str_replace(sensible a la casse) # str_ireplace(inssensible a la casse):
// les fonctions "strtolower()" et "strtoupper()"

$minmaj ="BonJouR, VouS allEZ BieN ?";
echo strtolower($minmaj) . "<br>";
echo strtoupper($minmaj). "<br>";

// fonction de position "strpos()":

echo strpos("Bonjour" , "o").  "<br>" ;
echo strpos("Bonjour à tous" , "tous").  "<br>" ;
echo strpos("Bonjour à tous" , "s").  "<br>" ;
echo strpos("Bonjour à tous" , "e").  "<br>" ;// affiche rien !!

// la fonction " htmlspecialechars() ": transforme les chaines de caractèrtes en véritable html; EXAMPLE /
  $str = 'j\'aime le <strong>"PHP"</strong>';

echo htmlspecialchars($str);
echo htmlspecialchars_decode($str) ."<br>";// permet de transformer le html en string.

// La fonction " nl2br " qui force le retour à la ligne => "new line to break" :

echo nl2br("Bonjour !
    Comment ça va ?"). "<br><br><br>";

// La fonction " explode() " => transforme ch.caractere en un tableau "array " :
$ch2tb = "Bonjour à tous ";
print_r(explode(" " , $ch2tb)). "<br>";
echo "<br><br>";// La fonction "str_split() " permet de transformer elle aussi un string en a array ,elle prend deux argument ("string a transf" , nbr de caractere a metter ds chaque case) , EXAMPLE:
 print_r(str_split("hello world !", 2)) ."<br>";
echo "<br><br>";
// La fonction " implode() "=> trans ch.cart en tableau : EXAMPLE :
$tb2ch = array('Bonjour', 'à', 'tous');
echo implode(" /separateur/", $tb2ch)."<br>";

// La fonction 







  ?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>