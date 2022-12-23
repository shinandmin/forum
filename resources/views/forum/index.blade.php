<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
    />
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row mt-3">
        <div class="col-12">
            <h4>Movie</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    <a href="{{url('/')}}/1/view">
                    아바타
                    </a>
                    <span class="badge text-bg-info">
                        <i class="far fa-comment-dots"></i>
                        4
                    </span>
                    <span class="badge rounded-pill text-bg-danger">
                        <i class="fas fa-solid fa-heart"></i>
                        7
                    </span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item">
                    아바타
                    <span class="badge text-bg-info">
                        <i class="far fa-comment-dots"></i>
                        4
                    </span>
                    <span class="badge rounded-pill text-bg-danger">
                        <i class="fas fa-solid fa-heart"></i>
                        7
                    </span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item">
                    아바타
                    <span class="badge text-bg-info">
                        <i class="far fa-comment-dots"></i>
                        4
                    </span>
                    <span class="badge rounded-pill text-bg-danger">
                        <i class="fas fa-solid fa-heart"></i>
                        7
                    </span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-dark btn-sm my-3">All Postings of Movie Category</button>
            </div>
        </div>
    </div>

    <hr/>

    <div class="row mt-3">
        <div class="col-12">
            <h4>Music</h4>
            <ul class="list-group">
                <li class="list-group-item">
                    아바타
                    <span class="badge text-bg-info">
                        <i class="far fa-comment-dots"></i>
                        4
                    </span>
                    <span class="badge rounded-pill text-bg-danger">
                        <i class="fas fa-solid fa-heart"></i>
                        7
                    </span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item">
                    아바타
                    <span class="badge text-bg-info">
                        <i class="far fa-comment-dots"></i>
                        4
                    </span>
                    <span class="badge rounded-pill text-bg-danger">
                        <i class="fas fa-solid fa-heart"></i>
                        7
                    </span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
                <li class="list-group-item">
                    아바타
                    <span class="badge text-bg-info">
                        <i class="far fa-comment-dots"></i>
                        4
                    </span>
                    <span class="badge rounded-pill text-bg-danger">
                        <i class="fas fa-solid fa-heart"></i>
                        7
                    </span>
                    <br>
                    <small>2022-01-22 | by SB Hero</small>
                </li>
            </ul>
        </div>
        <div class="col-12">
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-dark btn-sm my-3">All Postings of Music Category</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
