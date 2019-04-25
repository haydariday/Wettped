<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url(); ?>Assets/css/style.css">
	<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>Assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>Assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="https://i.imgur.com/i4gDwUP.png" type="image/png">
    <title>Wettped</title>
</head>
<body>
    <div class="container m-5 p-5">
        <header class="text-left px-2 py-4">
            <h1>Stories</h1>
        </header>
        <!-- genre -->
        <div class="container border shadow my-2 d-block">
                <div class="py-2">
                    <p>Refine by genre:</p>
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-secondary active">
                              <input type="radio" name="options" id="option1" autocomplete="off" checked> Action
                            </label>
                            <label class="btn btn-secondary">
                              <input type="radio" name="options" id="option2" autocomplete="off"> Romance
                            </label>
                            <label class="btn btn-secondary">
                              <input type="radio" name="options" id="option3" autocomplete="off"> Comedy
                            </label>
                    </div>  
                </div>
        </div>
        <!-- end of genre -->
        <!-- search -->
        <div>
            <input id="search-field" type="search" class="form-control border-0 bg-white ">
        </div>
        <!-- end of search -->
        <div class="border shadow my-2 p-2 d-block">
            <div class="row mx-3">
                    <!-- content -->
                    <div class="col-md-6 mb-4">
                        <div class="story">
                            <div class="row">
                                <div class="media col-md-6">
                                    <a href="#"><img class="mr-1" src="https://via.placeholder.com/142x222" width="142px" height="222px"></a>
                                    <div class="media-body">
                                        <a href="#">Judul</a>
                                        <div><small class="text-muted">By Name</small></div>
                                        <div class="text-muted" style="width: 295px; height: 155px;text-overflow: ellipsis; overflow: hidden;">
                                        deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini deskripsinya disini
                                        </div>
                                        <div><small>Genre</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- end of content -->
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