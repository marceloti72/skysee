<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skysee Software House</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
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
        .button-container {
            position: fixed;
            top: 50%;
            right: 145px;
            transform: translateY(-50%);
            display: flex;
            justify-content: flex-end;
            flex-wrap: nowrap;
            gap: 20px;
            z-index: 1;
        }
        .image-button {
            position: relative;
            cursor: pointer;
            transition: transform 0.2s;
            overflow: hidden;
            border-radius: 5px;
            width: 170px;
        }
        .image-button img {
            display: block;
            width: 100%;
            height: auto;
            filter: grayscale(100%);
            transition: filter 0.3s;
            position: relative;
            z-index: 1;
        }
        .image-button:hover img,
        .image-button:active img {
            filter: grayscale(0%);
        }
        .image-button:hover,
        .image-button:active {
            transform: scale(1.05);
        }
        .image-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.4),
                transparent
            );
            transition: left 0.5s;
            z-index: 2;
        }
        .image-button:hover::before,
        .image-button:active::before {
            left: 100%;
        }
        .image-button span {
            position: absolute;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 5px 10px;
            border-radius: 3px;
            opacity: 0;
            transition: opacity 0.3s;
            z-index: 3;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
        }
        .image-button:hover span,
        .image-button:active span {
            opacity: 1;
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
        .social-icons a:hover,
        .social-icons a:active {
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
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 5;
            font-size: 14px;
            text-align: center;
        }
        footer .copyright {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);
            flex: 1;
        }
        footer .footer-links {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex: 1;
        }
        footer .footer-links a {
            color: white;
            text-decoration: none;
            transition: text-decoration 0.3s;
        }
        footer .footer-links a:hover,
        footer .footer-links a:active {
            text-decoration: underline;
        }
        #cookie-consent {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 15px 20px;
            border-radius: 5px;
            z-index: 20;
            max-width: 500px;
            width: 90%;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.3s;
        }
        #cookie-consent.show {
            opacity: 1;
        }
        #cookie-consent p {
            margin: 0 0 10px;
            font-size: 14px;
        }
        #cookie-consent button {
            padding: 8px 15px;
            margin: 0 5px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        #cookie-consent #accept-cookies {
            background-color: #007bff;
            color: white;
        }
        #cookie-consent #accept-cookies:hover,
        #cookie-consent #accept-cookies:active {
            background-color: #0056b3;
        }
        #cookie-consent #decline-cookies {
            background-color: #6c757d;
            color: white;
        }
        #cookie-consent #decline-cookies:hover,
        #cookie-consent #decline-cookies:active {
            background-color: #5a6268;
        }

        /* Media Queries para responsividade */
        @media screen and (max-width: 1024px) {
            .button-container {
                right: 0;
                width: 100%;
                justify-content: center;
                flex-wrap: nowrap;
                overflow-x: auto;
                gap: 10px;
                top: 65%;
                padding: 0 10px;
            }
            .image-button {
                width: 150px;
            }
            .image-button span {
                font-size: 12px;
                padding: 3px 6px;
            }
            .social-icons {
                top: 10px;
                right: 10px;
                gap: 10px;
            }
            .social-icons a {
                width: 32px;
                height: 32px;
            }
            footer {
                padding: 8px 15px;
                font-size: 12px;
            }
            footer .copyright,
            footer .footer-links {
                text-align: center;
            }
            footer .footer-links {
                gap: 10px;
            }
            #cookie-consent {
                bottom: 80px;
                max-width: 90%;
                padding: 10px 15px;
            }
            #cookie-consent p {
                font-size: 12px;
            }
            #cookie-consent button {
                padding: 6px 12px;
                font-size: 12px;
            }
        }

        @media screen and (max-width: 480px) {
            .button-container {
                top: 60%;
                gap: 8px;
                padding: 0 5px;
            }
            .image-button {
                width: 80px;
            }
            .image-button span {
                font-size: 10px;
                padding: 2px 5px;
            }
            .social-icons {
                top: 5px;
                right: 5px;
                gap: 8px;
            }
            .social-icons a {
                width: 28px;
                height: 28px;
            }
            footer {
                flex-direction: column;
                padding: 6px 10px;
                font-size: 11px;
            }
            footer .copyright {
                margin-bottom: 5px;
            }
            footer .footer-links {
                flex-direction: row;
                gap: 8px;
            }
            #cookie-consent {
                bottom: 100px;
                padding: 8px 10px;
            }
            #cookie-consent p {
                font-size: 11px;
            }
            #cookie-consent button {
                padding: 5px 10px;
                font-size: 11px;
            }
        }
    </style>
