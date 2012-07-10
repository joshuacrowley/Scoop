<meta http-equiv="Content-type" content="text/html; charset=utf-8">

<!-- Copy the below --!>

<table width="100%" cellspacing="1" cellpadding="1" border="0">
	<tbody>
		<?php
		require_once('../OpenGraph.php');
		
		if ( isset( $_POST['article'] ) )
		{
		foreach ( $_POST['article'] as $art )
		{
		$graph = OpenGraph::fetch($art['url']);
		
		echo '<tr>
			<td colspan="2">
				<img width="482" height="1" src="/contentFiles/image/div.jpg"/>
				<h2 style="font-size: 16px; ">
					<a href="'; echo $graph->url; echo '">'; echo $graph->title; echo '</a>
				</h2>
			</td>
		</tr>
		<tr>
			<td width="165" valign="top">
				<a href="'; echo $graph->url; echo '">
					<img width="152" height="109" alt="" src="'; $image = $graph->image; $pattern  = "{200x200}i"; preg_replace($pattern, "152x110", $image); echo $image; echo '"></img>
				</a>
				<p style="font-size: x-small; ">'; echo $graph->locality; echo '</p>
			</td>
			<td valign="top">
				<p>'; echo stripslashes ($art['para']); echo '</p>
			</td>
		</tr>
		
		';
		};
		};
		?>
	</tbody>
</table>



