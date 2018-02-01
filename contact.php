<?php

	require_once("admin/scripts/config.php");
	require_once("admin/scripts/connect.php");

	if(isset($_POST['name'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$message = $_POST['message'];
		$street = $_POST['street'];
		/*echo $name;
		echo $email;
		echo $message;
		echo $street;*/
		$direct = "contact.php";

		if($street === "") {
			$sendMail = submitMessage($name, $email, $subject, $message, $direct);
			echo "Street is empty";
			//alert("Your email has been sent!")
		}
	}
?>

<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <?php include 'includes/head.php';?>
    <title>CONTACT US - Team Canada 1972</title>
  </head>

  <body>
    <h1 class="hide">Team Canada 1972</h1>

    <?php include 'includes/header.php';?>

    <div id="contactPano">
      <section class="row">
        <div class="small-12 columns">
          <h2>GET IN TOUCH WITH US!</h2>
        </div>
      </section>
    </div>

    <div class="greyPano">
      <section class="row" id="contactCon">
        <h2 class="hide">Contact Information</h2>
        <p class="small-12 show-for-small-only columns" id="contactInfoMobile">To learn more about Team Canada 1972, upcoming events, or have any questions, please feel free to reach out by filling out our form. We will be sure to get back to you as soon as possible!</p>
        <div class="small-12 medium-6 columns">
          <form id="contactForm" action="contact.php" method="POST">
                <fieldset>
                    <legend class="hide">Contact Form</legend>

                    <label for="contactName">Name: (required)</label>
                    <input type="text" name="name" id="contactName" required size="30">

                    <label for="contactEmail">Email: (required)</label>
                    <input type="email" name="email" id="contactEmail" required size="30">

					<label class="hide" for="contactEmail">Street: </label>
                    <input class="hide" type="text" name="street" id="contactStreet" size="30">

                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" size="30">

                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="50" rows="7"></textarea>

                    <input type="submit" name="submit" id="submitForm" value="Send">
                </fieldset>
            </form>
        </div>

        <div class="medium-6 large-6 columns">
          <p class="hide-for-small-only" id="contactInfo">To learn more about Team Canada 1972, upcoming events, or have any questions, please feel free to reach out by filling out our form. We will be sure to get back to you as soon as possible!</p>

          <section id="partOpp">
            <h3>Partnership Opportunities:</h3>
            <p>For any information regarding partnering with the historic Team Canada 1972, please contact our <a href="mailto:BoardofDirectors@TeamCanada1972.ca">Board of Directors.</a></p>
          </section>
        </div>
      </section>
    </div>

    <?php include 'includes/footer.php';?>

        </div>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
