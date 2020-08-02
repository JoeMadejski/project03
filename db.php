<!doctype html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <!-- Override CSS -->
  <link rel="stylesheet" type="text/css" href="css/override.css">

  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="css/nav.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto+Mono&display=swap" rel="stylesheet">

	<title>Your Account</title>
</head>
<body class="container dbgrid">
<?php
// connect to the database
include('connect-db.php');

// get results from database
$result = mysqli_query($connection, "SELECT * FROM classinfo");
?>

  <nav class="menu">
         <a href="index.php">
            <figure id="padlogo">
                <img src="images/logo_small.png" alt="Class Logo">
            </figure>
        </a>
    <ul>
      <li><a href="index.php">Home</a></li>
    </ul>
  </nav>

<table border>
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Blurb</th>
    <th>Quote</th>
    <th>Link</th>
    <th colspan="2"><em>functions</em></th>
  </tr>
<?php
// loop through results of database query, displaying them in the table
while($row = mysqli_fetch_array( $result )) {
?>
  <tr>
    <td><?php echo $row['firstname']; ?></td>
    <td><?php echo $row['lastname']; ?></td>
    <td><?php echo $row['info']; ?></td>
    <td><?php echo $row['quote']; ?></td>
    <td><?php echo $row['link']; ?></td>
    <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
    <td><a onclick="return confirm('Are you sure you want to delete: <?php echo $row["firstname"] . " " . $row["lastname"]; ?>?')" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
<?php
// close the loop
}
?>
</table>

<div>
  <a class="btn btn-info" href="new.php">Add a new record</a>
</div>

<!-- Javascript for Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
<?php
  mysqli_free_result($result);
  mysqli_close($connection);
?>