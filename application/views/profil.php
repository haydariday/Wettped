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
        <div class="app-container">
            <header id="background">
                <!-- avatar -->
                <div id="avatar-user" class="text-center">
                    <div id="wrapper" class="mr-auto">
                        <img id="avatar-image" src="<?= base_url('img/User LOGO.png'); ?>">
                    </div>
                    <h3 id="profilename" style="text-shadow:0.1em 0.1em 0.2em gray">USERNAME</h3>
                    <div class="d-flex">
                        <p class="mx-auto" id="alias">@USERNAME</p>
                    </div>    
                    <div id="work" class="row">    
                        <div class="text-center">
                            <p>0</p>
                            <p>Works</p>
                        </div>
                    </div>
                    <div id="tab">
                        <div id="navs">
                            <nav class="navbar navbar-expand-sm navbar-light bg-light">
                                <div class="container">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Conversation</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Following</a>
                                            </li>
                                        </ul>
                                        <ul class="navbar-nav">
                                            <button type="button" class="btn btn-outline-secondary">
                                                <img id="setting-icon" src="https://i.imgur.com/4XLTGJF.png" width="25px">
                                                <span>Edit Profile</span>
                                            </button>
                                        </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            <!-- end of avatar -->
            </header>
            <!-- Main About -->
            <main class="container">
                <!-- user information -->
                <div id="user-information" class="row">
                    <!-- description -->
                    <div id="description" class="card shadow p-0 m-2 mt-3 bg-white rounded col-md-3" style="height: 240px">
                        <div class="card-body p-0">    
                            <ul class="list-group list-group-flush">
								<li class="list-group-item">
									<div class="about-none">
										<h6 class="text-center text-muted mb-3">Help people get to know you</h6>
										<div class="text-center">
											<button type="button" class="btn btn-primary mb-3">Add description</button>
										</div>
									</div>
									<div class="about-yes">
										<p>ini about</p>
									</div>
									<p class="mb-2"><b>Joined </b>December 31 9999</p>
								</li>
                                <li class="list-group-item">
                                    <p class="mb-1 text-muted"><small>FOLLOWING</small></p>
                                    <a href="">
                                        <img src="<?= base_url('img/User LOGO.png'); ?>" class="rounded-circle" width="32px">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Reading List -->
                    <div id="stories-list" class="card shadow p-0 m-2 mt-3 bg-white rounded col-md-8">
                        <div class="card-body p-0">    
							<div class="m-2">
								<div class="d-flex">
									<h5 class="mr-auto"><b>Stories by HaydarMaulana</b></h5>
									<a href="#" class="ml-auto">
										<img src="https://i.imgur.com/4XLTGJF.png" width="32" />
									</a>
								</div>
								<!--content-->
								<div>
									<div class="media mb-1">
										<img class="mr-3" src="https://via.placeholder.com/142X222" alt="Generic placeholder image" style="width:142; height:222;">
										<div class="media-body">
											<a href="#"><h5 class="mt-0">Judul</h5></a>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
										</div>
									</div>
									<div class="media mb-1">
										<img class="mr-3" src="https://via.placeholder.com/142X222" alt="Generic placeholder image" style="width:142; height:222;">
										<div class="media-body">
											<a href="#"><h5 class="mt-0">Judul</h5></a>
											Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
										</div>
									</div>
								</div>
							</div>
                        </div>
                    </div>
                </div>
                <!-- end of user information -->
            </main>
            <!-- end of Main About -->
        </div>
        <!-- this is jquery -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script type="text/javascript" src="Assets/js/function.js" ></script>
    </body>
</html>
