<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nome Empresa</title>
    <link rel="icon" href="image/LOGO.png" type="image/png">

    <!-- CSS externo -->
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- Header -->
    <header class="header">
        <div class="container container-logo">
            <img src="image/LOGO.png" alt="LOGO" class="logo">
            <nav class="nav">
                <ul class="menu">
                    <li><a href="#essencia" class="active">Essência</a></li>
                    <li><a href="#produtos">Produtos</a></li>
                    <li><a href="#Instruções">Instruções</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Banner Carousel -->
    <section class="banner-carousel">
        <div class="carousel-container">

            <div class="carousel-slide">
                <img src="image/banner1.png" alt="Banner 1">
            </div>

            <div class="carousel-slide">
                <img src="image/banner2.png" alt="Banner 2">
            </div>

        </div>

        <button class="carousel-btn carousel-prev">&#10094;</button>
        <button class="carousel-btn carousel-next">&#10095;</button>

        <div class="carousel-bullets"></div>

    </section>


    <!-- Conteúdo principal -->
    <main id="wrapper">

        <!-- Essência -->
        <section id="essencia" class="section animate animate-left">
            <header class="section-header">
                <h2>Essência</h2>
            </header>
            <p class="animate animate-scale"> Um box de “Essência” no site deve transmitir de forma clara e curta, quem a empresa é, seu propósito e valores. </p>
            <p class="animate animate-scale">É o espaço para mostrar a identidade da marca, destacando o que a move, seus princípios e a forma como se conecta com as pessoas. O texto deve ser direto, inspirador e humano, usando frases curtas que comuniquem missão, valores e personalidade da empresa, de modo que o visitante entenda rapidamente a essência da marca. </p>
        </section>

        <!-- Produtos -->
        <section id="produtos" class="section animate animate-left">
            <header class="section-header">
                <h2>Produtos</h2>
            </header>
            <div class="grid-cards">
                <article class="card animate animate-scale">
                    <img src="image/esfiha-soja.png" alt="Produto 1">
                    <p>Produto 1</p>
                </article>
                <article class="card animate animate-scale">
                    <img src="image/esfiha-milho.png" alt="Produto 2">
                    <p> Produto 2</p>
                </article>
                <article class="card animate animate-scale">
                    <img src="image/esfiha-palmito.png" alt="Produto 3">
                    <p>Produto 3</p>
                </article>
            </div>
        </section>

        <!-- Instruções -->
        <section id="Instruções" class="section animate animate-left">
            <header class="section-header">
                <h2>Instruções</h2>
            </header>
            <p class="animate animate-scale"> Para criar o conteúdo de “Instruções”, a empresa deve focar em explicar de forma clara como usar o produto ou serviço, detalhando o passo a passo de maneira simples e direta, incluindo recomendações de segurança e conservação. O texto deve refletir a personalidade da marca, ser fácil de ler com frases curtas e, se possível, organizado visualmente para facilitar a compreensão. É importante revisar e testar as instruções para garantir que qualquer cliente consiga seguir sem dificuldade. </p>
            
        </section>

        <!-- Contato -->
        <section id="contato" class="section animate animate-left">
            <header class="section-header">
                <h2>Contato</h2>
            </header>

            <!-- O PHP vai exibir mensagens de sucesso/erro aqui -->
            <?php include 'backend/status.php'; ?>
    
            <!-- Formulario --> 
            <form method="post" action="backend/enviar.php" class="contact-form animate animate-scale">
                <div class="form-row">
                    <input type="text" name="nome" id="name" placeholder="Nome" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                </div>
                <div class="form-row">
                    <textarea name="mensagem" id="message" rows="6" placeholder="Como posso ajudar?" required></textarea>
                </div>
                <div class="form-row">
                    <button type="submit" class="btn-primary">Enviar</button>
                </div>
            </form>

   
        </section>

    </main>

    <!-- Footer -->
    <footer class="footer container animate animate-scale">
        <p>&copy; 2026 Feito por Nanni.</p>
    </footer>

    <!-- JS externo -->
    <script src="assets/js/main.js"></script>
    
</body>
</html>





