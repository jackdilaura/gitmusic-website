<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Feedback</title>
    <?php include('css_js.php'); ?>
</head>
<body>
<!-- Navbar -->
    <?php include('navbar.php');?>
    <div class="container main-container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>A quick survey of your thoughts on the project.</h1>
            </div>
        </div>
        <form action="fb_processor_2.php" method="post" class="form-horizontal">
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="InputEmail">Email address</label>
                    <input type="email" class="form-control" id="InputEmail" placeholder="Enter email" name="email" required />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="InputName">Name</label>
                    <input type="text" class="form-control" id="InputName" placeholder="Enter name" name="name" required />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">Are you interested in using online collaborative tools to make music?</label>
                    <div class="radio">
                        <label><input type="radio" name="question1" id="question1Radio1" value="Yes"> Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="question1" id="question1Radio2" value="No"> No</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">Do you currently use any online collaborative music apps?</label>
                    <div class="radio">
                        <label><input type="radio" name="question2" id="question2Radio1" value="Yes"> Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="question2" id="question2Radio2" value="No"> No</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">If so, which app do you use?</label>
                    <input type="text" class="form-control" placeholder="Enter the name of any web apps you use for online music collaboration here" name="question3" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">What environments could you see yourself using this software in?</label>
                    <div class="radio">
                        <label><input type="radio" name="question4" id="question4Radio1" value="Professional"> Professional Studio</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="question4" id="question4Radio2" value="Home"> Home Studio</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="question4" id="question4Radio3" value="Traveling"> Traveling</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="question4" id="question4Radio4" value="Education"> Education</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">Which of the following features would you like to see?</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q5a1" value="Full DAW Integration"> Full DAW Integration</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q5a2" value="Cross Platform Support"> Cross Platform Support (Mac, PC, Linux etc.)</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q5a3" value="Mobile Support"> Mobile Support</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q5a4" value="In-App Editing"> In-App Session File Editing</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q5a5" value="Social Media Elements"> Social Media Style Profiles and Comments</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">Which of the following DAWs would you like supported?</label>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q6a1" value="Pro Tools"> Pro Tools</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q6a2" value="Ableton"> Ableton Live</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q6a3" value="Logic"> Apple Logic</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="q6a4" value="Fl Studio"> FL Studio</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="form-group">Are you interested in sponsored competitions with prizes for your work?</label>
                    <div class="radio">
                        <label><input type="radio" name="question7" id="question6Radio1" value="Yes"> Yes</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" name="question7" id="question6Radio2" value="No"> No</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <label for="InputComments">Questions and Comments</label>
                    <textarea class="form-control" rows="3" placeholder="Enter your comments and questions on the project" name="comments"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button class="btn btn-default pull-right" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
