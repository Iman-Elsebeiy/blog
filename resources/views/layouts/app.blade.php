<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>  @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom Navbar Styling */
    .navbar {
      background: linear-gradient(to right, #1f1e20, #444952);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand, .nav-link {
      color: #fff !important;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 1px;
      transition: color 0.3s ease-in-out;
    }

    .navbar-toggler-icon {
      background-color: #fff;
    }

    .nav-link:hover {
      color: #f8f9fa !important;
      background-color: rgba(255, 255, 255, 0.1);
      border-radius: 5px;
    }

    .nav-item.active .nav-link {
      color: #f8f9fa !important;
      background-color: rgba(26, 15, 15, 0.2);
      border-radius: 5px;
    }
    .btn-secondary {
    background-color: rgb(46, 48, 141);
    color: white;
}

  .btn-primary {
    background-color:rgb(25, 90, 133);
    color: white;
}

.btn-danger {
    background-color:rgb(12, 54, 145);
    color: white;
}
.btn-dark:hover{
    background-color:rgb(120, 178, 212);
    color: white;
}
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Blogs Website</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('posts.index')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



  @yield('section1')
  @yield('section2')













  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
