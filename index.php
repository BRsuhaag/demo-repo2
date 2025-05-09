<?php
include "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px; /* Add some space between cards */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
            transition: transform 0.3s ease-in-out; /* Add a smooth hover effect */
        }

        .card:hover {
            transform: scale(1.05); /* Slightly scale up on hover */
        }

        .card-img-top {
            max-height: 200px; /* Limit the height of the image */
            object-fit: cover; /* Ensure the image covers the area without distortion */
        }
    </style>
</head>
<body>
    <div class="container py-5"> <div class="row row-cols-1 row-cols-md-3 g-4"> <div class="col">
                <div class="card h-100"> <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/330px-HTML5_logo_and_wordmark.svg.png" class="card-img-top" alt="HTML5 Logo">
                    <div class="card-body">
                        <h5 class="card-title">HTML5</h5>
                        <p class="card-text">HTML elements are the building blocks of HTML pages. With HTML constructs, images and other objects such as interactive forms may be embedded into the rendered page.</p>
                        <a href="https://en.wikipedia.org/wiki/HTML" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://camo.githubusercontent.com/199d38eeb4d2e72bca9bdb11a7eb29a39049f45da886883e8520698e16db6a35/68747470733a2f2f75706c6f61642e77696b696d656469612e6f72672f77696b6970656469612f636f6d6d6f6e732f642f64352f435353335f6c6f676f5f616e645f776f72646d61726b2e737667" class="card-img-top" alt="HTML5 Logo">
                    <div class="card-body">
                        <h5 class="card-title">CSS</h5>
                        <p class="card-text">CSS is designed to enable the separation of content and presentation, including layout, colors, and fonts.[4] This separation can improve content accessibility, since the content can be written without concern for its presentation</p>
                        <a href="https://en.wikipedia.org/wiki/CSS" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjmSKg-spaAYZkdDjIh_AojKBZyyIUftXBnuz6YRI9IA&s&ec=72940545" class="card-img-top" alt="HTML5 Logo">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript</h5>
                        <p class="card-text">JavaScript is a high-level, often just-in-time–compiled language that conforms to the ECMAScript standard. It has dynamic typing, prototype-based object-orientation, and first-class functions.</p>
                        <a href="https://en.wikipedia.org/wiki/JavaScript" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php
include "footer.php";
?>