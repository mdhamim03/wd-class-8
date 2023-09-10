





<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form action="./controller/fromValidation.php" method="post">
                <h2 class="text-center"><strong>Edit</strong> your Post</h2>
                <div class="form-group">
                    <input class="form-control" name="title" type="text" placeholder="Enter Title">
                    <?php
                                if(isset($_SESSION['fromControl']['title_error'])){
                                ?>
                                    <span class="text-danger"><?=$_SESSION['fromControl']['title_error']?></span>
                                    <?php
                                }
                            ?>
                </div>
                <div class="form-group">
                    <input class="form-control" name="name" type="text" placeholder="Enter name">
                    <?php
                                if(isset($_SESSION['fromControl']['name_error'])){
                                ?>
                                    <span class="text-danger"><?=$_SESSION['fromControl']['name_error']?></span>
                                    <?php
                                }
                            ?>
                </div>
                <div class="form-group">
                    <input class="form-control"name="details" type="text" placeholder="Enter details">
                    <?php
                                if(isset($_SESSION['fromControl']['detail_error'])){
                                ?>
                                    <span class="text-danger"><?=$_SESSION['fromControl']['detail_error']?></span>
                                    <?php
                                }
                            ?>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary " type="submit">Post</button>
                    <a href="./allPost.php" class="btn btn-info">View Post</a>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>

</html>
    <?php
    session_unset();
?>