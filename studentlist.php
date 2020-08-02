<?php
    // 1. Create a database connection
    $dbhost = "66.147.242.186";
    $dbuser = "urcscon3_chicago";
    $dbpass = "project4chicago";
    $dbname = "urcscon3_chicago";
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


    // 2. Perform database query
    $query  = "SELECT * FROM classinfo";
    $result = mysqli_query($connection, $query);
?>

<?php include "inc/html_top.php"; ?>

<body class="container fgrid">
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

    <header class="spans">
        <h1>CSC 174</h1>
        <p>Advanced Front End Web Development is a class on front-end web design. The second in a series after CSC 170: Intro to Web Development, CSC 174 explores web page design technically through Hypertext Markup Language (HTML), databases edited locally and remotely in MySQL, code in PHP, and more. Our focus on visual design and organization is backed up by studies in how the eye moves and in brain & cognitive science. It's great to meet you!</p>
    </header>

    <div id = "f-page-div" class = "f-page">
        <?php
        // 3. Use returned data (if any)
        while($data = mysqli_fetch_assoc($result)) {
    ?>
<!-- instead of figure -->
        <section>
            <p><?php echo $data["quote"];?></p>
        </section>

        <article>
                <h2><?php echo $data["firstname"], " ", $data["lastname"];?></h2>
                <p><?php echo $data["info"];?></p>
        </article>

        <a href="<?php echo $data["link"];?>"><img src="images/stars_resized.png" alt="view page stars"><div>Read More!</div></a>
        
    <?php } ?>

</div>




    <?php include "inc/scripts.php"; ?>

</body>

</html>