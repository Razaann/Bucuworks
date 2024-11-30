let currentIndex = 0; // Menyimpan posisi video saat ini
const videos = document.querySelectorAll('.gallery-videos video');
const galleryVideos = document.querySelector('.gallery-videos');

// Fungsi untuk berpindah ke video sebelumnya
function prevVideo() {
  // Jika kita berada di video pertama, maka berputar ke video terakhir
  currentIndex = (currentIndex - 1 + videos.length) % videos.length;
  updateGalleryPosition();
}

// Fungsi untuk berpindah ke video selanjutnya
function nextVideo() {
  // Jika kita berada di video terakhir, maka berputar ke video pertama
  currentIndex = (currentIndex + 1) % videos.length;
  updateGalleryPosition();
}

// Fungsi untuk mengubah posisi galeri dan mengontrol auto-play video
function updateGalleryPosition() {
  const videoWidth = videos[0].offsetWidth + 30; // Lebar video + margin
  galleryVideos.style.transform = `translateX(-${currentIndex * videoWidth}px)`;

  // Menonaktifkan autoplay pada video yang tidak aktif
  videos.forEach((video, index) => {
    if (index === currentIndex) {
      video.classList.add('playing');
      video.play(); // Memutar video yang di tengah
    } else {
      video.classList.remove('playing');
      video.pause(); // Hentikan video yang tidak di tengah
    }
  });
}

// Event listener untuk tombol navigasi
document.querySelector('.gallery-prev').addEventListener('click', prevVideo);
document.querySelector('.gallery-next').addEventListener('click', nextVideo);

// Memastikan video pertama terlihat dan di-play
updateGalleryPosition();

window.onscroll = function() {
  var navbar = document.querySelector('nav');
  if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      navbar.style.backgroundColor = "rgba(255, 255, 255, 0.9)"; // Ubah warna latar belakang saat menggulir
      navbar.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.2)"; // Tambahkan bayangan
  } else {
      navbar.style.backgroundColor = "transparent"; // Kembali ke warna asli
      navbar.style.boxShadow = "none"; // Hapus bayangan
  }
};
