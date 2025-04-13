<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim Formu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
    body { 
    background-image: url('img/3.jpg'); 
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
}

    .card {
    background-color: rgba(255, 255, 255, 0.9); 
    width: 100%;
    max-width: 600px; 
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
    margin: 20px; 
}

    </style>
</head>



<body>
    <?php
    if (isset($_GET['success'])): ?>
        <div class="alert alert-success text-center mt-3">Mesajınız başarıyla iletildi.</div>
    <?php endif ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body p-5">
                        <h3 class="card-title text-center mb-4">İletişim Formu</h3>
                        <form method="POST" action="iletisim-post.php">
                            <div class="mb-3">
                                <label for="name" class="form-label">Adınız Soyadınız:</label>
                                <input type="text" class="form-control" id="name" name="adi_soyadi" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefon:</label>
                                <input type="text" class="form-control" id="phone" name="telefon" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mesaj:</label>
                                <textarea class="form-control" id="message" name="mesaj" rows="5" required></textarea>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Gönder</button>
                               
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
