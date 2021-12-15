<?php

    //Desarrollo del ejercicio numero 10 de la guia de PHP

    //1. Manejo de impresion por pantalla (echo y print), (var_dump y print_r), diferencias?

    //R= La diferencia principal entre el comando echo y print es que,
    //el comando echo nos deja imprimir mas de una cadena de texto y el comando print solo una cadena

    echo "Primera cadena,", " segunda cadena,", " tercera cadena.";
    echo "<br>";

    //Imprime las 3 cadenas correctamente

    //Ahora vamos a intentar hacer lo mismo con print
    /*
    print "Primera cadena,", " segunda cadena,", " tercera cadena.";
    */
    
    //Nos marca error, ya que solo admite una cadena  la vez, para que si imprima
    //lo que debemos hacer es colocar la cadena una por una


    print "Primera cadena";
    echo "<br>";
    print "segunda cadena";
    echo "<br>";
    print "tercera cadena";
    echo "<br>";


    //Ahora veremos la diferencia entre var_dump y print_r
    //Empezamos con var_dump

    $cadena = [1, 2, 3, 4, 5];
    var_dump($cadena);
    echo "<br>";

    //Con el comando var_dump, lo que vemos es que nos muestra informacion
    //extensa sobre lo que hay dentro de la variable que llamamos, nos muestra 
    //que valores tiene, cuantos digitos tiene, y nos muestra el nombre del valor de la variable,
    //en este caso imprime "array".

    //En el caso de print_r, podriamos decir que nos muestra informacion mas resumida
    //de la variable que llamamos, en este caso no especifica los valores de los digitos que tiene la array.

    $cadena = [1, 2, 3, 4, 5];
    print_r($cadena);
    echo "<br>";

    //-------------------------------------------------------------------------------------------------------------------------

    //2. Declaracion de variables, constantes, fuerte tipado y debil tipado, sentencia declare.

    //Para declarar una variable en PHP usamos el simbolo $ seguido del nombre de la variable.
    //El nombre de la variable es sensible a minusculas y mayusculas.

    $ejemplo = "Ejemplo";
    echo "$ejemplo <br>";

    //Ahora veremos las constantes, estas nos permiten almacenar valores, aunque a diferencia de una variable,
    //esta se define de una forma diferente.

    define("Saludo", "Hola que tal?");
    echo Saludo;
    echo "<br>";

    //Para imprimir la constante no se necesita el signo de $, con eso ya queda definida nuestra constante

    //b) El tipado debil y fuerte
    //En el tipado debil, la mayoria de veces es en donde no indicamos el tipo de variable al declararla.
    //En esta, podemos asignar, por ejemplo, un valor entero a una variable que antes tenia una cadena
    //Tambien podemos operar aritmeticamente con variables de distintos tipos, por ejemplo, sumar "x" + 5.
    //En un lenguaje de fuerte tipado daria error pero en JavaScript o PHP no pasa nada.


    //- En el tipado fuerte es en donde indicamos el tipo de dato al declarar la variable. Este tipo no puede ser cambiado
    //Y no podemos operar entre distintos tipos.

    //-------------------------------------------------------------------------------------------------------------------------


    //3. Tipos de datos bool, int, string, float, NaN, null, object, array, iterables, conversion de datos.
    
    //Booleanos, es el tipo mas simple. Un boolean expresa un valor que indica verdad, puede ser true(verdadero) o false(falso)
    //Si es verdadero imprimira 1, si es falso no imprimira nada, esto aplica para la impresion binaria, o sea con echo.


    $bool = false;
    echo $bool;
    echo "<br>";
    $bool = true;
    echo $bool;
    echo "<br>";

    //Si imprimimos con var_dump, nos mostrara el valor como true o false

    $bool = true;
    var_dump($bool);
    echo "<br>";
    $bool = false;
    var_dump($bool);
    echo "<br>";

    //b) int se refiere a Integer, lo cuales son los numeros enteros

    $a = 123456;
    echo $a;
    echo "<br>";

    //c) string, se refiere a las cadenas de caracteres, en donde cada caracter es lo mismo que un byte.
    //Esto quiere decir que PHP solo admite un conjunto de 256 caracteres.
    //Se puede definir una cadena sencilla con comillas simples

    echo 'Una cadena normal';
    echo "<br>";

    //Tambien se puede con comillado doble, con este se expanden los nombres de las variables.

    echo "Otra forma de definir una cadena";
    echo "<br>";

   //Otra forma es con heredoc, este es parecido a la definicion de comillas dobles pero sin las comillas dobles
   //Este inicia con <<<
   
   /*
   $a = <<<eof
   Ejempo de una cadena,
   expandida en varias lineas, 
   empleando el comando heredoc
   eof;

   echo $a;
    

    //Un ejemplo de heredoc con comillas dobles 

    
    echo <<<"FOOBAR"
    Hola mundo
    FOOBAR;

    //Nowdoc es para las comillas simples lo mismo que heredoc es para las dobles

    $b = <<<'eot'
    Ejempo de una cadena,
    expandida en varias lineas, 
    empleando el comando heredoc
    eot;
    */

    //d) Este valor trabaja con numeros decimales, o con numeros muy grandes.
    //Para determinar si el valor que estamos usando es flotante utilizamos el comando
    //is_float o is_double
    
    is_float($a = 14.501);
    echo $a;
    echo "<br>";

    //e) NaN, que significa Not a Number o no numerico, pero no comprueba si un valor es numerico o no.
    //Este valor se usa para los resultados de operaciones matematicas que no son posibles en matematicas
    //Por ejemplo, log(-1) sera NaN

    $log = log(-1);
    echo $log;
    echo "<br>";

    //o tambien

    $acos = acos(5);
    echo $acos;
    echo "<br>";

    //Para verificar si el valor devuelto es NaN se usa la funcion is_nan()

    //f) null, este valor representa una variable sn valor, este es el unico valor posible del tipo null
    //Una variable se considera null si se le ha asignado la constante null, no se le ha asignado valor todavia
    // o si se ha destruido con unset().

    $var = NULL;
    var_dump($var);
    echo "<br>";

    //g) object, para crear un nuevo objeto utilizamos la sentencia new para instanciar una clase:

    class foo
    {
        function hacer_algo()
        {
            echo "Haciendo algo";
        }
    }
    $bar = new foo;
    $bar -> hacer_algo();
    echo "<br>";

    //h) arrays, sirve para crear una array
    //Puede tener valores numericos
    //Se imprimen con var_dump o con print_r
    //Las posiciones de las arrays SIEMPRE inician desde cero 0.

    $array = [1 , 2, 3, 4, 5];
    print_r($array);
    echo "<br>";

    //Tambien puede tener strings

    $array2 = ['Javier', 'Andres', 'Sanchez', 'Molina'];
    var_dump($array2);
    echo "<br>";

    //i) iterable, es un seudotipo que acepta cualquier array u objeto
    //que implemente la interfaz traversable. Estos 2 tipos se recorren en foreach


    //Conversion de datos
    //Conversion Explicita, esta conversion se realiza mediante type casting

    $numero = 5;

    //Ahora la convertimos en boolean
    $bool = (boolean) $numero;
    //Aqui se mostrara boolean
    echo gettype($bool);
    echo "<br>";

    //Para que la variable en si cambie de tipo esta la funcion settype()

    //Esta variable es de tipo string
    $variable = "52.6";

    //Ahora la pasamos a integer
    settype($variable, 'integer');
    //Esto mostrara integer
    echo gettype($variable);
    echo "<br>";

    //b) Conversion automatica, esta se realiza cuando se necesita un tipo especifico
    //de datos en una expresion
    
    //Esta variable es double
    $a = 1.2;
    //Esta es de tipo entero
    $b = 3;
    //La variable c sera de tipo double
    $c = $a * $b;

    echo gettype($c);
    echo "<br>";

    //-------------------------------------------------------------------------------------------------------------------------

    //4. Arrays Indexados, Asociativos, Multidimensionales, Concatenacion de valores,
    //comentarios y operadores.  

    //a) Arrays indexeados, estos se refieren a que cada elemento del array le corresponde un numero,
    //el cual se utilizara para poder leerlo. Se empieza a contar desde el numero cero, por lo que el primer
    //elemento del array sera el numero 0 y el ultimo elemento del array le corresponde el numero n-1.

    $array = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];
    var_dump($array);
    echo "<br>";
    //Para imprimir el valor que esta en x posicion usamos:
    echo $array[0];
    echo "<br>";

    //b) Array asociativos, son arrays cuyos keys son strings personalizados.
    //Para acceder a los valores de un array asociativo se hace de la misma forma
    //que con arrays numericos.

    $animales = [
        "Perro" => 1,
        "Gato" => 2,
        "Zorro" => 3,
        "Burro" => 4,
        "Caballo" => 5

    ];
    echo $animales["Perro"]; //Devuelve el 1
    echo "<br>";
    echo $animales["Burro"]; //Devuelve el 4
    echo "<br>";

    //c) Arrays multidimensionales, son los que tienen mas de dos dimensiones. Estos se definen como matrices
    //pero añadiendo indices.

    $animal[0][0][0] = "Perro";
    $animal[0][0][1] = "Gato";
    $animal[0][0][2] = "Lombriz";
    $animal[1][0][0] = "Burro";
    $animal[1][0][1] = "Murcielago";
    $animal[1][0][2] = "Cocodrilo";
    echo  $animal[1][0][1];
    echo "<br>";

    //Cuando declaramos una array dentro de otra array lo que hacemos es añadir una dimension
    //mas al array. La siguiente array cuenta con 3 dimensiones:
        
        $miFecha = array(
        array(
        array("13 de enero de 2015", "11 de febrero de 2018"),
        array("13 de enero de 2020", "11 de febrero de 2015"),
        ),
        array(
        array("3 de agosto de 2017", "1 de octubre de 2016"),
        array("3 de agosto de 2013", "1 de octubre de 2019"),
        ),
        array(
        array("10 de junio de 2020", "11 de marzo de 2019"),
        ),
        array(
        array("22 de marzo de 2020", "28 de mayo de 2019"),
        array("22 de marzo de 2019", "28 de mayo de 2018"),
        array("22 de marzo de 2018", "28 de mayo de 2017"),
        array("22 de marzo de 2017", "28 de mayo de 2016"),
        )
        
        );
        echo $miFecha[3][2][0];
        echo $miFecha [0] [0] [0]. "<br>"; echo $miFecha [0] [0] [1]. "<br>";
        echo $miFecha [0] [1] [0]. "<br>"; echo $miFecha [0] [1] [1]. "<br>";
        echo $miFecha [1] [0] [0]. "<br>"; echo $miFecha [1] [0] [1]. "<br>";
        echo $miFecha [1] [1] [0]. "<br>"; echo $miFecha [1] [1] [1]. "<br>";
        echo $miFecha [2] [0] [0]. "<br>"; echo $miFecha [2] [0] [1]. "<br>";
        echo $miFecha [3] [0] [0]. "<br>"; echo $miFecha [3] [0] [1]. "<br>";
        echo $miFecha [3] [1] [0]. "<br>"; echo $miFecha [3] [1] [1]. "<br>";
        echo $miFecha [3] [2] [0]. "<br>"; echo $miFecha [3] [2] [1]. "<br>";
        echo $miFecha [3] [3] [0]. "<br>"; echo $miFecha [3] [3] [1]. "<br>";
        echo "<br>";

        //d) Concatenacion de valores, concatenar es el hecho de unir textos o cadenas
        //y aqui en PHP se realiza con un punto (.).

        $a = "menos";
        $b = 50;
        $c = 25;
        $total = $b - $c;

        echo "El resultado de la operacion de $b  $a $c es: " . $total;
        echo "<br>";

        //e) Comentarios y operadores, podemos comentar en PHP con /* y cerramos con */
        //Otra forma es con #, y con //

        //-------------------------------------------------------------------------------------------------------------------------

        //5. Declaracion de funciones, parametros por valor, referencia, por defecto
        //fuerte tipado, argumentos variables, return.

        //a. Declaracion de funciones, una funcion es un conjunto de instrucciones que a lo largo
        //del programa van a ser ejecutadas multitud de veces. Es por ello, que este conjunto de instrucciones se 
        //agrupan en una funcion. 

        function mostrarTexto($texto){
            echo "<strong> El texto que quiero imprimir es el siguiente: </strong>";
            echo $texto;
        }
        //Fin de la declaracion de funciones
        mostrarTexto("Me gusta mucho el curso de PHP *guiño* *guiño*");
        echo "<br>";

        //Tambien podemos crear funciones que devuelvan datos(valores concretos). Estas funciones, 
        //que se pueden denominar "funciones en sentido estricto", son aquellas que ejecutan un codigo y como un punto 
        //final de dicho codigo incluyen una sentencia return seguida del resultado de la funcion.La sentencia return
        //indica que cuando se alcanza se ha llegado al final de la funicon y se devuelve ocmo resultado de la misma el contenido 
        //especificado a continuacion del return. Despues de un return puede devolverse una variable, un numero,
        //una cadena de texto, etc.

        function operaciones($n1, $n2, $operacion){
            $resultado = 0;
            if($operacion == "Sumar"){
                $resultado = $n1 + $n2;
            }else if($operacion == "Restar"){
                $resultado = $n1 - $n2;
            }else if($operacion == "Multiplicar"){
                $resultado = $n1 * $n2;
            }
            return $resultado; //Devolver resultado
    
        }
        //Llamar a la funcion operaciones
        $r = operaciones(5, 7, "Sumar");
        echo $r . "<br>";
        //O podemos imprimir directamente 
        echo operaciones(8, 8, "Multiplicar");
        echo "<br>";


        //b. Se puede pasar una variable por referencia a una funcion y asi hacer que la funcion
        //pueda modificar la variable. La sintaxis es la siguiente

        function foo(&$var)
        {
            $var++;
        }
        function &bar()
        {
            $a = 5;
            return $a;
        }
        foo(bar());
        echo "<br>";

        //-------------------------------------------------------------------------------------------------------------------------

        //6. Sentencias Condicionales (if, else, switch, operador ternario, Null coalesce,
        //Spaceship). 
        //If, la estructura de control if permite la ejecucion condicional de fragmentos de codigo.
        //Sirve para ejecutar una sentencia cuando otra no se cumple. else extiende una sentencia if, y se ejecuta cuando esta es false.
        //Es una combinacion entre if y else. Se ejecuta cuando if es false, pero solo si la expresion condicional del elseif es true
        //elseif solo se ejecuta si el if precedente o cualquier elseif anterior son evaluadas como false

        $x = 1;
        $y = 5;
       
        if ($x > $y) {
            echo "$x es mayor que $y";
        } elseif ($x == $y) {
            echo "$x es igual que $y";
        } else {
            echo "$y es mayor que $x";
        }
        echo "<br>";

        //b) While, se ejecutan las sentencias dentro del while siempre y cuando se evaluen como true.
        //Si la expresion while se evalua como false, las sentencias no se ejecutaran ni siquiera una vez.
        //Tambirn es posible agrupar varias instrucciones while dentro de una.

        $i = 1;
        while($i <= 10){
         echo $i;
         $i++;
        }   
        echo "<br>";

        //c) do while, muy similares a los loops while, simplemente aqui la expresion para el loop 
        //se verifica al final en lugar de al principio, esto garantiza que el codigo se ejecute por lo menos la primera vez.

        $i = 0;
        do {
        echo $i;
        } while ($i > 0);
        echo "<br>";

        //d) for, Las expresiones o conjunto de expresiones van separadas por punto y coma ; y solo hay 3.
        //La primera expresion, $i = 1, se ejecuta una vez incondicionalmente al comienzo del bucle.
        //La segunda expresion, $i <= 10, es una condicion, si es true, se ejecutara la tercera expresion.
        //La tercera expresion, $i++, es la accion a realizar si se cumple la segunda expresion.  

        //Cada una de las expresiones pueden estar vacias o contener multiples expresiones, lo que resulta util en ciertas ocasiones. 
        //Si la expresion 2 esta vacia, el loop sera definido como true.

        for($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        echo "<br>";

        //e) Operador ternario, es la forma corta de la sentencia if, else
        //En lugar de escribir 

        $a = 10;
        $b = 5;
        if ($a > $b) {
            $resultado = 'verdadero';
        } else {
            $resultado = 'falso';
        }
        echo $resultado;
        echo "<br>";

        //Escribimos 
        $resultado = $a > $b ? 'verdadero' : 'falso';
        echo $resultado;
        echo "<br>";

        //Para encadenar los operadores usamos 
        /*
        $resultado = $condicion ? 'verdadero' : ($condicion2 ? 'verdadero2' : 'falso');
        */

        //f) Switch, esta sentencia es muy parecida a la sentencia if
        //En muchas ocasiones, es posible que se quiera comparar la misma variable o expresion
        //con muchos valores diferentes, y ejecutar una parte de codigo distinta dependiendo de a que valor es igual. 
        //Para esto es exactamente la expresion switch.

        $i = 2;
        switch ($i) {
            case 0:
                echo "i es igual a 0";
                break;
            case 1:
                echo "i es igual a 1";
                break;
            case 2:
                echo "i es igual a 2";
                break;
            default:
                echo "i no es igual a 0, 1 ni 2";
            
        }
        echo "<br>";

        //g) Spaceship, Se utiliza para comparar dos expresiones. Devuelve -1, 0 o 1 cuando la primera
        //expresion es, respectivamente, menor, igual o mayor que la segunda expresion.

            //integer comparison
            print( 1 <=> 1);print("<br/>");
            print( 1 <=> 2);print("<br/>");
            print( 2 <=> 1);print("<br/>");
            print("<br/>");
            //float comparison
            print( 1.5 <=> 1.5);print("<br/>");
            print( 1.5 <=> 2.5);print("<br/>");
            print( 2.5 <=> 1.5);print("<br/>");
            print("<br/>");
            //string comparison
            print( "a" <=> "a");print("<br/>");
            print( "a" <=> "b");print("<br/>");
            print( "b" <=> "a");print("<br/>");



        //-------------------------------------------------------------------------------------------------------------------------

        //7. Sentencias de captura de errores (throw, try -cath)
        
        //Throw, Lanza una excepcion dentro del generador y reanuda su ejecucion. El comportamiento sera
        //el mismo que si la expresion yield actual fuera reemplazada con una sentencia throw $exception.
        //Si el generador ya esta cerrado al invocar a este metodo, la excepcion sera lanzada en su lugar en el contexto del invocador.

        //Try catch, Se pueden usar multiples bloques catch para atrapar diferentes clases de excepciones. La ejecucion normal 
        //(cuando no es lanzada ninguna excepcion dentro del bloque try) continuara despues del ultimo bloque catch definido en la sencuencia. 
        //Las excepciones pueden ser lanzadas ("thrown") (o relanzadas) dentro de un bloque catch.

        
        //-------------------------------------------------------------------------------------------------------------------------

        //8. Ciclos e Iteraciones (for, foreach, while, do..while, break, continue)

        //for, Las expresiones o conjunto de expresiones van separadas por punto y coma ; y solo hay 3.
        //La primera expresion, $i = 1, se ejecuta una vez incondicionalmente al comienzo del bucle.
        //La segunda expresion, $i <= 10, es una condicion, si es true, se ejecutara la tercera expresion.
        //La tercera expresion, $i++, es la accion a realizar si se cumple la segunda expresion.  

        //Cada una de las expresiones pueden estar vacias o contener multiples expresiones, lo que resulta util en ciertas ocasiones. 
        //Si la expresion 2 esta vacia, el loop sera definido como true.

        for($i = 1; $i <= 10; $i++) {
            echo $i;
        }
        echo "<br>";

        //b) While, se ejecutan las sentencias dentro del while siempre y cuando se evaluen como true.
        //Si la expresion while se evalua como false, las sentencias no se ejecutaran ni siquiera una vez.
        //Tambirn es posible agrupar varias instrucciones while dentro de una.

        $i = 1;
        while($i <= 10){
         echo $i;
         $i++;
        }   
        echo "<br>";

        //c) do while, muy similares a los loops while, simplemente aqui la expresion para el loop 
        //se verifica al final en lugar de al principio, esto garantiza que el codigo se ejecute por lo menos la primera vez.

        $i = 0;
        do {
        echo $i;
        } while ($i > 0);
        echo "<br>";

        //d) foreach, foreach permite una forma facil de iterar sobre arrays u objetos.
        //Cuando foreach inicia su ejecucion, el puntero apunta directamente al primer elemento del array, 
        //por lo que no es necesario llamar a la funcion reset() antes que un loop foreach. 
        //Es recomendable no cambiar el puntero dentro del loop.

        // Devuelve directamente el value de cada key, comenzando desde el primero
        /*
        foreach ($array as $value) {
        // Lo que se desee mostrar
        }
        */

        //Se pueden modificar los elementos del array dentro del loop, anteponiendo & a $value (asignandolo por referencia).
        
        $array = array(1, 2, 3, 4);
        foreach ($array as &$value){
            $value = $value * 2;
        }
        // cada valor del array vale ahora : 2, 4, 6, 8
        unset($value);
        echo "<br>";

        //La funcion unset() elimina la referencia del ultimo elemento, pero el array sigue valiendo 2, 4, 6, 8. 
        //Es recomendable hacer unset() porque la referencia del $valor y el ultimo elemento del array permanecen aun despues del loop foreach.

        //e) break, break termina la ejecucion de las siguientes estructuras: for, foreach, while, do-while y switch.
        //Se puede añadir un argumento numerico opcional que indica de cuantas estructuras debe salir. El valor por defecto es 1:

        // Ejemplo con valor numerico
        $i = 0;
        while (++$i){
        switch($i){
        case 5:
            echo "He llegado a 5 </br>";
            break 1; // Aqui solo saldria del switch
        case 10:
            echo "He llegado a 10 </br>";
            break 2; // Sale del switch y del while
        default:
            break;
        }
        }
        echo "<br>";

        //f) continue, Se utiliza dentro de las estructuras 
        //iterativas para saltar el resto de la iteracion actual del loop y 
        //continuar a la siguiente iteracion para su ejecucion

        for ($i=0; $i < 10; $i++) {
            if($i % 2 == 0)
                continue;
            print "$i ";
        } // Devuelve 1 3 5 7 9
        echo "<br>";

        //-------------------------------------------------------------------------------------------------------------------------

        //9. Inclusion de Archivos sentencias include, requiere, include_once y
        //requiere_once.

        // include, incluye t evalua el archivo especificado.
        /*
        vars.php   
        $color = 'verde';
        $fruta = 'manzana';

        ?>

        test.php
        <?php

        echo "Una $fruta $color"; // Una

        include 'vars.php';

        echo "Una $fruta $color"; // Una manzana ver
        */
        
        //b) require, es identico al include, solo que en caso de fallo producira
        //un error fatal de nicel E_COMPILE_ERROR. O sea que detiene el script mientras que include
        //solo emitira una advertencia.

        //c) require_once, es identica a require, solo que PHP verificara si el archivo ya ha sido
        //incluido y si es asi, no se incluye de nuevo.

        //d) include_one, incluye y evalua el fichero especificado durante la ejecucion del script.
        //Es similar a la sentencia include, siendo la unica diferencia de que si el codigo del fichero 
        //ya ha sido incluido, no se volvera a incluir, e include_once devolvera true. Como su nombre indica, el fichero sera incluido solamente una vez.


        //-------------------------------------------------------------------------------------------------------------------------

        //10. Manejo de variables en servidor $_POST, $_GET, $_FILES, $_REQUEST,
        //$_SESSION, $_COOKIE.

        //$_POST, Variables proporcionadas al script por medio de HTTP POST. Es equivalente a lo que antes se conocia como $HTTP_POST_VARS
            //- $_SERVER["HTTP_POST_VARS"] Se trata de un array que almacena los nombres y contenidos de las variables enviadas al script por medio de un formulario POST.

        //b) $_GET, Variables proporcionadas al script por medio de HTTP GET. Es equivalente a lo que antes se conocia como $HTTP_GET_VARS.
            //- $_SERVER["HTTP_GET_VARS"] Se trata de un array que almacena los nombres y contenidos de las variables enviadas al script por URL o por formularios GET.

        //c) $_FILES, Variables proporcionadas al script por medio de la subida de ficheros via HTTP . Es equivalente a lo que antes se conocia como $HTTP_POST_FILES.
        
        //d) $_ REQUEST, Variables proporcionadas al script por medio de cualquier mecanismo de entrada del usuario. La presencia y el orden en que aparecen las variables 
        //en esta matriz es definido por la directiva de configuracion variables_order

        //e) $_SESSION, Variables registradas en la sesion del script. Es equivalente a lo que antes se conocia como $HTTP_SESSION_VARS.
        
        //f) $_COOKIE, Variables proporcionadas al script por medio de HTTP cookies. Es equivalente a lo que antes se conocia como $HTTP_COOKIE_VARS.
            //- Se trata de un array que almacena los nombres y contenidos de las cookies. 

        
        //-------------------------------------------------------------------------------------------------------------------------

        //11. POO Definicion de Clases, atributos, metodos, instancias y uso de objetos.
        //Una clase se puede ver como el esquema de una casa y un objeto como la casa ya construida.
        //Una clase es el esquema de una casa, que define su estructura, sus medidas y caracteristicas y las relaciones entre ellas. El objeto es la casa contruida con todos los datos y organizacion que la clase ha definido.
        //Se pueden construir las casas (objetos) que se quieran con esa estructura (clase), y cada una tendra sus propias familias y decoracion.

        //Para definir una clase se utiliza la palabra reservada class, seguido del nombre de clase y dos llaves, entre las cuales se guardara toda la informacion del esquema. 
        //Esta informacion se guarda en propiedades (asi es como se les llama a las variables dentro de las clases), metodos (funciones dentro de las clases) y constantes.

        //El nombre de la clase puede ser cualquier etiqueta valida siempre que no sea una palabra reservada de PHP. Un nombre valido comienza con una letra o guion bajo, 
        //seguido de una cantidad arbitraria de letras, numeros o guiones bajos.

        class NombreClase {
            // Declaracion de una propiedad
            public $variable = 'Un valor cualquiera';
            // Declaracion de un metodo
            public function mostrarVariable(){
                echo $this->variable;
            }
        }

        echo "<br>";

    
        
        //-------------------------------------------------------------------------------------------------------------------------

        //12. Constantes de Clase, Autocarga de Clases.
        //Las constantes de clases permiten definir un valor en una clase y mantenerlo invariable durante la ejecucion del script. 
        //Es como las constantes de PHP pero dentro de una clase.
        //Se diferencian de las variables en que no utilizan un simbolo de dolar $ al declararlas o emplearlas, y su valor ha de ser
        //siempre una expresion constante (no una variable, propiedad o callback).

        class ClaseA {
            const EJEMPLO = 'valor invariable';
            function mostrarConstante(){
                echo self::EJEMPLO . "<br>";
            }
        }
        // 4 formas de acceder a la constante EJEMPLO:
        // FORMA 1:
        echo ClaseA::EJEMPLO . "<br>"; // Devuelve: valor invariable
        // FORMA 2:
        $clase = "ClaseA";
        echo $clase::EJEMPLO . "<br>";// Devuelve: valor invariable
        // FORMA 3:
        $clase = new ClaseA;
        $clase->mostrarConstante();// Devuelve: valor invariable
        // FORMA 4:
        $clase = new ClaseA;
        echo $clase::EJEMPLO;// Devuelve: valor invariable
        echo "<br>";

        //b) Autocarga de clases, Este ejemplo intenta cargar 
        //las clases MiClase1 y MiClase2 desde los ficheros MiClase1.php y MiClase2.php, respectivamente.

        /*
        spl_autoload_register(function ($nombre_clase) {
            include $nombre_clase . '.php';
        });
        
        $obj  = new MiClase1();
        $obj2 = new MiClase2();
        */

        
        //-------------------------------------------------------------------------------------------------------------------------

        //13. Contructores y Destructores.
        // __construct(mixed ...$values = ""): void
        // PHP permite a los desarrolladores declarar metodos constructores para las clases. 
        //Aquellas que tengan un metodo constructor lo invocaran en cada nuevo objeto creado, lo que lo hace idoneo 
        //para cualquier inicializacion que el objeto pueda necesitar antes de ser usado.

        class BaseClass {
            function __construct() {
                print "En el constructor BaseClass\n";
            }
         }
         
         class SubClass extends BaseClass {
            function __construct() {
                parent::__construct();
                print "En el constructor SubClass\n";
            }
         }
         
         class OtherSubClass extends BaseClass {
             // heredando el constructor BaseClass
         }
         
         // En el constructor BaseClass
         $obj = new BaseClass();
         
         // En el constructor BaseClass
         // En el constructor SubClass
         $obj = new SubClass();
         
         // En el constructor BaseClass
         $obj = new OtherSubClass();
         echo "<br>";

        //destructor
        //__destruct(): void
        //El metodo destructor sera llamado tan pronto como no hayan otras referencias a 
        //un objeto determinado, o en cualquier otra circunstancia de finalizacion.

        class MyDestructableClass
         {
             function __construct() {
                 print "En el constructor\n";
             }
         
             function __destruct() {
                 print "Destruyendo " . __CLASS__ . "\n";
             }
         }
         
         $obj = new MyDestructableClass();


        //-------------------------------------------------------------------------------------------------------------------------

        //14. Visibilidad, Privado, Publico y Protegido.
        //Visibilidad, La visibilidad de una propiedad, un metodo o una constante se puede
        //definir anteponiendo a su declaracion una de las palabras reservadas public, protected o private 
        //A los miembros de clase declarados como 'public' se puede acceder desde donde sea; 
        //a los miembros declarados como 'protected', solo desde la misma clase, mediante clases heredadas o desde la clase padre. 
        //A los miembros declarados como 'private' unicamente se puede acceder desde la clase que los definio.

        /*
        class MyClass
        {
            // Declaracion de un constructor public
            public function __construct() { }
        
            // Declaracion de un metodo public
            public function MyPublic() { }
        
            // Declaracion de un metodo protected
            protected function MyProtected() { }
        
            // Declaracion de un metodo private
            private function MyPrivate() { }
        
            // Esto es public
            function Foo()
            {
                $this->MyPublic();
                $this->MyProtected();
                $this->MyPrivate();
            }
        }
        */


        //-------------------------------------------------------------------------------------------------------------------------

        //15. Herencia, Abstraccion e Interfaces.
        //Herencia, cuando se extiende una clase, la subclase hereda todos
        //los metodos publicos y protegidos de la clase padre. A menos que una clase sobrescriba esos metodos, 
        //mantendran su funcionalidad original

        /*
            
        class Foo
        {
            public function printItem($string)
        {
            echo 'Foo: ' . $string . PHP_EOL;
        }
    
            public function printPHP()
        {
            echo 'PHP is great.' . PHP_EOL;
        }
        }

        class bar extends Foo
        {
            public function printItem($string)
        {
            echo 'Bar: ' . $string . PHP_EOL;
        }   
        }

        $foo = new Foo();
        $bar = new Bar();
        $foo->printItem('baz'); // Salida: 'Foo: baz'
        $foo->printPHP();       // Salida: 'PHP is great' 
        $bar->printItem('baz'); // Salida: 'Bar: baz'
        $bar->printPHP();       // Salida: 'PHP is great'

        */

        // Abstraccion, Las clases definidas como abstractas no se pueden instanciar y cualquier clase que contiene al menos 
        //un metodo abstracto debe ser definida como tal. Los metodos definidos como abstractos simplemente declaran la firma del metodo, 
        //pero no pueden definir la implementacion.

        /*
        abstract class ClaseAbstracta
        {
            // Forzar la extension de clase para definir este metodo
            abstract protected function getValor();
            abstract protected function valorPrefijo($prefijo);
        
            // Metodo comun
            public function imprimir() {
                print $this->getValor() . "\n";
            }
        }
        
        class ClaseConcreta1 extends ClaseAbstracta
        {
            protected function getValor() {
                return "ClaseConcreta1";
            }
        
            public function valorPrefijo($prefijo) {
                return "{$prefijo}ClaseConcreta1";
            }
        }
        
        class ClaseConcreta2 extends ClaseAbstracta
        {
            public function getValor() {
                return "ClaseConcreta2";
            }
        
            public function valorPrefijo($prefijo) {
                return "{$prefijo}ClaseConcreta2";
            }
        }
        
        $clase1 = new ClaseConcreta1;
        $clase1->imprimir();
        echo $clase1->valorPrefijo('FOO_') ."\n";
        
        $clase2 = new ClaseConcreta2;
        $clase2->imprimir();
        echo $clase2->valorPrefijo('FOO_') ."\n";
        */

        //Interfaces, Las interfaces de objetos permiten crear codigo con el cual especificar que metodos deben 
        //ser implementados por una clase, sin tener que definir como estos metodos son manipulados.
        //Todos los metodos declarados en una interfaz deben ser publicos, ya que esta es la naturaleza de una interfaz.

        /*
        interface a
        {
            public function foo();
        }
        
        interface b
        {
            public function bar();
        }
        
        interface c extends a, b
        {
            public function baz();
        }
        
        class d implements c
        {
            public function foo()
            {
            }
        
            public function bar()
            {
            }
        
            public function baz()
            {
            }
        }

        */

        //-------------------------------------------------------------------------------------------------------------------------

        //16. Caracteristicas Nuevas de PHP 8 y PHP 8.1
        //PHP 8.1: 
        //Enum: Las llamadas enumeraciones (enumeraciones con numero determinado de valores) estan ahora disponibles como tipo variable.
        //Fibers: El nuevo tipo de bloque de cidigo fibers te ofrece la posibilidad de ejecutar multiples hilos de programa en paralelo.
        //Arrays: Desde PHP 7.4 se pueden desempaquetar arrays con valores numericos. Ahora esto tambien es posible para las matrices con cadenas.
        //Readonly: A partir de ahora, las propiedades de las clases pueden marcarse como de solo lectura ('readonly'), y, por tanto, ya no son modificables.
        //Interseccion: Los tipos de interseccion (basicamente los homologos de los tipos de uniin) estan ahora disponibles.
        //Never: El nuevo valor de retorno 'never' indica que una funciin se termina y no devuelve ningun otro valor.
        //Final: Ahora puedes marcar las constantes de la clase con 'final' para que no puedan ser modificadas por las subclases.
        //Fsync: PHP 8.1 introduce las dos funciones 'fsync' y 'fdatasync' para sincronizar los datos del buffer al medio de almacenamiento.
        //Octal: Para indicar el sistema numerico octal, ademas del '0' (cero), se puede utilizar en el futuro el prefijo '0o' (cero y O minuscula).
        //Globals: El uso de '$GLOBALS' ha sido ligeramente restringido y ahora resulta en un mensaje de error en algunos casos.
        //Null: Las funciones internas ya no aceptaran valores nulos en argumentos no anulables.

        //PHP 8:
        //Compilador JIT
        //Tipos de union (Union Types)
        //Tipo de retorno estatico (Static return type)
        //WeakMap
        //Usar ::class en los objetos
        //Interfaz encadenable (Stringable interface)
        //Funcion fdiv()
        //Errores de tipo (Type errors)
        //Reclassified engine warnings
        //Firmas correctas de metodos magicos
        //Reflection





?>      