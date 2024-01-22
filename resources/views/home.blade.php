@extends('template')

@section('judul', 'Putri Home') {{-- 1: memanggil yield, 2: isinya --}}

@section('content') {{-- ini lebih dari satu baris dikasi endsection --}}
<div class="header">
    <div class="profile">
        <img src="{{asset("ass/images/me.jpg")}}" alt="FOTO KU">
        <h2 style="font-family: cursive; font-weight: 700;">RISA PUTRI DEVINDA SARI</h2>
        <p>SOFTWARE ENGENEERING | WEB DEVELOPER | PROGRAMER</p>
    </div>
</div>

<div class="container-fluid mt-5">
  <div class="row">
     <div class="col-12">
      <h2 class="fw-semibold" style="margin-left: 70px; color: #167AB2;">OUR SERVICES</h2>
     </div>
  </div>

  <div class="row mt-3">
    <div class="col-4">
      <div class="card mx-auto" style="width: 18rem; height: 400px;">
        <img src="{{asset("ass/images/soft.jpg")}}" class="card-img-top ukuran" alt="software engineer">
        <div class="card-body">
          <h5 class="card-title fw">SOFTWARE ENGINEER</h5>
          <p class="card-text" style="font-family: comic sans ms;">Membuat aplikasi, Berbagai bahasa pemrograman seperti PHP, Java, JavaScript.</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card mx-auto" style="width: 18rem; height: 400px;">
        <img src="{{asset("ass/images/web.jpg")}}" class="card-img-top ukuran" alt="web developer">
        <div class="card-body">
          <h5 class="card-title fw">WEB DEVELOPER</h5>
          <p class="card-text" style="font-family: comic sans ms;">Membuat serta mendesain website.</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card mx-auto" style="width: 18rem; height: 400px;">
        <img src="{{asset("ass/images/data.jpg")}}" class="card-img-top ukuran" alt="data analyst">
        <div class="card-body">
          <h5 class="card-title fw">DATA ANALYST</h5>
          <p class="card-text" style="font-family: comic sans ms;">Menganalisis data atau informasi.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5 pt-5 pb-5" style="background-color: #DFF3FE;">
  <div class="row">
     <div class="col-12">
      <h2 class="fw-semibold" style="margin-left: 70px; color: #167AB2;">OUR PROJECTS</h2>
     </div>
  </div>

  <div class="row mt-3">
    <div class="col-4">
      <div class="card mx-auto" style="width: 18rem; height: 400px;">
        <img src="{{asset("ass/images/g4.png")}}" class="card-img-top ukuran" alt="software engineer">
        <div class="card-body">
          <h5 class="card-title tw">BEL SEKOLAH</h5>
          <p class="card-text" style="font-family: comic sans ms;">Membuat aplikasibel sekolah dengan bahasa pemrograman Csharp.</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card mx-auto" style="width: 18rem; height: 400px;">
        <img src="{{asset("ass/images/g3.png")}}" class="card-img-top ukuran" alt="web developer">
        <div class="card-body">
          <h5 class="card-title tw">WEB ABOUT ME</h5>
          <p class="card-text" style="font-family: comic sans ms;">Membuat website sederhana tentang diri sendiri.</p>
        </div>
      </div>
    </div>
    <div class="col-4">
      <div class="card mx-auto" style="width: 18rem; height: 400px;">
        <img src="{{asset("ass/images/g2.png")}}" class="card-img-top ukuran" alt="data analyst">
        <div class="card-body">
          <h5 class="card-title tw">WEB PORTOFOLIO</h5>
          <p class="card-text" style="font-family: comic sans ms;">Membuat website portofolio menggunakan HTML, CSS, JS dan framework.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid px-0">
<div class="row">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner" style="max-height: 650px;">
    <div class="carousel-item active">
      <img src="{{asset("ass/images/g4.png")}}" class="d-block w-100" alt="background">
    </div>
    <div class="carousel-item">
      <img src="{{asset("ass/images/g3.png")}}" class="d-block w-100" alt="background">
    </div>
    <div class="carousel-item">
      <img src="{{asset("ass/images/g2.png")}}" class="d-block w-100" alt="background">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>

<div class="container-fluid pt-5 pb-5" style="background-color: #DFF3FE; padding-left: 500px; ">
<form action="">
<label for="Email" style="font-size: large; font-weight: 700; color: #c40082;">NAMA</label><br>
    <input type="text" style="border-color: rgb(255, 172, 217); margin-bottom: 30px; width: 393px;"> <br>
    <label for="Email" style="font-size: large; font-weight: 700; color: #c40082;">EMAIL</label><br>
    <input type="text" style="border-color: rgb(255, 172, 217); margin-bottom: 30px; width: 393px;"> <br>
    <label for="Pesan" style="font-size: large; font-weight: 700; color: #c40082;">PESAN</label><br>
    <textarea rows="3" cols="50" style="border-color: rgb(255, 172, 217); resize: none;"></textarea>
</form>
<button type="submit" style="margin-top: 30px; margin-left: 90px; height: 30px; width: 200px; font-family: times new roman; background-color: rgb(255, 189, 235); color: #b80071; border-color: rgb(255, 172, 217); font-size: large;"><b>KIRIM</b></button>
</div>

<div class="container-fluid px-0 py-0" style="margin: 0px;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.5125182900183!2d111.5301755739181!3d-7.627898175428066!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e79bef1b013b46b%3A0xc7b5a3e8a713f9fa!2sWearnes%20Education%20Center%20Madiun!5e0!3m2!1sid!2sid!4v1700642640586!5m2!1sid!2sid" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<script src="{{asset("bootstrap/js/bootstrap.js")}}"></script>
@endsection