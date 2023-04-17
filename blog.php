<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="style.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

</head>

<body>

    <?php include "header.html"?><br>

    <!--<div class="blog-heading"><br>

        <h3>My Blog</h3>
    </div>
    <div class="blog-container row" id="blogs">

        <div class="blog-box">
            <div class="blog-img">
                <img src="images/img12.jpg" alt="blog">
            </div>
            <div class="blog-text">
                <span>18 July 2021 / Web Design</span>
                <a href="#" class="blog-title">What has happened of all the design web</a>
                <a href="#">Read more ...</a>
            </div>
        </div>




    <script>
    $(document).ready(function() {
        $.getJSON("information.json", function(data) {
            var info = '';

            $.each(data.posts, function(key, value) {

            });

            $('#blogs').append(info);
        });
    });
    </script>

</body>

</html>