<h2>Revisão de PHP</h2>
<h3>É um script PHP</h3>

<pre>
function nTopic()
{

    echo '<br> ! ------------------------------------------------------- ! <br>';
}

// ---------------------------------------------- //
//Variáveis
//Imprimindo valores booleanos
var_dump(true);
var_dump(false);

//Constantes
//constantes podem ser acessadas em qualquer lugar do códio
define('MY_CONST', '<p>essa é minha constante</p>');
const MY_CONST_2 = '<p>Essa é outra constante</p>';

function testeDeConstantes()
{
    echo MY_CONST;
    echo MY_CONST_2;
}

testeDeConstantes();
// ---------------------------------------------- //

//Operador modular
nTopic();

function modularSum(int $hour, int $sum)
{

    if ($hour > 0 && $hour < 24) {
        $total = $hour + $sum;
        if ($total < 24)
            return $total;
        else
            return ($hour + $sum) % 24;
    }

    return null;
}

function formatTime($result)
{

    if ($result < 12) {
        return "{$result} AM";
    } elseif ($result > 12 && $result < 24) {
        $result %= 12;
        return "{$result} PM";
    }

    return null;
}

function printResults(int $hour, int $sum)
{
    $result = modularSum($hour, $sum);
    if ($result === null)
        return "Não foi possível calcular, verifique os valores inseridos<br>";

    $formatTime = formatTime($result);

    return "A soma do horário {$hour}h com {$sum} horas corridas resulta no horário {$result}h. <strong>{$formatTime}</strong><br>";
}

echo printResults(20, 9);
echo printResults(6, 100);
echo printResults(22, 2);
echo printResults(24, 6);
echo printResults(14, 2097);
echo printResults(23, 24);

// ---------------------------------------------- //

//Testes de interpolação
nTopic();

function sayHi()
{
    return "Hi";
}

$hi = 'Hi';
echo "Test: {sayHi()}";
echo "Test: {$hi}";

// ---------------------------------------------- //

//Funções matemáticas nativas
nTopic();

echo rand(1, 100); // Inteiro aleatório
echo round(5.6); // Arredonda 
echo ceil(5.6); // Arredonda para o maior
echo floor(5.6); // Arredonda para o menor
echo sqrt(9); // raiz quadradad
echo pi(); // Imprime pi
echo abs(-7); // Valor absoluto
//max() , min() , max([]) , min([])
echo 'R$ :' . number_format(9567889.123, 2, ',', '.');

// ---------------------------------------------- //

//Funções para strings
nTopic();

//strings no PHP são tratadas como arrays de caracteres
echo 'Cinco tem ' . strlen('cinco') . ' letras<br>';
//strpos , substr , str_replace , strtolowwer , strtoupper , ucwords , trim

// ---------------------------------------------- //

//Data e Tempo
nTopic();

echo 'Marco zero: ' . date('d/m/Y', 0);
echo '<br>';
echo 'Agora: ' . date('d/m/Y');
echo '<br>';
echo 'Data para timestamp: ' . strtotime('1990-01-01');
echo '<br>';
echo 'Data atual para timestamp: ' . strtotime(date('Y-m-d'));
//date() , 0

// ---------------------------------------------- //

//Arrays
nTopic();

$firstArray = [['nome' => 'Gustavo', 'idade' => 30], ['nome' => 'João', 'idade' => 25]];
var_dump($firstArray);
$firstArray[] = ['nome' => 'José', 'idade' => 50];
//um ótimo jeito para debugar
echo '<pre>';
var_dump($firstArray);
echo '</pre>';


// ---------------------------------------------- //

//Loops
nTopic();

//escreva todos os números pares de 2 à 100

for ($i = 2; $i <= 100; $i += 2) {
    echo "{$i} | ";
}

// outra sintaxe for(): endfor;
// while é diferente de do while (não só no php)

$numbersCount = 1;
echo "<table>";
for ($i = 1; $i <= 3; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 3; $j++) {
        echo "<td style='border: 1px solid #000'>{$numbersCount}</td>";
        $numbersCount++;
    }
    echo "</tr>";
}
echo "</table>";

for ($i = 1; $i < 10; $i++) {

    if ($i == 3)
        continue; // vai pular o 3
    if ($i == 8)
        break; // vai parar o loop no 8

    echo "{$i}-";
}

// ---------------------------------------------- //

//Operadores de comparação
nTopic();

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);

// ---------------------------------------------- //

//Controle de fluxo
nTopic();

$day = 17;
switch ($day) {
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    default:
        echo $day;
};

//operador ternário
echo 1 == 1 ? 'true' : 'false';

//Null coalescing Operator : php > x
$username = $_GET['user'] ?? 'nobody';
// é equivalente à
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo "<p>{$username}</p>";

