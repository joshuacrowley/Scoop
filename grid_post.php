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
$graph = OpenGraph::fetch($art['urla']);
	$url_a = $graph->url;
	$image_a = $graph->image;
	$title_a = $graph->title;

$graph = OpenGraph::fetch($art['urlb']);
	$url_b = $graph->url;
	$image_b = $graph->image;
	$title_b = $graph->title;

$graph = OpenGraph::fetch($art['urlc']);
	$url_c = $graph->url;
	$image_c = $graph->image;
	$title_c = $graph->title;

echo '
 <tr>
	 <td style="text-align: left;"><a href="'; echo $url_a; echo '"><img width="152" height="110" alt="'; echo $title_a; echo '" src="'; echo $image_a; echo'" /></a></td>
	 <td style="text-align: left;"><a href="'; echo $url_b; echo '"><img width="152" height="110" alt="'; echo $title_b; echo '" src="'; echo $image_b; echo'" /></a></td>
	 <td style="text-align: left;"><a href="'; echo $url_c; echo '"><img width="152" height="110" alt="'; echo $title_c; echo '" src="'; echo $image_c; echo'" /></a></td>
 </tr>
 <tr>
	 <td valign="top" style="text-align: left; "><strong><a href="'; echo $url_a; echo '">'; echo $art['para_a']; echo'</a></strong></td>
	 <td valign="top" style="text-align: left; "><strong><a href="'; echo $url_b; echo '">'; echo $art['para_b']; echo'</a></strong></td>
	 <td valign="top" style="text-align: left; "><strong><a href="'; echo $url_c; echo '">'; echo $art['para_c']; echo'</a></strong></td>
 </tr>';
};
};
?>
</tbody>
</table>

</html>