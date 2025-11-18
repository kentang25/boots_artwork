<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Boots-Artwork</title>

    <!-- Google Font: UnifrakturCook (Gaya Gothic Black Metal) -->
    <link href="https://fonts.googleapis.com/css2?family=UnifrakturCook:wght@700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            margin: 0;
            background: url('<?= base_url("img/blackmetal_bg.jpg") ?>') center/cover no-repeat fixed;
            backdrop-filter: brightness(0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Cinzel', serif;
        }

        /* Overlay gelap */
        .overlay {
            background: rgba(0, 0, 0, 0.75);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px red;
            width: 360px;
            backdrop-filter: blur(3px);
        }

        h2 {
            font-family: 'UnifrakturCook', cursive;
            font-size: 48px;
            color: #b10000;
            text-shadow: 0 0 10px black;
            text-align: center;
            margin-bottom: 25px;
        }

        label {
            color: #e6e6e6;
        }

        input {
            background: black !important;
            border: 1px solid #b10000 !important;
            color: white !important;
        }

        input:focus {
            box-shadow: 0 0 10px #b10000 !important;
            border-color: red !important;
        }

        .btn-blood {
            width: 100%;
            background: linear-gradient(90deg, #4a0000, #b10000, #4a0000);
            border: 1px solid red;
            color: white;
            font-weight: bold;
            text-transform: uppercase;
        }

        .btn-blood:hover {
            background: red;
            color: black;
            box-shadow: 0 0 20px red;
        }

        .error-box {
            background: rgba(255, 0, 0, 0.2);
            border-left: 4px solid red;
            color: #ff9999;
            padding: 10px 15px;
            margin-bottom: 15px;
        }

    </style>

</head>
<body>

    <div class="overlay">
        
        <h2>ADMIN</h2>

        <?php if(session()->getFlashdata('error')): ?>
            <div class="error-box">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/boots_login/login') ?>" method="post">
            <div class="mb-3">
                <label for="">Username</label>
                <input type="text" name="username" class="form-control" required autofocus>
            </div>

            <div class="mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-blood mt-3">Masuk</button>
        </form>
    </div>

</body>
</html>
