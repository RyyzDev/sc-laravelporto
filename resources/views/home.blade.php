<!doctype html>
@include('components.head')
@include('components.navbar')

<body>
<div id="preloader">
  <div class="loader">
    <span>S</span>
    <span>E</span>
    <span>B</span>
    <span>E</span>
    <span>N</span>
    <span>T</span>
    <span>A</span>
    <span>R</span>
    <span>:)</span>
  </div>
</div>
<section class="main" id="home">
        <div class="up">
            <a href="#home" class="btn-up"><i class="fas fa-arrow-alt-circle-up"></i></a> 
        </div>
        <div class="text">
            <h2>Welcome to<br><span>Fachryyz Corporation</span></h2>
            <h3>Website yang menyimpan apapun yang disimpan oleh owner</h3>
            <a href="{{asset('file/cv-fachri.pdf')}}" class="main-btn" download>Download CV</a>
        <div class="social-icons">
            <a href="/facebook" class="fb" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="/linkedin" class="tw" target="_blank"><i class="fab fa-linkedin"></i></a>
            <a href="/instagram" class="ig" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="/github" class="gh" target="_blank"><i class="fab fa-github" ></i></a>
        </div>    
        </div>
    </section>

    &nbsp;

    
<h3 class="title title-about"><span>TENTANG SAYA</span></h3>

<section class="info">
          <div class="kartuabout">
              <div class="about-container">
                <img src="images/fachri.jpg" alt="Foto About" class="about-image">
                <div class="about-text">
                  <h2>Tentang Saya</h2>
                  <p>
                    Halo, saya Fachri Akbar K. atau RYYZ seorang web developer yang suka belajar teknologi baru
                    dan membangun aplikasi menarik. Saya fokus pada frontend dan backend.

                    sangat suka untuk mengulik hal baru jadi jangan sungkan belajar bersama!, mari kita berkembang bersama! :)
                  </p>
                </div>
              </div>
            </div>


</section>




@include('components.footer')
</body>
</html>