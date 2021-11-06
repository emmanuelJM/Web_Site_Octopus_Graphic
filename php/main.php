<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Web Octopus Graphic, here we help you with all the visual communication problems you need.">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="Emmanuel Jarquin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex" />

    <!-- Font CSS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <!-- CSS -->

    <link rel="stylesheet" href="/CSS/main.css">

    <!-- Icons CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

    <!-- jquery -->

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Octopus Graphic</title>
    <link rel="shortcut icon" href="/Img/Icon_web.ico">

    <!-- canonical -->

    <link rel=“canonical” href=“https://www.octopus-graphic.glitch.me” />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-RWC7Z0XSP2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-RWC7Z0XSP2');
</script>

</head>

<body>

<?php 
$myemail = 'emaj0510@gmail.com';
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Name: $name \n Email: $email \n phone: $phone \n Mensaje: \n $message"  ;
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

    <!-- Start header -->

    <div class="menuContainer menuContainerContactsUS"></div>

    <!-- End header -->

    <span class="ir-arriba icon-arrow-up2"><i class="fas fa-chevron-up"></i></span>

    <!-- Start Body -->

    <div class="container-body">


        <div class="row row-fluid">

          <div class="col-sm">
            
          </div>

          <div class="col-sm">

          <form action="/php/main.php" method="get">

              <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Your Name</label>
              <input type="text" class="form-control" name="name" id="FormControlName" placeholder="Your Name">

              <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Your Email</label>
              <input type="email" class="form-control" name="email" id="FormControlEmail" placeholder="Your Email">

              <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Your Phone</label>
              <input type="tel" class="form-control" name="phone" id="FormControlPhone" placeholder="Your Phone">

            <label for="exampleFormControlInput1" class="form-label form-label-ContactsUs">Service to consult</label>
            <select class="form-select" aria-label="Default select example">
              <option selected>Open this select menu</option>
              <option value="1">Graphic Design</option>
              <option value="2">Illustration</option>
              <option value="3">WebDesign</option>
            </select>

            <label for="exampleFormControlTextarea1" class="form-label form-label-ContactsUs">Example textarea</label>
            <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="6"></textarea>

          <input type="submit" class="btn btn-primary" value="Send">

          </form>

          </div>

        </div>


    </div>

    <!-- End Body -->

    <!-- Start Footer -->

    <div class="footerContainer"></div>

    <!-- End Footer -->

    <!-- End header-2 -->

    <!-- script menu  -->

  <!-- script menu  -->

  <script>
    $(document).ready(function () {
      $('.menuContainer').load('/Widget/header.html');
    });
  </script>

  <!-- script My Work  -->

  <script>
    $(document).ready(function () {
      $('.MyWorkContainer').load('/Widget/MyWork.html');
    });
    </script>

    <script>
    $(document).ready(function () {
      $('.LatestProjectsGraphicDesign').load('/Widget/LatestProjectsGraphicDesign.html');
    });
    </script>

    <script>
    $(document).ready(function () {
      $('.LatestProjectsIllustration').load('/Widget/LatestProjectsIllustration.html');
    });
    </script>

    <script>
    $(document).ready(function () {
      $('.LatestProjectsWebDesign').load('/Widget/LatestProjectsWebDesign.html');
    });
    </script>

    <!-- script modal  -->

    <script>
      $(document).ready(function () {
      $('.Modal').load('/Widget/Modal.html');
      });
    </script>

    <!-- script footer  -->

    <script>
      $(document).ready(function () {
        $('.footerContainer').load("/Widget/footer.html");
      });
    </script>
    <!-- Bootstrap Js  -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Icons Js  -->

    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/v4-shims.js"></script>

    <!-- Js  -->

    <script defer src="/JS/main.js"></script>

</body>
</html>