// ---------------------------------------------- //

//funções
nTopic();

//spread operator (...)

function spreadOperator(...$numberss)
{

    $total = 0;

    foreach ($numberss as $number) {
        $total += $number;
    }

    return $total;
}

echo spreadOperator(1, 2, 3, 4, 5) . '</br>';
echo spreadOperator(1, 2, 3, 4, 5, 6, 7, 8, 9) . '</br>';

//escopo no php

$runMe = 'runMe';

function runMe()
{
    //apesar de $runMe ser global, precisamos indicar isso na função
    //é melhor manter as variáveis encapsuladas do que trabalhar dessa forma
    //utilizar se for realmente necessário
    //No javascript isso não é necessário
    global $runMe;
    echo "<p>I can access {$runMe}</p>";
}

runMe();

//escopo

$testvar = 'true';

function onefunction()
{
    $testvar = '<br>false-';
    echo $testvar;
}

onefunction();
echo $testvar;

//declaração de tipo
function sumtypes(int $a, int $b): int
{
    return $a + $b;
}

echo sumtypes(1, 1);
//echo sumtypes('a',2); erro

//funções anônimas = lambda functions

$square = function ($number) {
    return $number * $number;
};

echo "<p>2 ao quadrado é igual à: {$square(2)}</p>";
//Repare que é possível fazer interpolação de strings com funções anônimas

//Closures
//usar variáveis locais como se fossem globais em funções anônimas

function createCounter()
{
    $count = 0; //local

    $counter = function () use (&$count) {
        return ++$count; //uso global
    };

    return $counter;
}

$counter = createCounter();
echo $counter() . '--';
echo $counter() . '--';
echo $counter() . '--';

//Callback functions : funções sendo passadas como parâmetros
//exemplo - $arr = array_map(function($number){} , $numbers)

function applyCallback($callback , $value){
    return $callback($value);
}

$result = applyCallback(function($number){
    return $number*2;
},5);

echo "<p>{$result}</p>";

//Arrow functions
//tipo de função anônima php > 7.4
//há algo similar em javascript

$addd = fn ($a,$b) => $a + $b;

// $addd = function ($a,$b) { return $a + $b };

echo "<p>{$addd(1,5)}</p>";

$moneyBr = fn ($number) => 'R$' . number_format($number,2,',','.');

echo "<p>{$moneyBr(8500.5)}</p>";
</pre>

<h2>Esse é o resultado do script</h2>

<?php

function nTopic()
{

    echo '<br> ! ------------------------------------------------------- ! <br>';
}

// ---------------------------------------------- //
//Variáveis
//Imprimindo valores booleanos
var_dump(true);
var_dump(false);

//Constantes
//constantes podem ser acessadas em qualquer lugar do códio
define('MY_CONST', '<p>essa é minha constante</p>');
const MY_CONST_2 = '<p>Essa é outra constante</p>';

function testeDeConstantes()
{
    echo MY_CONST;
    echo MY_CONST_2;
}

testeDeConstantes();
// ---------------------------------------------- //

//Operador modular
nTopic();

function modularSum(int $hour, int $sum)
{

    if ($hour > 0 && $hour < 24) {
        $total = $hour + $sum;
        if ($total < 24)
            return $total;
        else
            return ($hour + $sum) % 24;
    }

    return null;
}

function formatTime($result)
{

    if ($result < 12) {
        return "{$result} AM";
    } elseif ($result > 12 && $result < 24) {
        $result %= 12;
        return "{$result} PM";
    }

    return null;
}

function printResults(int $hour, int $sum)
{
    $result = modularSum($hour, $sum);
    if ($result === null)
        return "Não foi possível calcular, verifique os valores inseridos<br>";

    $formatTime = formatTime($result);

    return "A soma do horário {$hour}h com {$sum} horas corridas resulta no horário {$result}h. <strong>{$formatTime}</strong><br>";
}

echo printResults(20, 9);
echo printResults(6, 100);
echo printResults(22, 2);
echo printResults(24, 6);
echo printResults(14, 2097);
echo printResults(23, 24);

// ---------------------------------------------- //

//Testes de interpolação
nTopic();

function sayHi()
{
    return "Hi";
}

$hi = 'Hi';
echo "Test: {sayHi()}";
echo "Test: {$hi}";

// ---------------------------------------------- //

//Funções matemáticas nativas
nTopic();

echo rand(1, 100); // Inteiro aleatório
echo round(5.6); // Arredonda 
echo ceil(5.6); // Arredonda para o maior
echo floor(5.6); // Arredonda para o menor
echo sqrt(9); // raiz quadradad
echo pi(); // Imprime pi
echo abs(-7); // Valor absoluto
//max() , min() , max([]) , min([])
echo 'R$ :' . number_format(9567889.123, 2, ',', '.');

