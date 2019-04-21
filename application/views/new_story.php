<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top border-bottom">
        <div class="navbar-nav navbar-left mr-5">
            <a href="#"><img class="pr-1" src="Assets/img/back.svg" width="24px"></a>
            <div>
                <p class="mb-0 small">Add story info</p>
                <span class="h4">Story Tittle</span>
            </div>
        </div>
        <div class="navbar-nav navbar-right ml-auto">
            <div class="">
                <button class="btn btn-secondary mr-3">
                    Cancel
                </button>
            </div>
        </div>
    </nav>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="img-container">
                        <img src="https://via.placeholder.com/195x304" width="195px" height="304px">
                        <div class="centered">
                            <img src="Assets/img/frame-landscape.svg" width="60px" height="60px">
                        </div>
                        <input type="file" name="image">
                </div>
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
                                            <label for="inputtitle">Title</label>
                                            <input type="text" name="title" class="form-control" id="inputtitle" placeholder="title">
                                          </div>
                                          <div class="form-group">
                                                <label for="inputdesc">Description</label>
                                                <textarea name="description" id="inputdesc" class="form-control" cols="30" rows="10"></textarea>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputgen">Genre</label>
                                            <select class="form-control" id="inputgen" name="genre">
                                              <option value="Action">Action</option>
                                              <option value="Comedy">Comedy</option>
                                              <option value="Romance">Romance</option>
                                            </select>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputsto">Story</label>
                                            <textarea name="body" class="form-control" id="inputsto" cols="30" rows="30"></textarea>
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