document.addEventListener('DOMContentLoaded', function() {
    const registerForm = document.getElementById('registerForm');

    registerForm.onsubmit = function(event) {
        const fileInput = document.getElementById('file');
        const file = fileInput.files[0];
        
        if (nama.length < 3) {
            alert("Nama harus memiliki minimal 3 karakter!");
            return false;
        }
      
        if (!emailValue.includes('@student.itera.ac.id')) {
            alert('Email harus memiliki domain @student.itera.ac.id');
            event.preventDefault();
        }
      
        if (semester < 3 || semester > 10) {
            alert("Anda harus memiliki minimal Semester 3 dan maksimal Semester 10!");
            return false;
        }
      
        if (keahlian.length < 10 || keahlian.length > 100) {
            alert("Penjelasan singkat keahlian harus memiliki minimal 10 kata dan maksimal 100 kata!");
            return false;
        }

        if (file && file.size > 1024 * 1024) {
            alert('Ukuran file terlalu besar! Maksimal 1MB.');
            event.preventDefault();
        }
    };
});
