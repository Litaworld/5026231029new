<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pemrograman Web</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      background: linear-gradient(120deg, #fdfbfb 0%, #ebedee 100%);
      font-family: 'Segoe UI', sans-serif;
    }
    .task-card {
      transition: all 0.3s ease-in-out;
      border: none;
      border-radius: 15px;
    }
    .task-card:hover {
      transform: scale(1.03);
      box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    a.text-decoration-none {
      text-decoration: none !important;
    }
  </style>
</head>
<body>

  <div class="container py-5">
    <h1 class="text-center fw-bold mb-4 text-primary">
      <i class="fas fa-folder-open me-2"></i>Pemrograman Web</h1>
    <h5 class="text-center fw-bold text-secondary">Lita Sari Banjarnahor - 5026231029</h5>

    <div class="row row-cols-1 row-cols-md-3 g-4">

      <!-- Card list -->
      <div class="col">
        <a href="/test" class="text-decoration-none text-dark">
          <div class="card task-card bg-light h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-code me-1 text-primary"></i>Pertemuan 1</h5>
              <p class="card-text">Latihan News Page 1</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/pertama" class="text-decoration-none text-dark">
          <div class="card task-card bg-white h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-code me-1 text-primary"></i>Pertemuan 2</h5>
              <p class="card-text">Latihan News Page 2</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/template1" class="text-decoration-none text-dark">
          <div class="card task-card bg-light h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fab fa-bootstrap me-1 text-info"></i>Pertemuan 3</h5>
              <p class="card-text">Latihan Bootstrap Pertama</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/bootsrapt1" class="text-decoration-none text-dark">
          <div class="card task-card bg-white h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fab fa-bootstrap me-1 text-info"></i>Pertemuan 4</h5>
              <p class="card-text">Latihan Bootstrap Kedua</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/js1" class="text-decoration-none text-dark">
          <div class="card task-card bg-light h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fab fa-js me-1 text-warning"></i>Pertemuan 7</h5>
              <p class="card-text">Latihan JavaScript Pertama</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/js2" class="text-decoration-none text-dark">
          <div class="card task-card bg-white h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fab fa-js me-1 text-warning"></i>Pertemuan 7</h5>
              <p class="card-text">Latihan JavaScript Kedua</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/danantara" class="text-decoration-none text-dark">
          <div class="card task-card bg-light h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-laptop-code me-1 text-secondary"></i>Pertemuan 8</h5>
              <p class="card-text">Latihan ETS</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/ets" class="text-decoration-none text-dark">
          <div class="card task-card bg-white h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-globe me-1 text-success"></i>Pertemuan 10</h5>
              <p class="card-text">ETS</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/blog" class="text-decoration-none text-dark">
          <div class="card task-card bg-light h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-database me-1 text-dark"></i>Pertemuan 11</h5>
              <p class="card-text">Latihan Laravel</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="https://youtu.be/U1G0IqR6Eak?si=VFiLSYjQepkrSIq9" target="_blank" class="text-decoration-none">
          <div class="card task-card" style="background-color: #ffecec;">
            <div class="card-body">
              <h5 class="card-title"><i class="fab fa-youtube me-1 text-danger"></i>Tugas 1</h5>
              <p class="card-text">Membuat Video Tutorial CSS</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/layoutexercise029" class="text-decoration-none text-dark">
          <div class="card task-card bg-white h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-layer-group me-1 text-primary"></i>Tugas 2</h5>
              <p class="card-text">Membuat Layout Responsif sesuai Referensi</p>
            </div>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/eminalinktree" class="text-decoration-none text-dark">
          <div class="card task-card bg-light h-100">
            <div class="card-body">
              <h5 class="card-title"><i class="fas fa-link me-1 text-success"></i>Tugas 3</h5>
              <p class="card-text">Menampilkan dan membuat Linktree</p>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

</body>
</html>
