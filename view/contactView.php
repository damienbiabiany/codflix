

<?php ob_start(); ?>

<head>
    <meta charset="utf-8" />
    <title>Cod'Flix</title>

    <link href="public/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/lib/font-awesome/css/all.min.css" rel="stylesheet" />

    <link href="public/css/partials/partials.css" rel="stylesheet" />
    <link href="public/css/layout/layout.css" rel="stylesheet" />
  </head>

<div class="media-list">

 
    <div class="container">
      <div style="text-align:center">
        <h2>Contact Us</h2>
        <p>Swing by for a cup of coffee, or leave us a message:</p>
      </div>
      <div class="row">
        <div class="column">
          <img src="/w3images/map.jpg" style="width:100%">
        </div>
        <div class="column">
          <form action="/action_page.php">
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            <label for="country">Country</label>
            <select id="country" name="country">
              <option value="australia">Australia</option>
              <option value="canada">Canada</option>
              <option value="usa">USA</option>
            </select>
            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
            <input type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
            
    </div>
  
    

<?php $content = ob_get_clean(); ?>

<?php require('dashboardView.php'); ?>
