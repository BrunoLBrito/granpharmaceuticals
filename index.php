<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Excelência é o principal que a Gran Pharmaceuticals representa. A Gran Pharmaceuticals estabeleceu sua reputação com a excelente fabricante de medicamentos para o melhor alto rendimento.">
    <meta name="robots" content="index, follow">
    <meta itemprop="name" content="Excelência é o principal que a Gran Pharmaceuticals representa. A Gran Pharmaceuticals estabeleceu sua reputação com a excelente fabricante de medicamentos para o melhor alto rendimento.">
    <meta itemprop="description" content="Excelência é o principal que a Gran Pharmaceuticals representa. A Gran Pharmaceuticals estabeleceu sua reputação com a excelente fabricante de medicamentos para o melhor alto rendimento.">
    <meta name="google-site-verification" content="6ZXEdVTeAeTt8lbfo1MFcbENIcy9RDK6Qvin6ju3Y0I" />
    <link rel="base" href="https://www.granpharmaceuticals.com.br">
    <link rel="canonical" href="https://www.granpharmaceuticals.com.br/">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Open+Sans:300,400,700|Oswald:300,500,700|Roboto:100,300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="app/assets/css/style.css">
    <link rel="stylesheet" href="app/assets/css/animate.css">
    <title>Gran Pharmaceuticals - Excelência em Pharmacos</title>
</head>
<body id="home">

    <header class="container">
        <div class="header">
            <div class="content">
                <a href="#"><img src="app/assets/img/logo.png" alt="Gran Pharmaceuticals" title="Gran Pharmaceuticals"></a>

                <input class="menu-btn" type="checkbox" id="btn-menu" />
                <label for="btn-menu" class="btn-menu">
                    <span id="navicon"></span>
                </label>
            </div>

        </div>
        <div class="hero">
            <div class="title">
                <h1 class="font-zero">Gran Pharmaceuticals</h1>
                <!-- <p>Excelência em Pharmaces</p> -->
                <img src="app/assets/img/logo1.png" alt="Gran Pharmaceuticals" title="Gran Pharmaceuticals" class="animated zoomInDown">
            </div>
        </div>
        <div class="clear"></div>
    </header>

    <nav class="nav">
        <h2 class="font-zero">Menu de Navegação</h2>
        <ul> 
            <li><a href="#home">| => Inicio</a></li>
            <li><a href="#about">| => Sobre nós</a></li>
            <li><a href="#tutor">| => Autentificação</a></li>
            <li><a href="javascript:void(0)">| => Produtos +</a>
                <ul>
                    <li id="oral"><a href="#product">| => Oral -</a></li>
                    <li id="injetado"><a href="#product">| => Injetável -</a></li>
                </ul>
            </li>
            <li><a href="#contact">| => Contato</a></li>
        </ul>
    </nav>

    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">

        </div>

    </div>

    <main>

        <section class="container about" id="about">
            <div class="content">
                <h2 class="animated jackInTheBox">Apresentação</h2>
                <hr>
                <p>Excelência é o principal que a Gran Pharmaceuticals representa. 
                    A Gran Pharmaceuticals estabeleceu sua reputação com a excelente fabricante de 
                    medicamentos para o melhor alto rendimento. Nós somos preocupados com a 
                    qualidade de nossos produtos que oferecemos aos nossos clientes. Para garantir a 
                    qualidade e a eficiência de nossos produtos farmacêuticos, temos os mais altos 
                    padrões de fabricações fornecendo um alto grau farmacêutico de pureza, e os melhores 
                    profissionais dedicados a inovação e em tornar nossos produtos mais eficazes. 
                    Somos entusiastas e apaixonados pelo fornecimento de produtos e serviços de qualidade que 
                    melhoram o desempenho, qualidade de vida garantindo excelentes resultados aos nossos clientes. 
                </p>
            </div>
        </section>

        <section class="container tutor" id="tutor">
            <div class="content">
                <h2>Autentificação</h2>
                <hr>

                <div class="box-tutor">
                    <h3>Autentificando seu produto Gran Pharmaceuticals</h3>
                    <p><span>1</span> - Procure pelo QR Code no seu produto;</p>
                    <img src="app/assets/img/tutor1.jpg" alt="QR Code no seu produto">
                    <p><span>2</span>  - Faça a leitura do código com algum aplicativo no seu mobile;</p>
                    <p><span>3</span>  - Você será redirecionado a nosso site com o nome do seu produto, sua descrição e a mensagem de autenticidade.</p>
                    <img src="app/assets/img/tutor2.jpg" alt="Pop-up de autentificação do produto">
                </div>
            </div>
            <div class="clear"></div>
        </section>

        <section class="container product" id="product">
            <div class="content">
                <h2 class="animated jackInTheBox">Produtos</h2>
                <hr>
                <div class="flex"></div>
            </div>
        </section>

        <section class="container contact" id="contact">
            <div class="content">
                <h2 class="animated jackInTheBox">Entre em contato</h2>
                <hr>
                <form class="form-contact">
                    <input type="text" name="name" placeholder="Digite seu nome" id="name">

                    <input type="text" name="subject" placeholder="Digite o assunto">

                    <input type="email" name="email" placeholder="Digite seu email">

                    <textarea name="msg" id="" cols="30" rows="10" placeholder="Digite sua mensagem"></textarea>

                    <button class="btnSubmit" type="submit">Enviar</button>
                </form>
                <div class="show"></div>
            </div>
            <div class="clear"></div>
        </section>
    </main>

    <footer class="container">
        <div class="content">
            <p>
                <a href="https://www.instagram.com/gran.pharmaceuticals/">@gran.pharmaceuticals</a>
            </p>
            <p>&copy; Copyright Gran Pharmaceuticals 2020 - Idealized and Developed by <a href="mailto:bruno-lucas@msn.com">BLS.</a></p>
        </div>
        <div class="clear"></div>
    </footer>

<script src="./app/assets/js/readMoreJS.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="./app/assets/js/script.js"></script>
</body>
</html>