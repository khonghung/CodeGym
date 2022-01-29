<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .shopping-mall {
            font-variant: small-caps;
        }

        .shopping-mall>h1 {
            font-family: Impact, sans-serif;
            font-size: 50px;
            color: white;
            letter-spacing: 1px;
            text-shadow: 0 0 2px black;
            padding-bottom: 0;
            border-bottom: 1px dotted gray;
            margin: 0;
        }

        .shopping-mall>h5 {
            margin-top: 5px;
            letter-spacing: 1px;
        }

        .poly-cart {
            margin-top: 5px;
        }

        .poly-cart ul {
            padding: 0;
            margin: 0;
            list-style: none;
            font-variant: small-caps;
        }
    </style>
</head>

<body>
    <div class="container" style="height: auto">
        <header class="row">
            <div class="col-12 col-md-12 shopping-mall">
                <h1>Online shopping mall</h1>
                <h5>The center point of the professional programming</h5>
            </div>
        </header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark mt-2">
            <a class="navbar-brand" href="#">Trang chủ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Giới thiệu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hỏi đáp</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tài khoản
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Thông tin cá nhân</a>
                            <a class="dropdown-item" href="#">Quên mật khẩu</a>
                            <a class="dropdown-item" href="#">Đổi mật khẩu</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Đăng ký thành viên</a>
                            <a class="dropdown-item" href="#">Cập nhật hồ sơ</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Đăng xuất</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Từ khoá" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
                </form>
            </div>
        </nav>
        <div class="row">
            <article class="col-12 col-sm-9 mt-2">
                <div class="col-12 col-sm-12 row mb-2">
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Máy tính Dell
                            </div>
                            <div class="card-body">
                                <img src="images/computer.jpg" style="width: 100%" />
                            </div>
                            <div class="card-header">
                                $ 100.25
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Máy tính Dell
                            </div>
                            <div class="card-body">
                                <img src="images/computer.jpg" style="width: 100%" />
                            </div>
                            <div class="card-header">
                                $ 100.25
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Máy tính Dell
                            </div>
                            <div class="card-body">
                                <img src="images/computer.jpg" style="width: 100%" />
                            </div>
                            <div class="card-header">
                                $ 100.25
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 row mb-2">
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Máy tính Dell
                            </div>
                            <div class="card-body">
                                <img src="images/computer.jpg" style="width: 100%" />
                            </div>
                            <div class="card-header">
                                $ 100.25
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Máy tính Dell
                            </div>
                            <div class="card-body">
                                <img src="images/computer.jpg" style="width: 100%" />
                            </div>
                            <div class="card-header">
                                $ 100.25
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="card-header">
                                Máy tính Dell
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="../week5-4_Bootstrap/image/img1.png" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../week5-4_Bootstrap/image/img1.png" class="d-block w-100" alt="">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="../week5-4_Bootstrap/image/img1.png" class="d-block w-100" alt="">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="card-header">
                                $ 100.25
                            </div>
                        </div>
                    </div>
                </div>
            </article>
            <aside class="col-12 col-sm-3">
                <div class="card poly-cart">
                    <div class="card-body row">
                        <img class="col-sm-5" src="images/shoppingcart.gif" />
                        <ul class="col-sm-7">
                            <li>100 items</li>
                            <li>$56.8</li>
                            <li><a href="#">Xem giỏ hàng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <form>
                            <input placeholder="Từ khoá" class="form-control" />
                        </form>
                    </div>
                </div>
                <div class="list-group">
                    <a href="" type="button" class="list-group-item list-group-item-action active">
                        Chủng loại
                    </a>
                    <a href="" type="button" class="list-group-item list-group-item-action">Điện thoại di động</a>
                    <a href="" type="button" class="list-group-item list-group-item-action">Máy tính xách tay</a>
                    <a href="" type="button" class="list-group-item list-group-item-action">Quạt máy</a>
                    <a href="" type="button" class="list-group-item list-group-item-action">Tivi</a>
                    <a href="" type="button" class="list-group-item list-group-item-action">Tủ lạnh</a>
                </div>
            </aside>
        </div>
        <footer class="card mb-2">
            <div class="text-center">
                <p class="mt-3">CodeGym &copy; 2021</p>
            </div>
        </footer>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>

</html>