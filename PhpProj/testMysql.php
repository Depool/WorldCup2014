<?php
$dblocation = "127.0.0.1";
$dbname = "test";
$dbuser = "root";
$dbpasswd = "111111";


$dbcnx = @mysql_connect($dblocation, $dbuser, $dbpasswd);

if (!$dbcnx)
{
    echo "<p>К сожалению, не доступен сервер mySQL</p>";
    exit();
}

if (!@mysql_select_db($dbname,$dbcnx) )
{
    echo "<p>К сожалению, не доступна база данных</p>";
    exit();
}

/*$created = mysql_query("CREATE DATABASE WORLD_CUP14_DB");

if ($created)
    print("YES");
else
    print("NO");
*/

mysql_query ("set character_set_client='cp1251'");
mysql_query ("set character_set_results='cp1251'");
mysql_query ("set collation_connection='cp1251_general_ci'");

$ver = mysql_query("SELECT VERSION()");
if(!$ver)
{
    echo "<p>Ошибка в запросе</p>";
    exit();
}
echo mysql_result($ver, 0);
?> 