<!DOCTYPE html>
<html>
<head>
	 <!-- this is bootstrap4 -->
     <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>Assets/css/style.css">
     <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>Assets/css/bootstrap.min.css">
     <link rel="shortcut icon" href="https://i.imgur.com/i4gDwUP.png" type="image/png">
     <title>Wettped</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom">
        <div class="navbar-nav navbar-left mr-5">
            <a href="#"><img class="pr-1" src="<?= base_url('img/back.svg'); ?>" width="24px"></a>
            <div>
                <p class="mb-0 small">Add story info</p>
                <span class="h4">Story Tittle</span>
            </div>
        </div>
        <div class="navbar-nav navbar-right ml-auto">
            <div class="">
                <a class="btn btn btn-secondary mr-3" href="<?= base_url('home/halaman_cerita'); ?>">Cancel</a>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-3">
                <!-- <div class="img-container">
                        <img src="https://via.placeholder.com/195x304" width="195px" height="304px">
                        <div class="centered">
                            <img src="<?= base_url('img/frame-landscape.svg'); ?>" width="60px" height="60px">
                        </div>
                        <input type="file" name="image">
                </div> -->
            </div>
            <div class="col-md-9 border rounded">
                <div class="row">
                        <div class="col-md-12 border-bottom">
                                <button class="btn" style="border-bottom: 3px solid dodgerblue">
                               All Story
                               </button>
                        </div>
                        <div class="col-md-12">
                                <form action="" method="POST">
                                        <fieldset>
                                          <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" name="title" id="inputtitle" class="form-control" placeholder="Title. .">
                                            <small class="form-text text-danger"><?= form_error('title'); ?></small>
                                          </div>
                                          <div class="form-group">
                                                <label for="description">Description</label>
                                                <textarea name="description" id="inputdesc" class="form-control" cols="30" rows="10"></textarea>
                                                <small class="form-text text-danger"><?= form_error('description'); ?></small>
                                          </div>
                                          <div class="form-group">
                                            <label for="genre">Genre</label>
                                            <select class="form-control" id="inputgen" name="genre">
                                              <option value="Action">Action</option>
                                              <option value="Comedy">Comedy</option>
                                              <option value="Romance">Romance</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="genre">Story</label>
                                            <textarea name="story" class="form-control" id="inputsto" cols="30" rows="30"></textarea>
                                            <small class="form-text text-danger"><?= form_error('body'); ?></small>
                                          </div>
                                          </fieldset>
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                        </fieldset>
                                      </form>
                        </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="Assets/js/function.js" ></script>
</body>
</html>