<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Scoop Beta</title>
    <link rel="stylesheet" href="grid.css" type="text/css" media="screen"></script>
    <link rel="stylesheet" href="screen.css" type="text/css" media="screen"></script>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	</head>
	
<body>	


<div class="container_6">
				
	<a href="index.php"><div id="header" class="grid_1"><p class="title">Home</p></div></a>	
	<div id="header-type" class="grid_5"><h2 id="text-box">Square</h2></div>	
	
	<script type="text/javascript">
    $(function() {
        var newRowNum = 0;

        $('#addnew').click(function() {
            newRowNum++;
            var addRow = $(this).parent().parent();
            var newRow = addRow.clone();
            $('input', addRow).val('');
            $('div:first-child', newRow).html(newRowNum);
            $('div:last-child', newRow).html('<a href="" class="remove">Remove<\/a>');
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
 	</script>
 	
	<script type="text/javascript">
	$(document).ready(function(){
		$("#offline_square_form").submit( function () {    
		  $.post(
		   'offline_square_post.php',
			$(this).serialize(),
			function(data){
			  $("#results").html(data)
			}
		  );
		  if(this.rules.checked){
		  return;
		  }else{
		  return false}; 
		});   
	});
	</script>
	
	<div id="menu" class="grid_3">	
		<form name="offline_square_form" id="offline_square_form" action="offline_square_post.php" method="post">
		<div id="tabdata">
					<div><a id="addnew" href="">Add</a></div>
					<div><input id="title" placeholder="title" name="article[0][title]" type="text" /></div>
					<div><input id="para" placeholder="paragraph" name="article[0][para]" type="text" /></div>
					<div><input id="headshot url" placeholder="headshot url" name="article[0][headshot_url]" type="text" /></div>
					<div></div>
		</div>
		<div id="panel">
		<input type="submit" value="Scoop!" id="publish"/>
		Export?<input type="checkbox" name="rules" />
		</div>
		</form>	
	</div>
		
	<div id="menu" class="grid_3">
		<div id="results"></div>
	</div>	
	
</div>	
</body>
</html>