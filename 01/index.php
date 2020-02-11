<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>1. Funcions strlen(), str_world_count(), strrev(), strpos(), str_replace() </title>
  <meta name="keywords" content="strlen(), str_world_count(), strrev(), strpos(), str_replace(), longitud, cadena, subcadena, invertir cadena, posició subcadena, substituir">
  <link rel="stylesheet" href="../style.css">

</head>
<body>
  <h1>1. Funcions strlen(), str_world_count(), strrev(), strpos(), str_replace()</h1>
  <p>Veurem les funcions següents:</p>
  <ul>
   <li><strong class="resalt">strlen</strong> per mesurar el número de caràcters d'una cadena.</li>
   <li><strong class="resalt">str_word_count</strong> per comptar les paraules que hi ha a una cadena.</li>
   <li><strong class="resalt">strrev</strong> per invertir l'ordre dels caràcters d'una cadena.</li>
   <li><strong class="resalt">strpos</strong> per localitzar la posició de la primera aparició d'una subcadena dins d'una cadena.</li>
   <li><strong class="resalt">str_replace</strong> per substituir una subcadena per una altra dins d'una cadena.</li>
  </ul>
  <h2><span class="resalt">strlen(<em>string</em>):</span> Longitud d'una cadena</h2>
    <p>Ens diu la longitud de caràcters que té una cadena.</p>
    <pre>
      echo strlen("Cadena de text"); //Resultat: 14</pre>
    <p><strong>Resultat:</strong>:</p>
    <p><?php echo "La cadena 'Cadena de text' té " . strlen("Cadena de text") . "caràcters"; ?></p>
    <hr>

  <h2><span class="resalt">str_word_count(<em>string</em>)</span>: Comptador de paraules</h2>
  <p>Ens diu el número de paraules que té una cadena.</p>
  <pre>
    echo str_word_count("La cadena és aquesta"); //Hi ha 4 paraules</pre>
  <p><strong>Resultat</strong>:</p>
  <p><?php echo str_word_count("La cadena és aquesta"); ?></p>
  <hr>

  <h2><span class="resalt">strrev(<em>string</em>)</span>: Escriu una cadena a l'inrevés</h2>
  <pre>echo strrev("Permafrost");</pre>
  <p><strong>Resultat</strong>:</p>
  <p><?php echo strrev("Permafrost"); ?></p>
  <hr>

  <h2><span class="resalt">strpos(<em>string</em>,<em>string a cercar</em>)</span>: Per cercar subtexts dins d'una cadena</h2>
  <p>Cerca un text dins d'una cadena i dona la posició del primer caràcter que troba de la primera coincidència. Si no troba res no dona res.</p>
  <pre>echo strpos("Alea jacta est", "jacta");//Donarà 5</pre>
  <p><strong>Resultat</strong>:</p>
  <p><?php echo strpos("Alea jacta est", "jacta"); ?></p>
  <hr>

  <h2><span class="resalt">str_replace("substringA","replace_SubsA","Cadena on s'ha de fer la substitució")</span>: Canvia una subcadena per una altra</h2>
  <pre>echo str_replace("pingo", "campamentos", "Me'n vaig de pingo");</pre>
  <p><strong>Resultat</strong>:</p>
  <p><?php echo str_replace("pingo", "campamentos", "Me'n vaig de pingo");  ?></p>
</body>
</html>
