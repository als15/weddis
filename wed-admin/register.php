
	<?php
	require_once('head.php');
	?>

    <body class="account">
        <div class="container">
            <div class="row">
                <div class="account-col text-center">
                    <h1>Horizon-Admin</h1>
                    <h3>Create New account</h3>
                    <form class="m-t" role="form" action="index.php">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username" required="">
                        </div>
                         <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Passowrd" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Repeat Passowrd" required="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block ">Signup</button>
                        <a href="#"><small></small></a>
                <p class=" text-center"><small>Already have an account?</small></p>
                <a class="btn  btn-default btn-block" href="register.php">Log into account</a>
                <p>Horizon-Admin Admin &copy; 2016</p>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js"></script>
        <script src="js/pace.min.js"></script>
    </body>
</html>
