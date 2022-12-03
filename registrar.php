<?php 

include __DIR__.'/app/boot.php';

$validationError = null;

if(!empty($_POST)) {
    $name = $_POST['name'] ?? null;
    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    $database = connectToDatabase();

    if(empty($name) || empty($email) || empty($password)) {
        $validationError = 'Complete todos os campos do formulário!';
    } else if(strlen(trim($name)) < 2) {
        $validationError = 'Seu nome é inválido! Ele deve ter no mínimo 2 caracteres.';
    } else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $validationError = 'Seu e-mail é inválido!';
    } else if(checkIfEmailExists($email, $database)) {
        $validationError = 'Esse e-mail já está sendo utilizado!';
    } else if(strlen(trim($password)) < 3) {
        $validationError = 'Sua senha é inválida!';
    }

    if(empty($validationError)) {
        $userId = registerNewUser($name, $email, $password, $database);
        if($userId === false) {
            $validationError = 'OOPS, ocorreu um erro!';
        } else {
            generateAuthenticatedSession($userId);
            redirect('painel.php');
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;800&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/registrar.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>Nearby - Registro</title>
</head>
<body>
    <header class="header" id="startHere">
        <div class="container">
            <a class="header__logo" href="/">
                Nearby
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
        <section class="register">
            <div class="container">
                <div class="register__plate">
                    <h1 class="register__plate__title">
                        Registro
                    </h1>
                    <p class="register__plate__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, quod?
                    </p>

                    <?php if(!empty($validationError)): ?>
                        <p class="infoBox infoBox--error">
                            <?= $validationError ?>
                        </p>
                    <?php endif ?>

                    <form action="#" class="form" method="POST">
                        <label for="name" class="form__label">
                            Seu nome: <span class="form__required">*</span>
                        </label>
                        <input type="text" name="name" id="name" maxlength="255" min="1" placeholder="João" class="form__input">

                        <label for="email" class="form__label">
                            Seu email: <span class="form__required">*</span>
                        </label>
                        <input type="email" name="email" id="email" maxlength="255" min="1" placeholder="joão@email.com" class="form__input">

                        <label for="password" class="form__label">
                            Uma boa senha: <span class="form__required">*</span>
                        </label>
                        <input type="password" name="password" id="password" maxlength="255" min="3" placeholder="<?= bin2hex(random_bytes(3)) ?>" class="form__input">

                        <input type="submit" value="Enviar" class="button button--primary">
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footer__credits">
            &copy; 2022 - 
            <a href="http://twitter.com/SamosMC" target="_blank" rel="noopener noreferrer">SamosMC <i class='bx bxl-twitter' ></i></a>
        </p>
    </footer>
</body>
</html>