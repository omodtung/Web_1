<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- Plugin file -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.css">
    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body>
    <div class="container">




        <!--Section: Contact v.2-->
        <section class="section">

            <!--Section heading-->
            <h2 class="section-heading h1 pt-4">Contact us</h2>
            <!--Section description-->
            
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 col-xl-9">
                    <form id ="contact-form" name="contact-form" action="BE/mail.php" method="POST"  onsubmit="return validateForm()" >

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="name" name="name" class="form-control">
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form">
                                    <div class="md-form">
                                        <input type="text" id="email" name="email" class="form-control">
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="center-on-small-only">
                        <a class="btn btn-primary" onclick="validateForm()">Send</a>
                    </div> <div class="status" id="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-xl-3">
                    <ul class="contact-icons">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->




    </div>

    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>
    <!--Custom scripts-->
    <!-- <script>

function validateForm() {
    var x =  document.getElementById('name').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Name cannot be empty";
        return false;
    }
    x =  document.getElementById('email').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Email cannot be empty";
        return false;
    } else {
        // var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;


        let email  =document.forms["contact-form"]["email"].value;
        // console.log("test"+email);
        // if(!re.test(x)){
        //     document.getElementById('status').innerHTML = "Email format invalid";
        //     return false;
        // }

        if(email.search(/^.+@.+\..+$/i) == -1) {
    alert("Email chưa đúng định dạng <sth>@<sth>.<sth>");
    return false;
}
    }
    x =  document.getElementById('subject').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Subject cannot be empty";
        return false;
    }
    x =  document.getElementById('message').value;
    if (x == "") {
        document.getElementById('status').innerHTML = "Message cannot be empty";
        return false;
    }
 //get input field values data to be sent to server
//     document.getElementById('status').innerHTML = "Sending...";
//     formData = {
//         'name'     : $('input[name=name]').val(),
//         'email'    : $('input[name=email]').val(),
//         'subject'  : $('input[name=subject]').val(),
//         'message'  : $('textarea[name=message]').val()
//     };


//    $.ajax({
//     url : "mail.php",
//     type: "POST",
//     data : formData,
//     success: function(data, textStatus, jqXHR)
//     {

//         $('#status').text(data.message);
//         if (data.code) //If mail was sent successfully, reset the form.
//         $('#contact-form').closest('form').find("input[type=text], textarea").val("");
//     },
//     error: function (jqXHR, textStatus, errorThrown)
//     {
//         $('#status').text(jqXHR);
//     }
// });

document.getElementById('status').innerHTML = "Sending...";
    document.getElementById('contact-form').submit();


}
    </script> -->

    <script src="script.js"></script>





</body>

</html>