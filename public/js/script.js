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

const imagescipan = [
      'images/cipan2.jpeg',
      'images/cipan3.jpeg',
      'images/cipan1.jpeg'
    ];
const imgElement = document.getElementById("slider-image");

    let currentIndex = 0;
    function showImage(index) {
      imgElement.src = images[index];
    }

    function nextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      showImage(currentIndex);
    }

    function prevImage() {
      currentIndex = (currentIndex - 1 + images.length) % images.length;
      showImage(currentIndex);
    }

    // Ganti gambar otomatis setiap 5 detik
    setInterval(nextImage, 5000);