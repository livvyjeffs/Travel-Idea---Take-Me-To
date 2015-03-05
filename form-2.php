<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Travel Idea</title>

  <!-- JQuery CDN -->
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
  <script type="text/javascript" src="javascripts/bootstrap.js"></script>

  <!-- Stylesheets -->
  <link href="stylesheets/styles.css" rel="stylesheet">
  <link href="stylesheets/mainpage.css" rel="stylesheet">

</head>

<body>

  <div id="background">

    <div id="central-container">
     <!-- Registration form - START -->

     <form role="form">
      <div class="col-lg-12" id="form-container">
        <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
        <div class="form-group">
          <label for="InputName">Enter Name</label>
          <div class="input-group">
            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div>
        <div class="form-group">
          <label for="InputEmail">Enter Email</label>
          <div class="input-group">
            <input type="email" class="form-control" id="InputEmailFirst" name="InputEmail" placeholder="Enter Email" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div>
        <div class="form-group">
          <label for="InputEmail">Confirm Email</label>
          <div class="input-group">
            <input type="email" class="form-control" id="InputEmailSecond" name="InputEmail" placeholder="Confirm Email" required>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div>
        <div class="form-group">
        <label for="InputMessage">Tell us why you want to travel to Thailand, what are you hoping to experience?</label>
          <div class="input-group">
            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
            <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
          </div>
        </div>
        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
      </div>
    </form>

    <!-- Registration form - END -->
  </div>
</div>
</body>

<script type="text/javascript" async src="javascripts/mainpage.js"></script>

</html>