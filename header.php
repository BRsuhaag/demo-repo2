<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handmade</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    
</head>
<body>
    <nav class="navbar">
        <button class="btn btn-outline-secondary ms-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
            <img src="img/menu_button.svg" alt="Menu" style="width: 24px; height: 24px; vertical-align: middle;">
        </button>

        <div class="offcanvas offcanvas-start bg-light" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="list-group pt-3">
                    <a class="list-group-item list-group-item-action" href="index.php">Home</a>
                    <a class="list-group-item list-group-item-action" href="add-data.php">Add Item</a>
                    <a class="list-group-item list-group-item-action" href="edit-data.php">Edit Item</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4">Another Item</a>
                </div>
            </div>
        </div>

        <div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#"><img src="https://cdn-icons-png.flaticon.com/512/9187/9187604.png" alt="Shopping Cart"></a></li>
            </ul>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>