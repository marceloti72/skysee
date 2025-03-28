<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKYSEE - Soluções de TI</title>
    <style>
        * {
            box-sizing: border-box; /* Ensures padding and borders are included in element's total width and height */
        }

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Ensures the body takes at least the full viewport height */
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }

        .banner {
            width: 80%; /* Use percentage for responsive width */
            max-width: 600px; /* Maintain a max width for larger screens */
            height: 200px;
            margin: 20px 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
            font-size: 24px;
            font-weight: bold;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
        }

        .banner:hover {
            transform: scale(1.05);
        }

        /* Tema Escolar para EDUK */
        #eduk-banner {
            background: linear-gradient(to right, #1e90ff, #87cefa);
            background-image: url('images/eduk_banner.jpg'); /* Imagem de fundo escolar */
            background-size: cover;
            background-position: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        /* Tema de Barbearia para AGENDAR */
        #agendar-banner {
            background: linear-gradient(to right, #2c2c2c, #5e5e5e);
            background-image: url('images/barber_abstract_3d.jpg'); /* Nova imagem abstrata 3D */
            background-size: cover;
            background-position: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .banner-text {
            background-color: rgba(0, 0, 0, 0.5); /* Fundo semi-transparente para legibilidade */
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.5rem; /* Default font size for larger screens */
            line-height: 1.2; /* Improve readability */
        }

        /* Media query for screens smaller than 768px (tablets and mobile) */
        @media (max-width: 768px) {
            .banner {
                width: 90%; /* Slightly wider on smaller screens */
                height: 150px; /* Reduce height for better fit */
                margin: 15px 0;
            }

            .banner-text {
                font-size: 1.2rem; /* Smaller font size for mobile */
                padding: 8px 15px; /* Adjust padding for smaller screens */
            }
        }

        /* Media query for screens smaller than 480px (most mobile phones) */
        @media (max-width: 480px) {
            .banner {
                width: 95%; /* Almost full width on very small screens */
                height: 120px; /* Further reduce height */
                margin: 10px 0;
            }

            .banner-text {
                font-size: 1rem; /* Even smaller font size for very small screens */
                padding: 6px 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Banner EDUK -->
    <a href="https://www.eduk.skysee.com.br" target="_blank" class="banner" id="eduk-banner">
        <div class="banner-text">EDUK - SISTEMA DE GESTÃO ESCOLAR</div>
    </a>

    <!-- Banner AGENDAR -->
    <a href="https://www.agendar.skysee.com.br" target="_blank" class="banner" id="agendar-banner">
        <div class="banner-text">AGENDAR - SISTEMA DE AGENDAMENTO E GESTÃO DE SERVIÇOS</div>
    </a>
</body>
</html>