<?php
  include_once 'header.php';
?>

<html>
    <head>
        <title>Contact us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <<link rel="stylesheet" href="../style/stylesheet.css"/>>
    </head>

    <body>
        <section class="contact">
            <h1>Contact us</h1>
            <form method="post" action="includes/subscriberform.php" align="center">



                <textarea name ="subject" rows="2" cols="50" placeholder="Subject" contenteditable="true"></textarea><br>
                <textarea name="message" rows="10" cols="50" placeholder="Body" required></textarea><br>


                <input type="submit">


            </form>
            <h2>Email: atheltisize@gmail.com <br>
                Phone Number:  917-633-9974<br>
                Best time to contact: 10am-5pm.
            </h2>
        </section>
    </body>
</html>

<?php
  include_once 'footer.php';
?>