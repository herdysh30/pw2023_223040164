<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genre | Musik</title>
    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/admin.css">
</head>
<body id="home">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm fixed-top"data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">Musik</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Library</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="genre.php">Genre</a>
          </li>
        </ul>
        <img class="rounded-circle ms-2" src="img/user.png" style="width:40px;height:40px">
        <li class="nav-item dropdown d-flex">
          <a class="nav-link dropdown-toggle text-white ms-1" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, Admin
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Account Setting</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Log Out</a></li>
          </ul>
        </li>
      </div>
    </div>
  </nav>
<!-- Akhir Navbar -->
<div class="hero-area text-black pt-5 mt-2">
	<div class="nav-spacer "></div>
    <!-- List Menu -->
		<ul class="hero-nav nav m-4 nav-pills mb-3 container" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
		        <button class="text-black nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Dashboard</button>
			</li>
			<li class="nav-item" role="presentation">
		        <button class="text-black nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Analytics</button>
			</li>
			<li class="nav-item" role="presentation">
			    <button class="text-black nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Users</button>
			</li>
		</ul>
        <!-- Menu 1 -->
        <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active container" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="m-1 ms-4 col-md-6 row align-items-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis vitae adipisci placeat odit harum dolorem, fugiat esse omnis atque quas neque deserunt error nulla, dolor consectetur explicabo voluptas iste incidunt cupiditate! Veritatis ratione delectus cupiditate ab nihil rerum at rem iste harum facere blanditiis, dicta, vel, nemo similique. Doloribus, molestiae?</p>
            </div>
        </div>
        <!-- Menu 2 -->
        <div class="tab-pane fade container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="m-1 ms-4 col-md-6 row align-items-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quas illo laborum! Officia iusto asperiores odio, ipsam porro repudiandae. Consequatur, distinctio magnam. Placeat, libero. Deleniti distinctio voluptatibus, placeat sequi voluptatem sapiente impedit voluptates itaque iusto non laudantium totam dolores nisi consequatur. Minus delectus, neque repellat ex ipsum error odio animi.</p>
            </div>
        </div>
        <!-- Menu 3 -->
        <div class="tab-pane fade container" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <div class="m-1 ms-4 col-md-6 row align-items-center">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores temporibus deserunt voluptatibus itaque eum et, inventore assumenda eligendi dolorem ea quaerat provident quasi deleniti doloremque cupiditate iste architecto optio impedit ullam animi quis? Laudantium est natus labore consectetur rerum deleniti delectus, tempora nostrum inventore vitae? Illo sit pariatur architecto odit.</p>
            </div>
        </div>
        </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>