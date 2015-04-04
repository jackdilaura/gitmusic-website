<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact</title>
    <?php include('css_js.php'); ?>
</head>
<body>
    <!-- Navbar -->
    <?php include('navbar.php');?>
    <div class="container main-container">    
        <div class="row">    
            <div class="col-lg-12 text-center">
                <h1>Enter your contact info and message here.</h1>
            </div>
        </div>
        <form>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group">
                        <label for="InputEmail">Email address</label>
                        <input type="email" class="form-control" id="InputEmail" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="InputComments">Questions & Comments</label>
                        <textarea class="form-control" rows="3" placeholder="Enter your comments or questions on the project"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default pull-right" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>