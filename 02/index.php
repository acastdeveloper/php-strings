<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>2. Funcions per cadenes. A-C </title>
  <meta name="keywords" content="">
  <link rel="stylesheet" href="../style.css">

</head>
<body>
  <h1>2. Funcions per cadenes. A-C</h1>
  <p>Estic seguint la llista de funcions de W3SCHOOLS que es troba al següent <a href="https://www.w3schools.com/php/php_ref_string.asp">enllaç</a>. Poso les que em semblen més interessants.</p>

  <p>Veurem les funcions següents:</p>
  <ul>
   <li><strong class="resalt"></strong></li>
  </ul>

  <h2><span class="resalt">addcslashes(<em>string</em>,<em>caracters</em>)</span>:<br> Col·loca backslashes davant determinats caràcters</h2>
    <p>Col·loca un backslash davant dels caracters que passem com a segon paràmetre.</p>
    <pre>
      $str=addcslashes("Hermenèutica aristotèlica", "risa");
      echo $str;</pre>
    <p><strong>Resultat:</strong>:</p>
    <p><?php
    $str=addcslashes("Hermenèutica aplicada a la formació del criteri personal vers la minima expressió de racionalitat buida", "risa");
    echo $str;
     ?></p>
    <hr>

    <h2><span class="resalt">addslashes(<em>string</em>)</span>:<br> Col·loca backslashes davant de doble cometa d'un string.</h2>
    <pre>$str = addslashes('Què significa "carmanyola"?');
echo($str);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = addslashes('Què significa "carmanyola"?');
echo($str); ?></p>
    <hr>

    <h2><span class="resalt">bin2hex(<em>string</em>)</span>:<br> Passa un string a caràcters hexadecimals</h2>
    <pre>$str = bin2hex("php");
echo($str);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = bin2hex("php");
echo($str);  ?></p>
    <hr>

    <h2><span class="resalt">chop(<em>string</em>,<em>charlist</em>)</span>:<br> Esborra espais en blanc i altres caràcters de l'extrem dret d'una cadena.</h2>
    <p>La traducció de <strong>chop</strong> al català és: <em>tallar, picar</em>.</p>
    <p><strong>Exemple 1</strong></p>
    <pre>$str = "Hello World!";
echo $str . "&lt;br&gt;";
echo chop($str,"World!");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Hello World!";
echo $str . "<br>";
echo chop($str, "World!"); ?></p>
    <hr>
    <p>Si no especifiquem un <em>charlist</em> per defecte esborra els següents caràcters:</p>
    <ul>
      <li>"\0" - NULL</li>
      <li>"\t" - tab</li>
      <li>"\n" - new line</li>
      <li>"\x0B" - vertical tab</li>
      <li>"\r" - carriage return</li>
      <li>" " - ordinary white space</li>

    </ul>

    <p><strong>Exemple 2</strong>. Volem eliminar les noves línies que hi hagi a l'extrem dret d'una cadena</p>
    <pre>$str = "Hello World!\n\n";
echo $str;
echo chop($str);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Hello World!\n\n";
echo $str;
echo chop($str); ?></p>
    <hr>


    <h2><span class="resalt">chr(<em>valor ASCII</em>)</span>:<br> Ens torna un caràcter a partir del seu valor ASCII</h2>
    <pre>echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value?></p>
    <hr>


    <h2><span class="resalt">chunk_split(<em>string</em>[,<em>length</em>,<em>end</em>])</span>:<br> </h2>
    <p>La traducció de <strong>chunk</strong> al català és <em>tros.</em></p>
    <p><strong>Exemple 1</strong>:</p>
    <pre>$str = "Sistema nervioso parasimpático";
echo chunk_split($str, 3, "_/|º^º|\_");</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Sistema nervioso parasimpático";
echo chunk_split($str, 3, "_/|º^º|\_"); ?></p>
<p><strong>Explicació</strong>:</p>
  <p>A partir de la cadena $str cada 3 caràcters intercala la subcadena "_/|º^º|\_"</p>
    <hr>
    <p><strong>Exemple 2</strong>: sense indicar subcadena a intercalar només separa amb un espai.</p>
    <pre>$str = "Sistema nervioso parasimpático";
echo chunk_split($str, 3);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Sistema nervioso parasimpático";
echo chunk_split($str, 3); ?></p>
    <hr>






    <h2><span class="resalt">count_chars(<em>string</em>,<em>mode</em>)</span>:<br> Torna els diferents caràcters que hi a l'string que li passem en el mode que especifiquem.</h2>
    <p><strong>Modes:</strong></p>
    <ul>
      <li><strong>0</strong>: una matriu amb el valor ASCII com a clau i el nombre d’ocurrències com a valor
</li>
      <li><strong>1</strong>: una matriu amb el valor ASCII com a clau i el nombre d’ocurrències com a valor, només enumera les ocurrències majors a zero</li>
      <li><strong>2</strong>: una matriu amb el valor ASCII com a clau i el nombre d’ocurrències com a valor, només es llisten les ocurrències iguals a zero</li>
      <li><strong>3</strong>: una cadena amb tots els diferents caràcters utilitzats</li>
      <li><strong>4</strong>: una cadena amb tots els caràcters no utilitzats</li>
    </ul>
    <p><strong>Exemple</strong>:</p>
    <pre>$str = "Abaratar";
echo count_chars($str,4);</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Abaratar";
echo count_chars($str, 3); ?></p>
    <hr>
 

</body>
</html>
