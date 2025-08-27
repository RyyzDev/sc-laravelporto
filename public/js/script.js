
//ini tombol hamburger mobile dari sini yaaaa
function toggleMenu(){
	const nav = document.getElementById("navLinks");
	const hamburger = document.getElementById("hamburgerBtn");
	const close = document.getElementById("btnclose")

	nav.classList.toggle("active");
	hamburger.classList.toggle("hidden");
	close.classList.toggle("hidden", false);
}

function toggleClose(){
	const nav = document.getElementById("navLinks");
	const hamburger = document.getElementById("hamburgerBtn");
	const close = document.getElementById("btnclose")

	nav.classList.toggle("active", false);
	hamburger.classList.toggle("hidden", false);
	close.classList.toggle("hidden");
}
//hamburger sampe sini ya ryy




    //ini di bagian home ya ryy buat animasi aboutnya
  document.addEventListener("DOMContentLoaded", function () {
  const aboutCard = document.querySelector(".kartuabout");

  function checkVisibility() {
    const rect = aboutCard.getBoundingClientRect();
    if (rect.top < window.innerHeight - 100) {
      aboutCard.classList.add("show");
    }
  }

  window.addEventListener("scroll", checkVisibility);
  checkVisibility();
});
  //sampe sini



//ini buat loading preloadernya ya ryy inget
document.addEventListener("DOMContentLoaded", function () {
  const preloader = document.getElementById("preloader");

  setTimeout(() => {
    preloader.classList.add("hidden");
  }, 1700);
});
//sampe sini




//ini buat bagian daftar artikel yaw
document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".blog-card");

  function checkVisibility() {
    cards.forEach(card => {
      const rect = card.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        card.classList.add("show");
      }
    });
  }

  window.addEventListener("scroll", checkVisibility);
  checkVisibility();
});
//sampe sini