<?php 
include 'config.php';

if(empty($_POST['email']) and empty($_POST['subject']) and empty($_POST['message'])){
  $sent = false;
  require($sRoot."templates/email.php");
  $sent = sendEmail($_POST['subject'], "FROM: ".$_POST['email']."<br><br>".$_POST['message']);
}

include $sRoot.'templates/head.php';
include $sRoot.'templates/sidebar.php';
?>

<div class="row py-3"> <!-- Title Row-->
  <div class="col-sm-4"></div>
  <div class="col-sm-8 border-bottom border-dark">
    <h1><em>Contact</em></h1>
  </div>
</div>
<br>

<?php if(isset($sent)){ ?>
  <div class="alert alert-<?=$sent? "success": "warning"?>">
  <?=$sent? "Your message was sent.": "An error occurred. Please try again."?>
  </div>
<?php }?>
<p>
  Fill out the form below to contact me. All fields are required.
</p>
<form method="POST" action="post.php" autocomplete="off">
  <div class="form-row mb-3">
    <div class="col-sm-3">
      <label>Your Email</label>
      <input class="form-control" type="text" name="email" placeholder="therealdr@evil.com">
    </div>
    <div class="col-sm-10">
      <label>Subject</label>
      <input class="form-control" type="text" name="subject" placeholder="RE: Sharks">
    </div>
  </div>
  <div class="row">
    <div class="col">
      <label>Message</label>
      <textarea class="form-control" rows="20" name="message" 
      placeholder="You know I have one simple request, and that is to have sharks with FRIKIN' LASER BEAMS ATTACHED TO THEIR HEADS!"></textarea>
    </div>
  </div>

  <hr>
  <button class="btn btn-primary" type="submit">Send Email</button>
    
</form>

<?php include $sRoot.'templates/footer.php'; ?>
</html>