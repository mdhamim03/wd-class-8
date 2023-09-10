<?php
    session_start();
    include './Database/env.php';
    $query = "SELECT * FROM post";
    $compleat = mysqli_query($conn,$query);
    $fatchs = mysqli_fetch_all($compleat,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">Hamim</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./index.php">Add Post</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="col-lg-8 mx-auto mt-5">
    <div class="card p-0">
        <div class="card-header text-center">
            <h2>✅All Post</h2>
        </div>
        <div class="card-body bg-dark">
            <table class="table">
                <tr class="table-danger">
                    <th>id</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Action</th>
                </tr>
                <?php
                    foreach($fatchs as $key=>$fatch){
                        ?>
                        <tr>
                            <td class="table-dark"><?=++$key?></td>
                            <td class="table-warning"><?=$fatch['title']?></td>
                            <td class="table-info"><?=$fatch['name']?></td>
                            <td class="table-success"><?=strlen($fatch['detail']) > 50 ? substr($fatch['detail'],0,50).'..' : $fatch['detail']?></td>
                            <td>
                                <a href="./editPost.php" class="btn btn-sm btn-warning">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">delete</a>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
    </div>
</div>



</body>
</html>
<?php
    session_unset();
?>