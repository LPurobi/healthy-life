<?php include '_db_connect.php' ?>
<?php
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript"></script>
<script type="text/javascript" src="jconfirmaction.jquery.js"></script>
<script type="text/javascript">

	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});

</script>

<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="defaulf_style.css" />

</head>
<body>
	<!-- navbar -->
<?= include '_navbar.php' ?>
	<!-- end navbar -->
<div id="main_container">
    <div class="right_content">

    <h2>Content selection panel for Admin: </h2>

<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">User name</th>
            <th scope="col" class="rounded">E-mail</th>
            <th scope="col" class="rounded">Category</th>
            <th scope="col" class="rounded">Date</th>
						<th scope="col" class="rounded">Title</th>
						<th scope="col" class="rounded">Content</th>
            <th scope="col" class="rounded">Edit</th>
            <th scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="8" class="rounded-foot-left"></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody>
    	<tr>
        	<td><input type="checkbox" name="" /></td>
            <td>Purobi Rahman</td>
            <td>purobi@live.com</td>
            <td>lifestyle</td>
            <td>12/05/2010</td>
						<td>First Aid</td>
	         	<td>Some self-limiting illnesses(...)</td>
						<td><a href="#"><img src="admin images/user_edit.png" alt="" title="" border="0" /></a></td>
            <td><a href="#" class="ask"><img src="admin images/trash.png" alt="" title="" border="0" /></a></td>
        </tr>
    </tbody>
</table>
	 <a href="#" class="bt_green"><span class="bt_green_lft"></span><strong>Add new content</strong><span class="bt_green_r"></span></a>
     <a href="#" class="bt_blue"><span class="bt_blue_left"></span><strong>View all content from category</strong><span class="bt_blue_r"></span></a>
     <a href="#" class="bt_red"><span class="bt_red_lft"></span><strong>Delete Contents</strong><span class="bt_red_r"></span></a>
     </div>
</div>
</html>
