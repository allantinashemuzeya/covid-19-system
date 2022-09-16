<!DOCTYPE html>
<html>

<!-- Mirrored from nextpath.co.za/VerifyResults by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 22:39:25 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />

    <title>Verify Results | NextPath Registration Portal</title>



    <link rel="stylesheet" href="lib/fontawesome/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&amp;family=Roboto:wght@300&amp;display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="lib/dm-file-uploader/css/jquery.dm-uploader.min.css" />
    <link rel="stylesheet" href="lib/select2/css/select2.min.css" />


    <link rel="stylesheet" href="css/site25e8.css?v=25BqWgxqBWj3SttJ38AUvXjzmMBVqsQj565Jge8CBnw" />
</head>

<body class="bg-primary">

    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="Account/SignInfab1.html"><img src="images/logo-v3.png" alt="NextPath"
                    style="width: 315px; height: 80px;"></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-right mt-5 mt-md-0">

                        <a class="nav-link py-0 my-0" href="mailto:info@nextpluspathology.co.za"><i
                                class="fas fa-envelope"></i> info@nextpath.co.za</a>
                        <a class="nav-link py-0 my-0" href="tel:+27845899764"><i class="fas fa-phone"></i> 084 589
                            9764</a>

                    </li>
                    <li class="nav-item">

                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')
    
    <footer class="footer py-3 bg-primary text-white">
        <div class="container">
            <p class="small">&copy; 2021 NextPath</p>
        </div>
    </footer>



    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="js/site746d.js?v=47DEQpj8HBSa-_TImW-5JCeuQeRkm5NMpJWZG3hSuFU"></script>




    <script src="lib/jquery-validation/jquery.validate.min.js"></script>
    <script src="lib/jquery-validation-unobtrusive/jquery.validate.unobtrusive.min.js"></script>
    <script src="lib/jquery-mask-plugin/jquery.mask.min.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="../www.google.com/recaptcha/api.js" async defer></script>

    <script type="text/html" id="spinner-template">
        <span class="spinner-border spinner-border-sm"></span>
        Finding...
    </script>

    <script>
        $(document).ready(function() {

            $("form").data("validator")
                .settings
                .submitHandler = function(form) {

                    var spinnerHtml = $('#spinner-template').html();
                    var button = $(form).find('button[type="submit"]');

                    button.html(spinnerHtml);
                    button.prop('disabled', true);

                    form.submit();
                };

        });
    </script>

</body>

<!-- Mirrored from nextpath.co.za/VerifyResults by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Oct 2021 22:39:30 GMT -->

</html>
