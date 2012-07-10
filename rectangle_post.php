<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Copy the below --!>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
<tbody>
    
<?php
require_once('OpenGraph.php');

if ( isset( $_POST['article'] ) )
{
foreach ( $_POST['article'] as $art )
{
$graph = OpenGraph::fetch($art['url']);

echo '<tr>
	<td colspan="2">
		<img width="482" height="1" src="/contentFiles/image/div.jpg" complete="" alt=""/>
 		<h2 style="font-size: 16px;">'; echo $graph->title; echo '</h2>
	</td>
</tr>
<tr>
	<td width="165" valign="top">
		<img width="482" height="298" alt="'; echo $graph->title; echo'" src="'; echo $graph->image; echo '"></img>
 	</td>
</tr>
<tr>
	<td valign="top">
		<p>'; $paragraph = html_entity_decode($art['para'], ENT_COMPAT, 'UTF-8'); echo stripslashes($paragraph); echo '</p>
	</td>
</tr>';
};
};
?>
</tbody>
</table>



