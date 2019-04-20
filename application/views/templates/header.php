<!DOCTYPE html>
<html>
<head>
    <!-- this is bootstrap4 -->
    <link rel="stylesheet" type="text/css" href="Assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://i.imgur.com/i4gDwUP.png" type="image/png">
    <title>Wettped</title>
</head>
<body>
    <div class="navigation-bar">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top">
                <!-- logo -->
                <a class="navbar-brand" href="#"><img src="https://i.imgur.com/vMZTD75.png" title="source: imgur.com" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>             
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <!-- Discover tab -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Discover
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item link" href="#">Action</a>
                                <a class="dropdown-item link" href="#">Romance</a>
                                <a class="dropdown-item link" href="#">Comedy</a>
                            </div>
                        </li>
                        <!-- Search bar -->
                        <form class="navbar-form navbar-left" action="#">
                            <div class="input-group">
                                <div class="input-group-btn">
                                    <button class="btn btn-default search" type="submit">
                                        <img width="25px" id="search-img" src="https://i.imgur.com/ODhJBK2.png" title="source: imgur.com" />
                                    </button>
                                </div>
                                <input type="text" class="form-control" placeholder="Search" name="search">
                            </div>
                        </form>
                    </ul>
                    <!-- align kanan -->
                    <ul class="navbar-nav navbar-right">
                            <!-- Write -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Write
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item link" href="#">Create a story</a>
                                    <a class="dropdown-item link" href="#">My Story</a>
                                </div>
                            </li>
                            <!-- user -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img id="user-logo-kecil" src="Assets/img/User LOGO.png">
                                    <span>
                                        Username
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item link" href="#">My Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item link" href="#">Log Out</a>
                                </div>
                            </li>
                    </ul>
                </div>
            </nav>
                <!-- end of navbar -->
  