import './bootstrap';
import 'preline';

// Opsional: Agar carousel ter-inisialisasi ulang setiap kali ada perubahan DOM
window.addEventListener('load', () => {
  if (window.HSStaticMethods) {
    window.HSStaticMethods.autoInit();
  }
});