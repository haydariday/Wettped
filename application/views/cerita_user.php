<!DOCTYPE html>
<html lang="en">
<head>
    <!-- this is bootstrap4 -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>Assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>Assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://i.imgur.com/i4gDwUP.png" type="image/png">
    <title>Wettped</title>
</head>
<body>
    <nav  class=""></nav>
    <div class="container mt-5 pt-3">
        <div class="row">
            <div class="col-md-9">
                <header class="container">
                    <h2 class="d-flex">
                        <strong class="mr-auto">My Story</strong>
                        <a href="#" class="btn btn-primary text-right" style="">+ New Story</a>
                    </h2>
                </header>
                <div class="card border-rounded shadow">
                    <div>
                         <button class="btn" style="border-bottom: 3px solid tomato">
                        All Story
                        </button>
                    </div>
                    <div class="card-item">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="row">
                                     <div class="col-md-6">
                                        <a href="#">
                                        <div class="media">
                                            <img class="mr-1" src="https://via.placeholder.com/80x125" alt="Generic placeholder image" style="width:80; height:125;">
                                            <div class="media-body">
                                                <strong>Judul</strong>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dropdown">
                                                <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown">
                                                </button>
                                                <ul class="dropdown-menu">
                                                        <li>
                                                        <a href=""><img src="<?= base_url('eye.svg'); ?>" width="30px">View as reader</a>
                                                        </li>
                                                        <div class="dropdown-divider"></div>
                                                        <li>
                                                         <a href=""><img src="<?= base_url('garbage.svg'); ?>" width="30px">Delete story</a>   
                                                        </li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- this is jquery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Assets/js/function.js" ></script>
</body>
</html>