<?php include '_db_connect.php' ?>
<?php
$sql = "SELECT * FROM posts WHERE approved = 0";
$result = $conn->query($sql);
$data = [];
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
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
<?= include '_navbar.php'; ?>
	<!-- end navbar -->
<div id="main_container">
    <div class="right_content">
    <h2>Content selection panel for Admin: </h2>
    <form action="approve_by_admin.php" method="post">

<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
        	<th scope="col" class="rounded-company"></th>
            <th scope="col" class="rounded">User name</th>
            <th scope="col" class="rounded">E-mail</th>
            <th scope="col" class="rounded">Category</th>
            <th scope="col" class="rounded">Date</th>
						<th scope="col" class="rounded">Title</th>
            <th scope="col" class="rounded">Image-url</th>
						<th scope="col" class="rounded">Content</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="6" class="rounded-foot-left"></td>
        	<td class="rounded-foot-right">&nbsp;</td>
        </tr>
    </tfoot>
    <tbody>
			<?php foreach ($data as $row): ?>
    	<tr>
        	<td><input type="checkbox" name="posts[]" value=<?= $row['id'] ?> /></td>
            <td><?= $row['user_name'] ?></td>
            <td><?= $row['user_email'] ?></td>
            <td><?= $row['category'] ?></td>
            <td><?= $row['published_at'] ?></td>
						<td><?= $row['title'] ?></td>
            <td><?= $row['post_image_url'] ?></td>
	         	<td><?= mb_strimwidth($row['contents'], 0, 100) ?></td>
        </tr>
			<?php endforeach;?>
      <tr>
        <td>Action:</td>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td>
          <button type="submit" name="approve" class="btn btn-success btn-md pull-right">Approve</button>
        </td>
        <td>
        <button type="submit" name="delete" class="btn btn-danger btn-md pull-right">Delete</button>
      </td>
      </tr>
    </tbody>
</table>
   </form>
</div>
</html>
