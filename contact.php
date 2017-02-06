<?php
$pageTitle = "Discover Music | Contact";
?>
<?php include("inc/header.php"); ?>

  <div id="contact-background" class="subpage-background">
    <form id="contact-form">
      <h1 id="contact-heading">Submit Enquiry</h1>
      <div id="form-fields">
        <label for="first-name">First Name</label><br>
        <input type=text id="first-name" tabindex="1"><br>
        <label for="last-name">Last Name</label><br>
        <input type=text id="last-name" tabindex="2"><br>
        <label for="email">Email Address</label><br>
        <input type=text id="email" tabindex="3"><br>
        <label for="phone-number">Contact Number</label><br>
        <input type=text id="phone-number" tabindex="4"><br>
        <label for="instrument">Which Instrument</label><br>
        <input type=text id="instrument" tabindex="5"><br>
        <label for="enquiry">How can we help you?</label><br>
        <textarea id="enquiry" tabindex="6"></textarea>
      </div>
      <button type="submit" id="submit-button">Submit</button>
    </form>
  </div>

      <script   src="https://code.jquery.com/jquery-3.1.0.js"   integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="   crossorigin="anonymous"></script>
      <script src="js/scripts.js"></script>
</body>
<?php include("inc/footer.php"); ?>