</head>

<body>
    <?php 
    $ano_atual = date('Y');
    ?>
    <picture>
        <source media="(min-width: 1200px)" srcset="./images/home.png">
        <source media="(max-width: 1200px)" srcset="./images/home3.png">
        <source media="(max-width: 768px)" srcset="./images/home2.png">
        <img src="images/home2.png" alt="Descrição da imagem" class="background-image">
    </picture> 
    <!-- <img src="images/home.png" alt="Imagem de fundo" class="background-image"> -->
    <div class="button-container">
        <a href="https://www.eduk.skysee.com.br" target="_blank" class="image-button" id="btn1">
            <img src="images/escolar-btn.png" alt="Botão Escolar">
            <span>Escolar</span>
        </a>
        <a href="https://www.agendar.skysee.com.br/sistema-para-barbearia.php" target="_blank" class="image-button" id="btn2">
            <img src="images/barbeiro-btn.png" alt="Botão Barbearia">
            <span>Barbearia</span>
        </a>
        <a href="https://www.agendar.skysee.com.br/sistema-para-salao-de-beleza.php" target="_blank" class="image-button" id="btn3">
            <img src="images/beleza-btn.png" alt="Botão Salão de Beleza">
            <span>Salão de Beleza</span>
        </a>
        <a href="https://www.agendar.skysee.com.br/sistema-para-clinica-de-estetica.php" target="_blank" class="image-button" id="btn4">
            <img src="images/estetica-btn.png" alt="Botão Clínica de Estética">
            <span>Clínica de Estética</span>
        </a>
    </div>
    <div class="social-icons">
        <a href="https://www.facebook.com/profile.php?id=61574991107173" target="_blank" class="facebook"></a>
        <a href="https://www.instagram.com/skysee.software/" target="_blank" class="instagram"></a>
        <a href="https://wa.me/5522998838694" target="_blank" class="whatsapp"></a>
    </div>
    <footer>
        <div class="copyright">
            © <?php echo $ano_atual?> Skysee - Software House
        </div>
        <div class="footer-links">
            <a href="terms-of-use.html" target="_blank">Termos de uso</a>
            <a href="privacy-policy.html" target="_blank">Política de privacidade</a>
        </div>
    </footer>

    <div id="cookie-consent">
        <p>Este site usa cookies para melhorar sua experiência. Ao continuar navegando, você concorda com o uso de cookies.</p>
        <button id="accept-cookies">Aceitar</button>
        <button id="decline-cookies">Recusar</button>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cookieConsent = document.getElementById('cookie-consent');
            const acceptCookies = document.getElementById('accept-cookies');
            const declineCookies = document.getElementById('decline-cookies');

            if (!localStorage.getItem('cookiesAccepted')) {
                cookieConsent.classList.add('show');
            }

            const hideCookieConsent = () => {
                cookieConsent.classList.remove('show');
                setTimeout(() => {
                    cookieConsent.style.display = 'none';
                }, 300);
            };

            acceptCookies.addEventListener('click', () => {
                localStorage.setItem('cookiesAccepted', 'true');
                hideCookieConsent();
            });

            declineCookies.addEventListener('click', () => {
                localStorage.setItem('cookiesAccepted', 'false');
                hideCookieConsent();
            });
        });
    </script>
</body>
</html>