// ---------------------------------------------- //

//Funções para strings
nTopic();

//strings no PHP são tratadas como arrays de caracteres
echo 'Cinco tem ' . strlen('cinco') . ' letras<br>';
//strpos , substr , str_replace , strtolowwer , strtoupper , ucwords , trim

// ---------------------------------------------- //

//Data e Tempo
nTopic();

echo 'Marco zero: ' . date('d/m/Y', 0);
echo '<br>';
echo 'Agora: ' . date('d/m/Y');
echo '<br>';
echo 'Data para timestamp: ' . strtotime('1990-01-01');
echo '<br>';
echo 'Data atual para timestamp: ' . strtotime(date('Y-m-d'));
//date() , 0

// ---------------------------------------------- //

//Arrays
nTopic();

$firstArray = [['nome' => 'Gustavo', 'idade' => 30], ['nome' => 'João', 'idade' => 25]];
var_dump($firstArray);
$firstArray[] = ['nome' => 'José', 'idade' => 50];
//um ótimo jeito para debugar
echo '<pre>';
var_dump($firstArray);
echo '</pre>';


// ---------------------------------------------- //

//Loops
nTopic();

//escreva todos os números pares de 2 à 100

for ($i = 2; $i <= 100; $i += 2) {
    echo "{$i} | ";
}

// outra sintaxe for(): endfor;
// while é diferente de do while (não só no php)

$numbersCount = 1;
echo "<table>";
for ($i = 1; $i <= 3; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 3; $j++) {
        echo "<td style='border: 1px solid #000'>{$numbersCount}</td>";
        $numbersCount++;
    }
    echo "</tr>";
}
echo "</table>";

for ($i = 1; $i < 10; $i++) {

    if ($i == 3)
        continue; // vai pular o 3
    if ($i == 8)
        break; // vai parar o loop no 8

    echo "{$i}-";
}

// ---------------------------------------------- //

//Operadores de comparação
nTopic();

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor false);

// ---------------------------------------------- //

//Controle de fluxo
nTopic();

$day = 17;
switch ($day) {
    case 1:
        echo 'one';
        break;
    case 2:
        echo 'two';
        break;
    default:
        echo $day;
};

//operador ternário
echo 1 == 1 ? 'true' : 'false';

//Null coalescing Operator : php > x
$username = $_GET['user'] ?? 'nobody';
// é equivalente à
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
echo "<p>{$username}</p>";

// ---------------------------------------------- //

//funções
nTopic();

//spread operator (...)

function spreadOperator(...$numberss)
{

    $total = 0;

    foreach ($numberss as $number) {
        $total += $number;
    }

    return $total;
}

echo spreadOperator(1, 2, 3, 4, 5) . '</br>';
echo spreadOperator(1, 2, 3, 4, 5, 6, 7, 8, 9) . '</br>';

//escopo no php

$runMe = 'runMe';

function runMe()
{
    //apesar de $runMe ser global, precisamos indicar isso na função
    //é melhor manter as variáveis encapsuladas do que trabalhar dessa forma
    //utilizar se for realmente necessário
    //No javascript isso não é necessário
    global $runMe;
    echo "<p>I can access {$runMe}</p>";
}

runMe();

//escopo

$testvar = 'true';

function onefunction()
{
    $testvar = '<br>false-';
    echo $testvar;
}

onefunction();
echo $testvar;

//declaração de tipo
function sumtypes(int $a, int $b): int
{
    return $a + $b;
}

echo sumtypes(1, 1);
//echo sumtypes('a',2); erro

//funções anônimas = lambda functions

$square = function ($number) {
    return $number * $number;
};

echo "<p>2 ao quadrado é igual à: {$square(2)}</p>";
//Repare que é possível fazer interpolação de strings com funções anônimas

//Closures
//usar variáveis locais como se fossem globais em funções anônimas

function createCounter()
{
    $count = 0; //local

    $counter = function () use (&$count) {
        return ++$count; //uso global
    };

    return $counter;
}

$counter = createCounter();
echo $counter() . '--';
echo $counter() . '--';
echo $counter() . '--';

//Callback functions : funções sendo passadas como parâmetros
//exemplo - $arr = array_map(function($number){} , $numbers)

function applyCallback($callback , $value){
    return $callback($value);
}

$result = applyCallback(function($number){
    return $number*2;
},5);

echo "<p>{$result}</p>";

//Arrow functions
//tipo de função anônima php > 7.4
//há algo similar em javascript

$addd = fn ($a,$b) => $a + $b;

// $addd = function ($a,$b) { return $a + $b };

echo "<p>{$addd(1,5)}</p>";

$moneyBr = fn ($number) => 'R$' . number_format($number,2,',','.');

echo "<p>{$moneyBr(8500.5)}</p>";
?>