<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>4. Funcions per cadenes. I-S.</title>
  <meta name="keywords" content="">
  <link rel="stylesheet" href="../style.css">

</head>
<body>
  <h1>4. Funcions per cadenes. I-S.</h1>
  <p>Estic seguint la llista de funcions de W3SCHOOLS que es troba al següent <a href="https://www.w3schools.com/php/php_ref_string.asp">enllaç</a>. Poso les que em semblen més interessants.</p>

  <p>Veurem les funcions següents:</p>
  <ul>
   <li><strong class="resalt"></strong></li>
  </ul>

    <hr>


    <h2><span class="resalt">Implode([<em>separator</em>,]<em>array</em>)</span>:<br> Passa una matriu a cadena</h2>
    <p>A partir d'una matriu i especificant un separador ens retorna una cadena. Si no especifiquem separador serà com posar <em>""</em></p>
    <p><strong>Exemple</strong>:</p>
    <pre>$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr)."&lt;br&gt;";
echo implode("-",$arr)."&lt;br&gt;";
echo implode($arr);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ", $arr) . "<br>";
echo implode("-", $arr) . "<br>";
echo implode($arr); ?></p>
    <hr>



    <h2><span class="resalt">join([<em>separator</em>,]<em>array</em>)</span>:<br> Alias de Implode</h2>
    <p>Fa el mateix i funciona de la mateixa manera que implode.</p>
    <hr>



    <h2><span class="resalt">lcfirst(<em>STRING</em>)</span>:<br> Posa el primer caràcter d'una cadena en minúscula</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo lcfirst("Hello world!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo lcfirst("Hello world!"); ?></p>
    <hr>



    <h2><span class="resalt">ltrim(<em>string</em>,<em>charlist</em>)</span>:<br></h2>
    <p><strong>Exemple</strong>:</p>
    <pre>$str = "    Hello World!";
echo "Without ltrim: " . $str;
echo "<br>";
echo "With ltrim: " . ltrim($str);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "    Hello World!";
echo "Without ltrim: " . $str;
echo "<br>";
echo "With ltrim: " . ltrim($str); ?></p>
    <hr>



    <h2><span class="resalt">nl2br(<em>string</em>,<em>xhtml</em>)</span>:<br> Afegeix salts de línia quan es troba \n.</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo nl2br("One line.\nAnother line.",false);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo nl2br("One line.\nAnother line.", false); ?></p>
    <hr>




    <h2><span class="resalt">print(<em>string</em>)</span>:<br> Renderitza una o més cadenes</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>$str1="Hello world!";
$str2="What a nice day!";
print $str1 . " " . $str2;</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str1="Hello world!";
$str2="What a nice day!";
print $str1 . " " . $str2; ?></p>
    <hr>

    <h2><span class="resalt">rtrim(<em>string</em>, <em>charlist</em>)</span>:<br> Esborra per l'extrem dret espais en blanc o altre caràcters predefinits.</h2>
    <p><strong>Exemple 1</strong>:</p>
    <pre>$str = "Hello World!";
