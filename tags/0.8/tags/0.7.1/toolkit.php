<?php

echo "<h1>iTop</h1>";

$sStyle = "
	border: 1px dashed #CCC;
	background: #CCF;
	padding:1.5em;
";
echo "<div style=\"$sStyle\">\n";
echo "<a href=\"./pages/UI.php\">Main page</a></br>\n";
echo "<a href=\"./pages/csvimport.php\">CSV import (shortcut)</a></br>\n";
echo "<a href=\"./pages/UniversalSearch.php\">Universal search (shortcut)</a></br>\n";
echo "<h2>Itop consultant</h2>\n";
echo "<a href=\"./pages/ITopConsultant.php?config=..%2Fconfig-itop.php\">Check model, Create DB, Update DB (new class, new attribute)</a></br>\n";
echo "<a href=\"./pages/db_importer.php\">Backup and restore (shortcut)</a></br>\n";
echo "<a href=\"./pages/schema.php\">Objects schema (shortcut)</a></br>\n";
echo "<h2>Not working or deprecated</h2>\n";
echo "<a href=\"./pages/data_generator.php\">Data generator</a></br>\n";
echo "<a href=\"./pages/advanced_search.php\">ITop finder</a></br>\n";
echo "<a href=\"./pages/index.php\">navITop</a></br>\n";
echo "<a href=\"./pages/ajax.php\">@ITop</a></br>\n";
echo "</div>\n";

echo "<h1>phpMyORM</h1>";


$sStyle = "
	border: 1px dashed #CCC;
	background: #CFC;
	padding:1.5em;
";
echo "<div style=\"$sStyle\">\n";


echo "<a href=\"./pages/ITopConsultant.php\">Manage configurations</a></br>\n";
echo "<a href=\"./pages/test.php\">Core unit tests</a></br>\n";


echo "</div>\n";

echo "<h1>phpinfo()</h1>";


$sStyle = "
	border: 1px dashed #CCC;
	background: #FCC;
	padding:1.5em;
";
echo "<div style=\"$sStyle\">\n";
phpinfo();
echo "</div>\n";
?>
