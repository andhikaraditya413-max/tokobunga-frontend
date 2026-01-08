<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Daftar Produk</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="container mx-auto p-6">
  <h1 class="text-3xl font-bold mb-6">Daftar Produk Bunga</h1>

  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <?php
    $data = json_decode(file_get_contents("data/produk.php"), true);
    foreach ($data as $p):
    ?>
    <div class="bg-white rounded shadow p-4">
      <img src="<?= $p['gambar'] ?>" class="mb-3 rounded">
      <h2 class="font-bold"><?= $p['nama'] ?></h2>
      <p class="text-pink-600 font-semibold">
        Rp <?= number_format($p['jumlah']) ?>
      </p>
      <a href="detail.php?id=<?= $p['id'] ?>" class="text-blue-500">
        Lihat Detail
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>

</body>
</html>