echo $str . "&lt;br&gt;";
echo rtrim($str,"World!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><span class="nota"><?php $str = "Hello World!";
echo $str . "<br>";
echo rtrim($str, "World!"); ?></span></p>
    <hr>
    <p><strong>Exemple 2</strong>:</p>
    <pre>$str = "Hello World!  \n ";
echo $str . "<br>";
echo rtrim($str); </pre>
    <p><strong>Resultat</strong>:</p>
    <p><span class="nota"><?php $str = "Hello World!   \n  ";
echo rtrim($str); ?></span></p>
    <hr>

    <h2><span class="resalt">str_ireplace(<em>find</em>,<em>replace</em>,<em>string</em>,<em>count</em>)</span>:<br>Replaces some characters in a string (case-insensitive)
</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo str_ireplace("WORLD","Peter","Hello world!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo str_ireplace("WORLD", "Peter", "Hello world!"); ?></p>
    <hr>

    <h2><span class="resalt">str_repeat(<em>string</em>,<em>repeat</em>)
</span>:<br> Repeteix una cadena </h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo str_repeat("Wow",13);
</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo str_repeat('wow', 13);
 ?></p>
    <hr>

    <h2><span class="resalt">str_shuffle(<em>string</em>)</span>:<br> escriu els caràcters d'una cadena de forma aleatòria</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo str_shuffle("Hello World");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo str_shuffle("Hello World"); ?></p>
    <hr>

    <h2><span class="resalt">str_split(<em>string</em>[,<em>length</em>])</span>: divideix una cadena en una matriu<br></h2>
    <p>Podem definir cada quants caràcters dividim la matriu si especifiquem la longitud, que és opcional.</p>
    <p><strong>Exemple</strong>:</p>
    <pre>print_r(str_split("Hello",2));</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php print_r(str_split("Hello", 2)); ?></p>
    <hr>

    <h2><span class="resalt">strchr(<em>string</em>,<em>search</em>[,<em>before_search</em>]);
</span>:<br> Cerca la primera aparició de la cadena de search.</h2>
<p>El paràmetre <em>before_search</em> és opcional i boolea. Per defecte és <strong>true</strong>. Però si el posem en <strong>true</strong> llavors ens volcarà el que hi hagi abans, en la cadena.</p>
    <p><strong>Exemple 1</strong>:</p>
    <pre>echo strchr("Hello world!","world",true); </pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strchr("Hello world!", "world", true); ?></p>
    <hr>
    <p><strong>Exemple 2</strong>:</p>
    <pre>echo strchr("Hello world!","world"); </pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strchr("Hello world!", "world"); ?></p>
    <hr>

    <h2><span class="resalt">strcspn(<em>string</em>,<em>search</em>[,<em>start</em>, <em>length</em>])</span>: <br> Torna el número de caràcters que hi ha abans del caràcter que especifiquem.</h2>
    <p>Opcionalment també podem definir <strong>start</strong> per indicar des d'on a la cadena volem que comenci, i <strong>length</strong> per especificar fins a on volem que busqui de la cadena.</p>
    <p><strong>Exemple</strong>:</p>
    <pre> echo strcspn("Hello world!", "w", 0, 6);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strcspn("Hello world!", "w", 0, 6); ?></p>
    <hr>

    <h2><span class="resalt">strip_tags(<em>string</em>)</span>:<br> Esborra les etiquetes d'HTML</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strip_tags("Hello <b>world!</b>");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strip_tags("Hello <b>world!</b>"); ?></p>
    <hr>

    <h2><span class="resalt">stripcslashes("Hello \World!")</span>:<br> Esborra els backslashes</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo stripcslashes("Hello \World!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo stripcslashes("Hello \World!"); ?></p>
    <hr>

    <h2><span class="resalt">stripslashes("Who\'s Peter Griffin?")</span>:<br> Esborra els backslashes</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo stripslashes("Who\'s Peter Griffin?");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo stripslashes("Who\'s Peter Griffin?"); ?></p>
    <hr>

    <h2><span class="resalt">stripos(<em>string</em>,<em>find</em>[,start])</span>:<br> Ens diu la primera aparició de la subcadena find de forma <strong><em>insensitive</em></strong></h2>
    <p>Opcionalment podem indicar des d'on volem que comenci a comptar a la cadena string.</p>
    <p><strong>Exemple</strong>:</p>
    <pre>echo stripos("I love php, I love php too!","PHP");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo stripos("I love php, I love php too!", "PHP");  ?></p>
    <hr>

    <h2><span class="resalt">stristr(<em>string</em>,<em>search</em>[,<em>before_search</em>]);</span>:<br> Torna la subcadena des del primer caràcter la cerca(search) fins el final</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>stristr("Hello world!","WORLD");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php stristr("Hello world!", "WORLD"); ?></p>
    <hr>

    <h2><span class="resalt">strpbrk(<em>string</em>,<em>charlist</em>)</span>:<br> Ens torna la resta de la subcadena a partir del primer caràcter que trobi de la charlist</h2>
    <p>Aquesta funció és <em>case-sensitive</em></p>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strpbrk("Hello world!","oe");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strpbrk("Hello world!", "oe"); ?></p>
    <hr>

    <h2><span class="resalt">strrchr(<em>string</em>,<em>char</em>)</span>:<br> Torna tots els caràcters fins el final a partir de la primera coincidència</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strrchr("Hello world! What a beautiful day!", "What");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strrchr("Hello world! What a beautiful day!", "What");  ?></p>
    <hr>

    <h2><span class="resalt">strripos(<em>string</em>,<em>find</em>,<em>start</em>)</span>:<br>Torna la darrera posició de la cadena find</h2>
    <p>És case-insensitive.</p>
    <P>Opcionalment podem especificar des d'on volem que comenci a comptar.</P>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strripos("I love php, I love php too!","PHP");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strripos("I love php, I love php too!", "PHP"); ?></p>
    <hr>

    <h2><span class="resalt">strrpos(<em>string</em>,<em>find</em>,<em>start</em>)</span>:<br>Torna la darrera posició de la cadena find</h2>
    <p>És case-sensitive.</p>
    <P>Opcionalment podem especificar des d'on volem que comenci a comptar.</P>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strripos("I love php, I love PHP too!","php");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strripos("I love php, I love php too!", "php"); ?></p>
    <hr>

    <h2><span class="resalt">strspn(string,charlist,start,length)</span>:<br> Torna el número de caràcters trobats a la cadena que contenen només caràcters de la charlist.</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strspn("abcdefand","abc");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strspn("abcdefand", "abc"); ?></p>
    <hr>

    <h2><span class="resalt">strstr(string,search[,before_search])</span>:<br> Busca la primera coincidència entre la cadena i search i torna la resta que queda de la cadena fins el final.</h2>
    <p>Si definim before_search com a true tornarà el que hi ha abans</p>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strstr("Hello world!","world");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strstr("Hello world!", "world");
 ?></p>
    <hr>

    <h2><span class="resalt">strtok(string,split)</span>:<br>Trenca una cadena en trosos més petits "tòkens" a partir del caràcter <em>split</em> que diguem.</h2>
    <p></p>
    <p><strong>Exemple</strong>:</p>
    <pre>$string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false)
{
echo "$token<br>";
$token = strtok(" ");
}</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $string = "Hello world. Beautiful day today.";
$token = strtok($string, " ");

while ($token !== false) {
    echo "$token<br>";
    $token = strtok(" ");
} ?></p>
    <hr>

    <h2><span class="resalt">strtolower(<em>string</em>)</span>:<br>Posa la cadena en minúscules</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strtolower("Hello WORLD.");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strtolower("Hello WORLD."); ?></p>
    <hr>

    <h2><span class="resalt">strtoupper(<em>string</em>)</span>:<br>Posa tots els caracters de la cadena en majúscules</h2>
    <p><strong>Exemple</strong>:</p>
    <pre>echo strtoupper("Hello WORLD!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strtoupper("Hello WORLD!");
 ?></p>
    <hr>

    <h2><span class="resalt">strtr(string,from,to) o strtr(string,array)
 </span>:<br> Canvia certs caràcters <em>from</em> a uns altres <em>to</em> a una cadena</h2>
    <p><strong>Exemple 1</strong>:</p>
    <pre>echo strtr("Hilla Warld","ia","eo");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo strtr("Hilla Warld", "ia", "eo"); ?></p>
    <hr>
    <p><strong>Exemple 2</strong>:</p>
    <pre>$arr = array("Hello" => "Hi", "world" => "earth");
echo strtr("Hello world",$arr);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $arr = array("Hello" => "Hi", "world" => "earth");
echo strtr("Hello world", $arr); ?></p>
    <hr>

    <h2><span class="resalt">substr(string,start[,length])</span>:<br> Torna una part d'una cadena.</h2>
    <p>Ho fa des de la posició <em>start</em>. Si posem start en negatiu començarà des de darrera.</p>
    <p>I si definim <em>length</em> n'extreurà tants caràcters com indiquem, tenint en compte que si posem la length en negatiu esborrarà tants com hi indiquem.</p>
    <p><strong>Exemple</strong>:</p>
    <pre>echo substr("Hello world",0,10)."&lt;br&gt;";
      echo substr("Hello world",0,-8)."&lt;br&gt;";
    </pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo substr("Hello world", 0, 10)."<br>";
      echo substr("Hello world", 0, -8)."<br>"; ?></p>
    <hr>

    <h2><span class="resalt">substr_count(string,find,start, length)</span>:<br> Compta el número de vegades que apareix una subcadena <em>find</em> dins d'una <em>string</em></h2>
    <p>Si posem <em>start</em> en negatiu començarà des del final.</p>
    <p><strong>Exemple</strong>:</p>
    <pre>substr_count("Hello world. The world is nice","world");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php substr_count("Hello world. The world is nice", "world"); ?></p>
    <hr>

    <h2><span class="resalt">substr_replace(string,replacement,start[,length])</span>:<br> substitueix un tros d'una cadena per una subcadena (<em>replacement</em>)</h2>
    <p>Ho farà des del caràcter que hi indiquem <em>start</em>, que si és negatiu ho farà des del final i si és 0, des del primer caràcter.</p>
    <p><em>length</em> és opcional i si hi indiquem:</p>
    <ul>
      <li>Número positiu: longitud de la cadena a ser substituïda.</li>
      <li>Número negatiu: quants caracters ha de deixar al final després d'haver substituït.</li>
      <li>0: És l'equivalent a fer INSERT amb el teclat</li>
    </ul>
    <p><strong>Exemple 1</strong>:</p>
    <pre>echo substr_replace("Hello world","earth",6) . "&lt;br&gt;";</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo substr_replace("Hello world", "earth", 6) . "<br>"; ?></p>
    <hr>
    <p><strong>Exemple 2</strong>:</p>
    <pre>echo substr_replace("Hello world","earth",-5) . "&lt;br&gt;";</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo substr_replace("Hello world", "earth", -5) . "<br>"; ?></p>
    <hr>
    <p><strong>Exemple 3</strong>:</p>
    <pre>echo substr_replace("Hello world","earth",5,3) . "&lt;br&gt;";</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo substr_replace("Hello world", "earth", 5, 3) . "<br>"; ?></p>
    <hr>
    <p><strong>Exemple 3</strong>:</p>
    <pre>echo substr_replace("Hello world","earth",5,-3) . "&lt;br&gt;";</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo substr_replace("Hello world", "earth", 5, -3) . "<br>"; ?></p>
    <hr>

    <h2><span class="resalt">trim(string[,charlist])</span>:<br> Esborra els caràcters que posem al paràmetre charlist</h2>
    <p>Si no especifiquem res a <em>charlist</em> llavors eliminarà per defecte el següent:</p>
    <ul>
      <li>"\0" - NULL</li>
      <li>"\t" - tab</li>
      <li>"\n" - new line</li>
      <li>"\x0B" - vertical tab</li>
      <li>"\r" - carriage return</li>
      <li>" " - ordinary white space</li>
    </ul>
    <p><strong>Exemple</strong>:</p>
    <pre>$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Hello World!";
echo $str . "<br>";
echo trim($str, "Hed!"); ?></p>
    <hr>

    <h2><span class="resalt">ucfirst(string)</span>:<br> Converteix primer caràcter de la cadena a majúscules.</h2>
    <p></p>
    <p><strong>Exemple</strong>:</p>
    <pre>echo ucfirst("hello world!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo ucfirst("hello world!"); ?></p>
    <hr>

    <h2><span class="resalt">wordwrap(string[,width,break,cut])</span>:<br> Desglosa la cadena en diverses línies.</h2>
    <p></p>
    <p><strong>Exemple</strong>:</p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt">strtolower()</span>:<br></h2>
    <p><strong><em>string</em></strong>: Obligatori. Especifica la cadena per desglossar-se en línies</p>
<p><strong><em>width</em></strong>: Opcional. Especifica l'amplada màxima de la línia. El valor per defecte és 75</p>
<p><strong><em>break</em></strong>: Opcional. Especifica els caràcters a utilitzar com a pausa. El valor per defecte és "\ n". (podríem posar "&lt;br&gt;")</p>
<p><strong><em>cut</em></strong>: Opcional. Especifica si s'han d'ajustar paraules superiors a l'amplada especificada:</p>
<ul><li>FALS: per defecte. Sense embolic</li>
<li>VERITAT: embolcall</li></ul>
    <p><strong>Exemple</strong>:</p>
    <pre>$str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str,15,"&lt;br&gt;\n",TRUE);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "An example of a long word is: Supercalifragulistic";
echo wordwrap($str, 15, "<br>\n", true); ?></p>
    <hr>
 


</body>
</html>
