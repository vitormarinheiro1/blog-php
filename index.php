<?php

$posts = [
    [
        'titulo' => 'Como a Inteligência Artificial está Transformando a Indústria 4.0',
        'conteudo' => 'A Indústria 4.0 está sendo moldada pela Inteligência Artificial. Tecnologias como machine learning e análise de dados estão otimizando processos produtivos, melhorando a eficiência e reduzindo custos. Empresas que adotam essas soluções estão à frente da concorrência.',
        'autor' => 'João Silva',
        'imagem' => 'https://images.unsplash.com/photo-1718241905916-1f9786324de9?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'titulo' => 'Cibersegurança: Como Proteger Seus Dados Pessoais na Era Digital',
        'conteudo' => 'Com o aumento dos ataques cibernéticos, é essencial que os usuários tomem medidas para proteger seus dados pessoais. Utilizar autenticação de dois fatores, manter sistemas atualizados e usar senhas fortes são apenas algumas das práticas fundamentais.',
        'autor' => 'Ana Costa',
        'imagem' => 'https://plus.unsplash.com/premium_photo-1661877737564-3dfd7282efcb?q=80&w=1500&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'titulo' => 'Computação Quântica: O Futuro da Tecnologia',
        'conteudo' => 'A computação quântica está prestes a revolucionar a forma como processamos informações. Diferente dos computadores tradicionais, os computadores quânticos utilizam qubits para realizar cálculos em uma velocidade exponencialmente maior, o que pode trazer avanços significativos em áreas como medicina e criptografia.',
        'autor' => 'Carlos Mendes',
        'imagem' => 'https://plus.unsplash.com/premium_photo-1690297733164-958ea1f806ab?q=80&w=1632&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'titulo' => '5G: O que Esperar da Nova Geração de Conectividade',
        'conteudo' => 'O 5G promete transformar a conectividade global, com velocidades até 100 vezes mais rápidas que o 4G, baixa latência e maior capacidade de conexão. Isso abrirá novas possibilidades em áreas como veículos autônomos, telemedicina e cidades inteligentes.',
        'autor' => 'Mariana Souza',
        'imagem' => 'https://images.unsplash.com/photo-1614157561595-dc25d28cfa85?q=80&w=1589&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'titulo' => 'Blockchain: A Tecnologia que Está Revolucionando a Segurança Digital',
        'conteudo' => 'O blockchain está transformando a forma como lidamos com dados e transações online. Com sua estrutura descentralizada e imutável, ele oferece uma segurança incomparável, sendo utilizado não apenas para criptomoedas, mas também para contratos inteligentes, rastreamento de cadeias de suprimentos e até mesmo na proteção de dados pessoais. Essa tecnologia promete redefinir a confiança digital em diversas indústrias.',
        'autor' => 'Lucas Martins',
        'imagem' => 'https://images.unsplash.com/photo-1640161704729-cbe966a08476?q=80&w=1472&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ],
    [
        'titulo' => 'Desenvolvimento de Software: Tendências para 2024',
        'conteudo' => 'Em 2024, vemos tendências como o uso de inteligência artificial no desenvolvimento de software, a crescente adoção de metodologias ágeis e o aumento no uso de containers e microserviços. As empresas que se adaptarem rapidamente a essas inovações terão uma vantagem competitiva.',
        'autor' => 'Pedro Lima',
        'imagem' => 'https://images.unsplash.com/photo-1607799279861-4dd421887fb3?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
    ]
];

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="icon" href="img/icone-serenatto.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700&display=swap" rel="stylesheet">
    <title>WebInfo</title>
</head>

<body>
    <header>
        <div>WebInfo</div>
        <ul>
            <li>Home</li>
            <li>Blog</li>
            <li>Sobre</li>
            <li>Contato</li>
        </ul>
    </header>

    <main>
        <div class="posts-container">
            <?php foreach ($posts as $post): ?>
                <a href="#" class="posts">
                    <img src="<?= $post['imagem'] ?>" alt="Imagem do post" class="img">
                    <p class="titulo"><?= $post['titulo'] ?></p>
                    <p class="autor"><strong>Autor:</strong> <?= $post['autor'] ?></p>
                </a>
            <?php endforeach; ?>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h3>Sobre nós</h3>
                <p>Somos um blog que explora as últimas tendências e inovações em tecnologia. Aqui, você encontra artigos e notícias sobre gadgets, inteligência artificial, IoT e muito mais. Fique por dentro do mundo tecnológico conosco.</p>
            </div>

            <div class="footer-section">
                <h3>Links rápidos</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3>Redes sociais</h3>
                <ul class="social-links">
                    <li><a href="#" target="_blank">Facebook</a></li>
                    <li><a href="#" target="_blank">Twitter</a></li>
                    <li><a href="#" target="_blank">Instagram</a></li>
                    <li><a href="#" target="_blank">LinkedIn</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 WebInfo. Todos os direitos reservados.</p>
        </div>
    </footer>

</body>
</html>