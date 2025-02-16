<!DOCTYPE html>
<html lang="en">
    <style>
        /* Background dan Font */
body {
    background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    overflow: hidden;
    font-family: 'Cursive', sans-serif;
}

/* Pesan Utama */
.container {
    text-align: center;
    color: #fff;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    z-index: 2;
    position: relative;
}

.container h1 {
    font-size: 3em;
    margin: 0;
    animation: fadeIn 3s ease;
}

.container p {
    font-size: 1.5em;
    margin-top: 10px;
    animation: fadeIn 4s ease;
}

/* Animasi Hati */
.heart {
    width: 20px;
    height: 20px;
    background: #ff6b81;
    position: absolute;
    transform: rotate(45deg);
    animation: float 6s infinite;
    z-index: 1;
}

.heart::before,
.heart::after {
    content: '';
    width: 20px;
    height: 20px;
    background: #ff6b81;
    border-radius: 50%;
    position: absolute;
}

.heart::before {
    top: -10px;
    left: 0;
}

.heart::after {
    left: 10px;
    top: 0;
}

.heart2 {
    left: 20%;
    animation-duration: 4s;
    animation-delay: 1s;
}

.heart3 {
    left: 40%;
    animation-duration: 5s;
    animation-delay: 2s;
}

.heart4 {
    left: 60%;
    animation-duration: 7s;
    animation-delay: 0.5s;
}

.heart5 {
    left: 80%;
    animation-duration: 3s;
    animation-delay: 3s;
}

/* Gambar Bergerak */
.floating-img {
    width: 139px;
    position: absolute;
    animation: floatImage 6s infinite;
    opacity: 0.8;
    z-index: 0;
}

.img1 {
    top: 120%;
    left: 10%;
    animation-duration: 5s;
}

.img2 {
    top: 30%;
    left: 70%;
    animation-duration: 7s;
}

.img3 {
    top: 50%;
    left: 40%;
    animation-duration: 6s;
}

/* Animasi */
@keyframes float {
    0% {
        bottom: -10%;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        bottom: 100%;
        opacity: 0;
    }
}

@keyframes floatImage {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0;
        transform: scale(0.8);
    }
    100% {
        opacity: 1;
        transform: scale(1);
    }
}
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Valentine's Day</title>
    <link rel="stylesheet" href="valentine.css">
</head>
<body>
    <div class="container">
        <h1>AKU MINTA MAAF SAYANG</h1>
        <p>Maaf udah marah marah ke kamuu</p>
    </div>

    <!-- Gambar Bergerak -->
    <img src="miaw.jpg" alt="Heart" class="floating-img img1">
    <img src="g.jpg.png" alt="Heart" class="floating-img img2">
    <img src="hhk.png" alt="Gift" class="floating-img img3">

    <!-- Animasi Hati -->
    <div class="heart"></div>
    <div class="heart heart2"></div>
    <div class="heart heart3"></div>
    <div class="heart heart4"></div>
    <div class="heart heart5"></div>
</body>
</html>