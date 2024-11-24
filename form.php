<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
    <title>Form</title>
</head>
<body>
<div class="container">
    <div class="form">
        <h1>Form Pendaftaran Asisten Dosen</h1>
            <form id="registerForm" action="process.php" method="post" enctype="multipart/form-data">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required minlength="3">
                <br>

                <label for="semester">Semester:</label>
                <input type="number" id="semester" name="semester" required min="3" max="10">
                <br>
                
                <label for="email">Email Student:</label>
                <input type="email" id="email" name="email" required>
                <br>

                <label for="keahlian">Penjelasan Singkat Keahlian Yang Anda Miliki:</label>
                <textarea id="keahlian" name="keahlian" rows="4" required minlength="10"></textarea>
                <br>

                <label for="file">Upload File Biodata Anda (file harus .txt):</label>
                <input type="file" id="file" name="file" accept=".txt" required>
                <br>

                <button type="submit">Kirim Tugas</button>
            </form>
    </div> 
</div>

<script src="script.js"></script>

</body>
</html>