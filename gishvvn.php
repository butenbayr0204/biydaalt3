<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Гишүүнчлэл</title>
  <link rel="icon" type="image/png" href="logo.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }
    .hero {
      background: linear-gradient(180deg, #242323);
      color: white;
      text-align: center;
      padding: 70px 20px;
    }

    .hero h1 {
      font-size: 40px;
      color: orange;
      margin-bottom: 15px;
    }

    .hero p {
      font-size: 18px;
      color: #ddd;
    }
    .text-section {
      max-width: 1200px;
      margin: 50px auto;
      padding: 0 20px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 25px;
    }

    .text-box {
      background: linear-gradient(145deg, #ffffff, #f3f3f3);
      border-radius: 15px;
      padding: 25px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.1);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      position: relative;
    }

    .text-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
    }

    .text-box h3 {
      color: #ff7a00;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 12px;
    }

    .text-box p {
      color: #333;
      font-size: 15px;
      line-height: 1.7;
    }

    footer {
      background-color: #242323;
      color: #ccc;
      text-align: center;
      padding: 15px;
      font-size: 14px;
      margin-top: 50px;
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
          <li class="nav-item"><a class="nav-link active" href="gishvvn.html">Гишүүнчлэл</a></li>
          <li class="nav-item"><a class="nav-link" href="hadgalamj.html">Хадгаламж</a></li>
          <li class="nav-item"><a class="nav-link" href="zeel.html">Зээл</a></li>
        </ul>
      </div>

      <div>
        <a href="holboo.html" class="btn btn-warning">Хүсэлт илгээх</a>
      </div>
    </div>
  </nav>
  <section class="hero">
    <h1>Гишүүнчлэлийн заавар</h1>
    <p>Хоршооны гишүүн болохын өмнө дараах зөвлөмжүүдтэй танилцана уу</p>
  </section>
  <section class="text-section">
    <div class="text-box">
      <h3>Хоршооны үйл ажиллагаатай танилцах</h3>
      <p>Бүтэц, зохион байгуулалт, ардчилсан хамтын удирдлага, хяналтын системийг судлах.</p>
    </div>

    <div class="text-box">
      <h3>Гишүүний хувь хөрөнгө</h3>
      <p>Гишүүн нь хоршоонд хувь хөрөнгө оруулснаар үйлчилгээ авах, санал өгөх эрхтэй болдог.</p>
    </div>

    <div class="text-box">
      <h3>Тусгай зөвшөөрөлтэй эсэх</h3>
      <p>Санхүүгийн зохицуулах хорооны шалгуурыг хангаж буй эсэхийг шалгах.</p>
    </div>

    <div class="text-box">
      <h3>Санхүүгийн үйлчилгээ сонгох</h3>
      <p>Өөрийн нөхцөл байдал, шаардлагад тохирсон бүтээгдэхүүн сонгох.</p>
    </div>

    <div class="text-box">
      <h3>Бүрдүүлэх бичиг баримт</h3>
      <p>1. Цээж зураг (2 хувь)<br>2. Иргэний үнэмлэх<br>3. Элсэлтийн хураамж<br>4. Хувь хөрөнгө</p>
    </div>

    <div class="text-box">
      <h3>Гишүүдийн оролцоо</h3>
      <p>Хурлын шийдвэр гаргахад санал өгөх эрх нь тэгш байна.</p>
    </div>
  </section>

  <footer>
    © 2025 Денежный Магнит ХЗХ — Бүх эрх хуулиар хамгаалагдсан.
  </footer>

</body>
</html>
