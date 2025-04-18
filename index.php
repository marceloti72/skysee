<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem de Tela Cheia com Botões Flutuantes e Ícones Sociais</title>
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
        .button-container {
            position: fixed;
            top: 50%;
            right: 145px; /* Alinhado à direita com 145px de recuo */
            transform: translateY(-50%); /* Centraliza verticalmente */
            display: flex;
            justify-content: flex-end; /* Alinha os botões à direita */
            gap: 20px; /* Margem de 20px entre os botões */
            z-index: 1;
        }
        .image-button {
            position: relative; /* Contém o ::before e o texto */
            cursor: pointer;
            transition: transform 0.2s;
            overflow: hidden; /* Impede que o efeito de luz vaze */
            border-radius: 5px;
            width: 170px; /* Tamanho consistente para todos os botões */
        }
        .image-button img {
            display: block;
            width: 100%;
            height: auto; /* Mantém a proporção original da imagem */
            filter: grayscale(100%); /* Imagem em preto e branco por padrão */
            transition: filter 0.3s; /* Transição suave para colorido */
            position: relative;
            z-index: 1; /* Imagem abaixo do efeito de luz e texto */
        }
        .image-button:hover img {
            filter: grayscale(0%); /* Volta a ser colorida no hover */
        }
        .image-button:hover {
            transform: scale(1.05); /* Efeito de zoom */
        }
        .image-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%; /* Cobre todo o botão */
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.4),
                transparent
            );
            transition: left 0.5s; /* Transição suave para o efeito de luz */
            z-index: 2; /* Efeito de luz acima da imagem */
        }
        .image-button:hover::before {
            left: 100%; /* Efeito de luz passando */
        }
        .image-button span {
            position: absolute;
            color: white;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.6); /* Fundo semi-transparente */
            padding: 5px 10px;
            border-radius: 3px;
            opacity: 0; /* Oculto por padrão */
            transition: opacity 0.3s; /* Transição suave para o texto */
            z-index: 3; /* Texto acima da imagem e do efeito de luz */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8); /* Sombra para destaque */
        }
        .image-button:hover span {
            opacity: 1; /* Texto aparece no hover */
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

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Fundo semi-transparente */
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between; /* Texto à esquerda, links à direita */
            align-items: center;
            z-index: 5; /* Acima da imagem de fundo */
            font-size: 14px;
        }
        footer .copyright {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8); /* Sombra para legibilidade */
        }
        footer .footer-links a {
            color: white;
            text-decoration: none;
            margin-left: 5px;
            transition: text-decoration 0.3s;
            margin-right: 50px;
        }
        footer .footer-links a:hover {
            text-decoration: underline; /* Sublinhado no hover */
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
        #cookie-consent #accept-cookies:hover {
            background-color: #0056b3;
        }
        #cookie-consent #decline-cookies {
            background-color: #6c757d;
            color: white;
        }
        #cookie-consent #decline-cookies:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
    <?php 
    $ano_atual = date('Y');
    ?>
    <img src="images/home.png" alt="Imagem de fundo" class="background-image">
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

            // Verifica se o usuário já aceitou os cookies
            if (!localStorage.getItem('cookiesAccepted')) {
                cookieConsent.classList.add('show');
            }

            // Função para ocultar o pop-up
            const hideCookieConsent = () => {
                cookieConsent.classList.remove('show');
                setTimeout(() => {
                    cookieConsent.style.display = 'none';
                }, 300); // Aguarda a transição de opacidade
            };

            // Aceitar cookies
            acceptCookies.addEventListener('click', () => {
                localStorage.setItem('cookiesAccepted', 'true');
                hideCookieConsent();
            });

            // Recusar cookies
            declineCookies.addEventListener('click', () => {
                localStorage.setItem('cookiesAccepted', 'false');
                hideCookieConsent();
            });
        });
    </script>
    
</body>
</html>