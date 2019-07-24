<?php 
    $page_title = 'Homepage';
    include_once'includes/header.php';
    include_once'config/Session.php';    
?>

<div class="jumbotron">
	<div class="container text-center">
		<h1>Welcome to Iann's Salon!</h1>
		<?php 
            if(!isset($_SESSION['username'])):
        ?>
        <div id="loreg">
            <ul class="list-inline">
                <li>
                    <a class="btn btn-primary btn-lg" href="login.php">Login</a>
                </li>
                <li>
                    <a class="btn btn-primary btn-lg" href="register.php">Register</a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <div id="usr">
            <p>
                Today is <b><?php echo date('Y-m-d'); ?></b>. You're logged in as <?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a>
            </p>
        </div>
        <?php endif; ?>
        </div>
	</div>
</div>
<div class="container">
        <div class="row">
            <div class="col-md-6"><h3 class="text-center">Today's Employee</h3></div>
            <div class="col-md-6"><h3 class="text-center">Status</h3></div>
        </div>
        </div>
<?php include_once'includes/footer.php'; ?>
