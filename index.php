<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/index.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Nearby - Início</title>
</head>
<body>
    <header class="header" id="startHere">
        <div class="container">
            <a class="header__logo" href="/">
                WEB 1
            </a>
            <nav class="header__nav">
                <ul class="header__nav__list">
                    <li class="header__nav__item">
                        <a href="#startHere" class="header__nav__link">
                            Início
                        </a>
                    </li>
                    <li class="header__nav__item">
                        <a href="#about" class="header__nav__link">
                            Sobre nós
                        </a>
                    </li>
                    <li class="header__nav__item">
                        <a href="#games" class="header__nav__link">
                            Jogos
                        </a>
                    </li>
                    <li class="header__nav__item">
                        <a href="#contact" class="header__nav__link">
                            Contato
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="header__buttons">
                <a href="login.php" class="header__button button button--primary button--border">
                    Login
                </a>
                <a href="registrar.php" class="header__button button button--primary">
                    Registrar
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="hero">
            <div class="container">
                <div class="hero__iconContainer">
                    <i class="bx bxs-shopping-bag hero__icon"></i>
                </div>
                <h1 class="hero__title">
                    Todos os jogos em um único lugar
                </h1>
                <p class="hero__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere nulla, 
                    eos necessitatibus quia odit beatae illum ipsum eveniet iste!
                </p>
                <div class="hero__buttons">
                    <a href="login.php" class="header__button button button--primary">
                        Login
                    </a>
                    <a href="registrar.php" class="header__button button button--primary button--border">
                        Registrar
                    </a>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="container">
                <div>
                    <h2 class="about__title">
                        Sobre nós
                    </h2>
                    <p class="about__text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora, sit!
                    </p>
                    <p class="about__text">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Distinctio minus alias possimus? Alias, hic cum!
                    </p>
                    <p class="about__text">
                        Lorem ipsum dolor sit amet.
                    </p>
                </div>
                <img src="images/games.png" alt="Banner com vários jogos" class="about__image">
            </div>
        </section>
        <section class="games" id="games">
            <hr class="divider divider--primary divider--small">
            <div class="container">
                <h2 class="games__title">
                    Compre agora
                </h2>
                <p class="games__text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ab.
                </p>

                <div class="games__cardsContainer">
                    <div class="games__card">
                        <div class="games__card__background">
                            <img 
                                src="images/minecraft-logo.png" 
                                alt="Minecraft Logo" 
                                class="games__card__image"
                            >
                        </div>
                        <div>
                            <h3 class="games__card__title">
                                Minecraft
                            </h3>
                            <p class="games__card__price">
                                <span class="games__card__price__unity">
                                    R$
                                </span>
                                <span class="games__card__price__price">
                                    130.27
                                </span>
                            </p>
                            <p class="games__card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quis, 
                                veniam omnis ullam in at doloribus blanditiis expedita illo 
                                consectetur.
                            </p>
                            <button class="button button--primary">
                                <i class='bx bx-cart-add'></i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    <div class="games__card">
                        <div class="games__card__background">
                            <img 
                                src="images/minecraft-logo.png" 
                                alt="Minecraft Logo" 
                                class="games__card__image"
                            >
                        </div>
                        <div>
                            <h3 class="games__card__title">
                                Minecraft
                            </h3>
                            <p class="games__card__price">
                                <span class="games__card__price__unity">
                                    R$
                                </span>
                                <span class="games__card__price__price">
                                    130.27
                                </span>
                            </p>
                            <p class="games__card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quis, 
                                veniam omnis ullam in at doloribus blanditiis expedita illo 
                                consectetur.
                            </p>
                            <button class="button button--primary">
                                <i class='bx bx-cart-add'></i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    <div class="games__card">
                        <div class="games__card__background">
                            <img 
                                src="images/minecraft-logo.png" 
                                alt="Minecraft Logo" 
                                class="games__card__image"
                            >
                        </div>
                        <div>
                            <h3 class="games__card__title">
                                Minecraft
                            </h3>
                            <p class="games__card__price">
                                <span class="games__card__price__unity">
                                    R$
                                </span>
                                <span class="games__card__price__price">
                                    130.27
                                </span>
                            </p>
                            <p class="games__card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quis, 
                                veniam omnis ullam in at doloribus blanditiis expedita illo 
                                consectetur.
                            </p>
                            <button class="button button--primary">
                                <i class='bx bx-cart-add'></i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    <div class="games__card">
                        <div class="games__card__background">
                            <img 
                                src="images/minecraft-logo.png" 
                                alt="Minecraft Logo" 
                                class="games__card__image"
                            >
                        </div>
                        <div>
                            <h3 class="games__card__title">
                                Minecraft
                            </h3>
                            <p class="games__card__price">
                                <span class="games__card__price__unity">
                                    R$
                                </span>
                                <span class="games__card__price__price">
                                    130.27
                                </span>
                            </p>
                            <p class="games__card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quis, 
                                veniam omnis ullam in at doloribus blanditiis expedita illo 
                                consectetur.
                            </p>
                            <button class="button button--primary">
                                <i class='bx bx-cart-add'></i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    <div class="games__card">
                        <div class="games__card__background">
                            <img 
                                src="images/minecraft-logo.png" 
                                alt="Minecraft Logo" 
                                class="games__card__image"
                            >
                        </div>
                        <div>
                            <h3 class="games__card__title">
                                Minecraft
                            </h3>
                            <p class="games__card__price">
                                <span class="games__card__price__unity">
                                    R$
                                </span>
                                <span class="games__card__price__price">
                                    130.27
                                </span>
                            </p>
                            <p class="games__card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quis, 
                                veniam omnis ullam in at doloribus blanditiis expedita illo 
                                consectetur.
                            </p>
                            <button class="button button--primary">
                                <i class='bx bx-cart-add'></i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                    <div class="games__card">
                        <div class="games__card__background">
                            <img 
                                src="images/minecraft-logo.png" 
                                alt="Minecraft Logo" 
                                class="games__card__image"
                            >
                        </div>
                        <div>
                            <h3 class="games__card__title">
                                Minecraft
                            </h3>
                            <p class="games__card__price">
                                <span class="games__card__price__unity">
                                    R$
                                </span>
                                <span class="games__card__price__price">
                                    130.27
                                </span>
                            </p>
                            <p class="games__card__description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero quis, 
                                veniam omnis ullam in at doloribus blanditiis expedita illo 
                                consectetur.
                            </p>
                            <button class="button button--primary">
                                <i class='bx bx-cart-add'></i>
                                Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact" id="contact">
            <hr class="divider divider--primary divider--small">
            <div class="container">
                <h2 class="contact__title">
                    Contato
                </h2>
                <p class="contact__text">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, molestias!
                </p>
                <form action="#" method="post" class="form">
                    <label for="email" class="form__label">
                        Seu email: <span class="form__required">*</span>
                    </label>
                    <input type="email" class="form__input" name="email" id="email">

                    <label for="message" class="form__label">
                        Sua mensagem: <span class="form__required">*</span>
                    </label>
                    <textarea name="message" id="message" cols="30" rows="20" class="form__textarea"></textarea>
                    
                    <input type="submit" value="Enviar" class="button button--primary" title="Enviar">
                </form>
            </div>
        </section>
    </main>
    <footer class="footer">
        <p class="footer__credits">
            &copy; 2022 - 
            <a href="http://twitter.com/DaniloFullStack12" target="_blank" rel="noopener noreferrer">Danilo Leipnitz <i class='bx bxl-twitter' ></i></a>
        </p>
    </footer>
</body>
</html>