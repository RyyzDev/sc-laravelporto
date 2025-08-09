<!DOCTYPE html>
<html lang="id">
@include("components.head")
<body class="bg-gray-100 text-gray-800 font-sans">
@include('components.navbar')
 

  <section class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow-md rounded-lg">
    <div class="relative">
      <img id="slider-image" src="images/cipan1.jpeg" alt="Gambar Dinamis" class="w-full rounded-lg h-64 object-cover">
      <div class="absolute top-1/2 left-0 transform -translate-y-1/2 px-2">
        <button onclick="prevImage()" class="bg-black bg-opacity-50 text-white p-2 rounded-full">&#10094;</button>
      </div>
      <div class="absolute top-1/2 right-0 transform -translate-y-1/2 px-2">
        <button onclick="nextImage()" class="bg-black bg-opacity-50 text-white p-2 rounded-full">&#10095;</button>
      </div>
    </div>
  </section>

  <!-- Artikel Lanjutan -->
  <section class="max-w-4xl mx-auto mt-6 mb-24 p-6 bg-white shadow-md rounded-lg">
    <h2 align="center" class="text-xl font-semibold mb-4">CITRA 8 SUNSET AVENUE
    </h2>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Salah satu tempat merenung favorit saya di daerah jakarta barat, tempat ini cukup dekat dengan perbatasan kota tangerang.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Menurut saya tempat ini adalah tempat yang cocok untuk merenung karena angin sepoi yang cukup sering dan suasana yang cukup indah, menjadikan tempat ini yang cocok untuk ovt :v
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kalian juga bakal sering nih liat BMW kalo lagi hoki juga bisa ketemu GTR, PORSCHE, dan Supercar lainnya.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ada beberapa cafe yang estetik juga di daerah ini dengan menawarkan pemandangan danau dan kopi yang aromatik, membuat cafe ini cukup worth it walaupun akan boros di kantong, karena harganya mulai dari 25rb - 50rb agak overprice memang.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stand-stand yang ada juga cukup beragam mulai dari makanan ringan sampai teh manis biasa, tetapi harganya jauh lebih terjangkau dibanding cafe, yaitu kisaran 15rb - 30 rb.
      <br />
      <br />
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saya lebih baik jajan di indomaret atau alfamart yang ada di dekat lokasi karena harga nya masih mengikuti harga nasional berbeda dengan bandara yang harganya cenderung dimahalkan.
      <br />
      <br />
      <br />
      rating dari saya untuk tempat ini adalah, 8.2 / 10
    </p>
  </section>


  
  <!-- JavaScript untuk Gambar Dinamis -->
  @include('components.footer')
</body>
</html>
