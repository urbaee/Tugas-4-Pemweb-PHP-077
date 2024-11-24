<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $semester = (int) $_POST['semester'];
    $keahlian = trim($_POST['keahlian']);
    
    if (strlen($name) < 3) {
        die("Validasi gagal! Nama harus memiliki setidaknya 3 karakter.");
    }
    
    if (strpos($email, '@student.itera.ac.id') === false) {
        die("Validasi gagal! Email harus memiliki domain @student.itera.ac.id");
    }
    
    if (empty($keahlian)) {
        die("Validasi gagal! Keahlian tidak boleh kosong atau kurang dari 10 kata!");
    }
    
    if ($semester < 3 || $semester > 10) {
        die("Validasi gagal! Kamu bisa mengajukan pendaftaran dengan minimal Semester 3 dan maksimal Semester 10.");
    }    
    
    if (isset($_FILES['file'])) {
        $file = $_FILES['file'];
        if ($file['error'] === 0) {
            $fileType = pathinfo($file['name'], PATHINFO_EXTENSION);
            if ($fileType !== 'txt' || $file['size'] > 1024 * 1024) {
                die("Validasi file gagal: Tipe file harus .txt dan ukuran maksimal 1MB.");
            }
            
            $fileContent = file_get_contents($file['tmp_name']);
        } else {
            die("Upload file gagal.");
        }
    }

    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    
    session_start();
    $_SESSION['data'] = [
        'name' => $name,
        'email' => $email,
        'semester' => $semester,
        'keahlian' => $keahlian,
        'fileContent' => $fileContent ?? '',
        'userAgent' => $userAgent,
    ];

    header("Location: result.php");
    exit;
} else {
    die("Akses tidak valid.");
}
?>
