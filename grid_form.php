<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html" charset="utf-8">
    <title>Scoop Beta</title>
    <link rel="stylesheet" href="grid.css" type="text/css" media="screen"></script>
    <link rel="stylesheet" href="screen.css" type="text/css" media="screen"></script>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
	
<body>	


<div class="container_6">
				
	<a href="index.php"><div id="header" class="grid_1"><p class="title">Home</p></div></a>	
	<div id="header-type" class="grid_5"><h2 id="text-box">Grid</h2></div>	
	
	<script type="text/javascript">
	
	//add rows
    $(function() {
        var newRowNum = 0;

        $('#addnew').click(function() {
            newRowNum++;
            var addRow = $(this).parent();
            var newRow = addRow.clone();
            $('input', addRow).val('');
            $('p#add', newRow).html('row' + newRowNum);
            $('div.url-a', newRow).html;
            $('div.title-a', newRow).html;
            $('div.url-b', newRow).html;
            $('div.title-b', newRow).html;
            $('div.url-c', newRow).html;
            $('div.title-c', newRow).html;
            $('div#remove', newRow).html('<a href="" class="remove">Remove</a>');
            $('input', newRow).each(function() {
                var newID = 'article[' + newRowNum + '][' +  $(this).attr('id') + ']';
                $(this).attr('name', newID);
            });
            addRow.before(newRow);

            $('a.remove', newRow).click(function() {
                $(this).parent().parent().remove();
                return false;
            });

            return false;
        });
    });
    
    //add line break
    //$('#addline').click(function() {
    
    //});
    
 	//submit
	$(document).ready(function(){
		$("#grid_form").submit( function () {    
		  $.post(
		   'grid_post.php',
			$(this).serialize(),
			function(data){
				$("#progressIndicator").hide();
			  $("#results").html(data)
			}
		  );
		  if(this.rules.checked){
		  $("#progressIndicator").show();
		  return;
		  }else{
		  $("#progressIndicator").show();
		  return false}; 
		});   
	});
	
	</script>
	
	<div id="menu" class="grid_3">	
		<form name="grid_form" id="grid_form" action="grid_post.php" accept-charset="UTF-8" method="post">
		<div id="divdata">
			<a id="addnew" href=""><p id="add">Add</p></a>
			<div class="url-a"><input id="urla" placeholder="url_a" size="50" name="article[0][urla]" type="text" /></div>
			<div class="title-a"><input id="short-a" placeholder="title_a" size="40" name="article[0][short-a]" type="text" /></div>
			<div class="url-b"><input id="urlb" placeholder="url_b" size="50" name="article[0][urlb]" type="text" /></div>
			<div class="title-b"><input id="short-b" placeholder="title_b" size="40" name="article[0][short-b]" type="text" /></div>
			<div class="url-c"><input id="urlc" placeholder="url_c" size="50" name="article[0][urlc]" type="text" /></div>
			<div class="title-c"><input id="short-c" placeholder="title_c" size="40" name="article[0][short-c]" type="text" /></div>
			<div id="remove"></div>
		</div>
		
		<div id="panel">
		<input type="submit" value="Scoop!" id="publish"/>
		Export?<input type="checkbox" name="rules" />
		<!--<input type="button" value="Add Line!" id="addline"/>--!>
		<div style="display:none; float:left;" id="progressIndicator">Loading...</div>
		</div>
		</form>	
	</div>
		
	<div id="menu" class="grid_3">
		<div id="results"></div>
	</div>	
	
</div>	
</body>
</html>