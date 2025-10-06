<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Edutipa</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #1e90ff, #ffffff, #001f3f);
      background-size: 300% 300%;
      animation: gradientMove 10s ease infinite;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #111;
    }

    @keyframes gradientMove {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .container {
      background: rgba(255, 255, 255, 0.95);
      border: 2px solid #1e90ff;
      border-radius: 20px;
      padding: 50px 40px;
      text-align: center;
      max-width: 500px;
      width: 90%;
      box-shadow: 0 0 25px rgba(30, 144, 255, 0.4);
      backdrop-filter: blur(10px);
    }

    h1 {
      font-weight: 700;
      font-size: 2.4rem;
      margin-bottom: 10px;
      color: #0056b3;
      text-shadow: 0 0 8px rgba(30, 144, 255, 0.3);
    }

    h2 {
      font-weight: 500;
      color: #444;
      margin-bottom: 20px;
      font-size: 1.1rem;
    }

    p {
      font-size: 1rem;
      color: #333;
      margin-bottom: 30px;
      line-height: 1.6;
    }

    .btn {
      display: inline-block;
      background: linear-gradient(90deg, #1e90ff, #0056b3);
      color: white;
      padding: 12px 28px;
      border: none;
      border-radius: 30px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 0 15px rgba(30, 144, 255, 0.6);
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>LARAVEL EDUTIPA</h1>
    <p>
      Selamat datang di <strong>Laravel Edutipa</strong> — tempat untuk belajar, bereksperimen, dan mengembangkan aplikasi web modern berbasis Laravel.  
      </p>
    <a href="/" class="btn">Mulai Sekarang</a>
  </div>
</body>
</html>
