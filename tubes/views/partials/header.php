<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?> | Musik</title>
    <!-- JS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="script/script.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/<?= $style; ?>">
    <style>
        /* Gaya untuk elemen yang dicari */

    </style>

    <script>
        function searchAndScroll() {
            var keyword = document.getElementById('pencarian').value; // Mendapatkan kata kunci pencarian
            var elements = document.querySelectorAll('.searchable'); // Mengambil semua elemen dengan kelas 'searchable' di halaman

            for (var i = 0; i < elements.length; i++) {
                var element = elements[i];
                var text = element.innerText.toLowerCase();

                if (text.includes(keyword.toLowerCase())) {
                    element.classList.add('highlight'); // Menandai elemen yang dicari dengan gaya khusus
                    element.scrollIntoView({ behavior: 'smooth', block: 'center' }); // Mengarahkan scroll ke elemen yang dicari
                } else {
                    element.classList.remove('highlight'); // Menghapus penanda dari elemen yang tidak dicari
                }
            }
        }
        // Mendeteksi ketika tombol Enter ditekan
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Mencegah submit form
                searchAndScroll(); // Memanggil fungsi pencarian
            }
        })
    </script>
  </head>
<body id="home">