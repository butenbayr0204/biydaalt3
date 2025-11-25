<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Зээл - Денежный Магнит ХЗХ</title>
  <link rel="icon" type="image/png" href="logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .navbar-brand img {
      border-radius: 50%;
    }
    .hero {
      position: relative;
      background-color: #242323;
      color: white;
      text-align: center;
      padding: 100px 20px;
    }

    .hero h1 {
      color: orange;
      font-size: 48px;
      font-weight: bold;
    }

    .hero h2 {
      font-size: 26px;
      margin-top: 10px;
      color: #c9c9c9;
    }

    .image-gallery img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      transition: transform 0.3s;
    }

    .image-gallery img:hover {
      transform: scale(1.03);
    }

    .card-custom {
      background: linear-gradient(135deg, #ffa500, #ff7300);
      color: white;
      width: 320px;
      border-radius: 20px;
      padding: 20px;
      margin: auto;
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
      font-family: 'Courier New', monospace;
    }

    .card__number {
      letter-spacing: 2px;
      font-size: 18px;
      margin: 25px 0;
    }

    .card__name {
      font-weight: bold;
      font-size: 16px;
    }

    footer {
      background-color: #242323;
      color: white;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand d-flex align-items-center" href="index.html">
        <img src="logo.png" alt="Лого" width="50" class="me-2">
        Денежный Магнит
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="gishvvn.html">Гишүүнчлэл</a></li>
          <li class="nav-item"><a class="nav-link" href="hadgalamj.html">Хадгаламж</a></li>
          <li class="nav-item"><a class="nav-link active text-warning" href="zeel.html">Зээл</a></li>
        </ul>
      </div>

      <div>
        <a href="holboo.html" class="btn btn-outline-warning">Хүсэлт илгээх</a>
      </div>
    </div>
  </nav>
  <section class="hero">
    <div class="container">
      <h1>Зээл үйлчилгээ</h1>
      <h2>Гишүүддээ зориулсан уян хатан зээлийн нөхцөл</h2>
    </div>
  </section>
  <div class="container my-5">
    <h3 class="text-center text-dark mb-4">Зээлийн төрөл</h3>
    <div class="row g-4 image-gallery">
      <div class="col-md-4"><img src="back1.jpg" alt="Зураг 1"></div>
      <div class="col-md-4"><img src="back2.png" alt="Зураг 2"></div>
      <div class="col-md-4"><img src="back3.png" alt="Зураг 3"></div>
      <div class="col-md-6"><img src="back4.png" alt="Зураг 4"></div>
      <div class="col-md-6"><img src="back5.png" alt="Зураг 5"></div>
    </div>
  </div>
  <footer class="py-3 text-center">
    <p class="mb-0">&copy; 2025 Денежный Магнит ХЗХ — Зээлийн үйлчилгээний хуудсыг бүтээв.</p>
  </footer>

</body>
</html>
