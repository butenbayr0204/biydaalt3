<!DOCTYPE html>
<html lang="mn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Холбоо барих</title>
  <link rel="icon" type="image/png" href="logo.png">

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #0e0d0d;
      margin: 0;
      padding: 0;
    }
    .contact-form {
      width: 60%;
      margin: 50px auto;
      background: #0a0909;
      padding: 30px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.2);
      border-radius: 5px;
    }
    .form-group { margin-bottom: 20px; }
    input, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #252121;
      border-radius: 3px;
      font-size: 14px;
      resize: none;
    }
    .row {
      display: flex;
      gap: 20px;
    }
    .row input { flex: 1; }
    button {
      background: #eec302;
      border: none;
      color: #110e0e;
      padding: 12px 40px;
      border-radius: 25px;
      font-size: 16px;
      cursor: pointer;
      display: block;
      margin: 20px auto 0;
      transition: 0.3s;
    }
    button:hover { background: #e69520; }
  </style>

</head>
<body>

<a href="index.html">
<button>Буцах</button>
</a>

<div class="contact-form">
  <form action="send.php" method="POST">

    <div class="row">
      <input type="text" name="fullname" placeholder="Таны нэр" required>
      <input type="email" name="email" placeholder="И-мэйл" required>
    </div>

    <div class="form-group">
      <input type="text" name="subject" placeholder="Агуулга" required>
    </div>

    <div class="form-group">
      <textarea rows="6" name="message" placeholder="Мессеж" required></textarea>
    </div>

    <button type="submit">Илгээх</button>

  </form>
</div>

</body>
</html>
