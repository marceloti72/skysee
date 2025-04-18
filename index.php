<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Screen Image with Floating Buttons and Social Icons</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
        }
        .background-image {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            object-fit: cover;
            z-index: -1;
        }
        .button {
            position: fixed;
            padding: 15px 30px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: rgba(0, 123, 255, 0.8);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
            overflow: hidden;
            text-align: center;
            text-decoration: none; /* Para consistência com links estilizados */
        }
        .button:hover {
            background-color: rgba(0, 123, 255, 1);
            transform: scale(1.05); /* Leve zoom de 5% */
        }
        .button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 50%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.4),
                transparent
            );
            transition: 0.5s;
        }
        .button:hover::before {
            left: 100%; /* Efeito de luz passando da esquerda para a direita */
        }
        #btn1 {
            top: 550px;
            left: 595px;
        }
        #btn2 {
            top: 550px;
            right: 530px;
        }
        #btn3 {
            bottom: 125px;
            left: 975px;
        }
        #btn4 {
            bottom: 125px;
            right: 135px;
        }
        .social-icons {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 15px;
            z-index: 10;
        }
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-size: cover;
            transition: opacity 0.3s;
        }
        .social-icons a:hover {
            opacity: 0.8;
        }
        .facebook {
            background-image: url('https://img.icons8.com/color/48/000000/facebook-new.png');
        }
        .instagram {
            background-image: url('https://img.icons8.com/color/48/000000/instagram-new.png');
        }
        .whatsapp {
            background-image: url('https://img.icons8.com/color/48/000000/whatsapp.png');
        }
    </style>
</head>
<body>
    <img src="images/home.png" alt="Background" class="background-image">
    <button class="button" id="btn1" onclick="window.open('https://www.eduk.skysee.com.br', '_blank')">Escolar</button>
    <button class="button" id="btn2" onclick="window.open('https://www.agendar.skysee.com.br/sistema-para-barbearia.php', '_blank')">Barbearia</button>
    <button class="button" id="btn3" onclick="window.open('https://www.agendar.skysee.com.br/sistema-para-salao-de-beleza.php', '_blank')">Salão<br>de Beleza</button>
    <button class="button" id="btn4" onclick="window.open('https://www.agendar.skysee.com.br/sistema-para-clinica-de-estetica.php', '_blank')">Clinica<br>de Estética</button>
    <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61574991107173" target="_blank" class="facebook"></a>
        <a href="https://www.instagram.com/skysee.software/" target="_blank" class="instagram"></a>
        <a href="https://wa.me/5522998838694" target="_blank" class="whatsapp"></a>
    </div>
</body>
</html>