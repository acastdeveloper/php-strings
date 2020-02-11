<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>3. Funcions per cadenes. E </title>
  <meta name="keywords" content="">
  <link rel="stylesheet" href="../style.css">

</head>
<body>
  <h1>2. Funcions per cadenes. E</h1>
  <p>Estic seguint la llista de funcions de W3SCHOOLS que es troba al següent <a href="https://www.w3schools.com/php/php_ref_string.asp">enllaç</a>. Poso les que em semblen més interessants.</p>

  <p>Veurem les funcions següents:</p>
  <ul>
   <li><strong class="resalt"></strong></li>
  </ul>

    <hr>

    <h2><span class="resalt">echo(<em>strings</em>)</span>: <br> escriu/renderitza les cadenes que li passem</h2>
    <p><span class="nota"><strong>Nota</strong>: realment no és una funció, per la qual cosa no és obligatori utilitzar parèntesi amb ella. És més ràpida que la funció print(). </span></p>
    <p><strong>Exemple</strong>:</p>
    <pre>$str = "Hello world!";
echo $str;</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = "Hello world!";
echo $str; ?></p>
    <hr>

    <h2><span class="resalt">explode(<em>separator</em>, <em>string</em>[, <em>limit</em>])</span>: Converteix una cadena en matriu <br></h2>
    <p>Ho fa trencant la cadena amb el separador que hi indiquem. el paràmetre opcional <em>limit</em> admet com a valors:</p>
    <ul>
      <li><strong>Valors &gt;0</strong>: Retorna una matriu amb el màxim número d'elements especificats.</li>
      <li><strong>Valors &lt;0</strong>: Retorna una matriu sense els darrer número d'elements especificats.</li>
      <li><strong>Valors=0</strong>: Retorna una matriu amb 1 element. És a dir, que és una forma de convertir una cadena en una matriu d'un sol element.</li>
    </ul>
    <p><strong>Exemple</strong>:</p>
    <pre>$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));

// positive limit
print_r(explode(',',$str,2));

// negative limit
print_r(explode(',',$str,-1));</pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php $str = 'one,two,three,four';

// zero limit
print_r(explode(',', $str, 0));

// positive limit
print_r(explode(',', $str, 2));

// negative limit
print_r(explode(',', $str, -1)); ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>

    <h2><span class="resalt"></span>:<br></h2>
    <p></p>
    <pre></pre>
    <p><strong>Resultat</strong>:</p>
    <p><?php  ?></p>
    <hr>


</body>
</html>
