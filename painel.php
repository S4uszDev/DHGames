<?php 

require __DIR__.'/app/boot.php';

if(!isLogged()) redirect('login.php');

$database = connectToDatabase();
$userId = getAuthenticatedUserId();

$userData = fetchUserDataById($userId, $database);

$statusMessage = null;
$statusType = 'error';

if(!empty($_POST)) {
    $name = empty($_POST['name']) ? $userData['name'] : $_POST['name'];
    $email = empty($_POST['email']) ? $userData['email'] : $_POST['email'];
    $password = empty($_POST['password']) ? $userData['password'] : $_POST['password'];

    if(empty($name) || empty($email) || empty($password)) {
        $statusMessage = 'Complete todos os campos do formulário!';
    } else if(strlen(trim($name)) < 2) {
        $statusMessage = 'Seu nome é inválido! Ele deve ter no mínimo 2 caracteres.';
    } else if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $statusMessage = 'Seu e-mail é inválido!';
    } else if($email !== $userData['email'] && checkIfEmailExists($email, $database)) {
        $statusMessage = 'Esse e-mail já está sendo utilizado!';
    } else if(strlen(trim($password)) < 3) {
        $statusMessage = 'Sua senha é inválida!';
    }

    if(empty($statusMessage)) {
        $success = updateUserDataById($userId, $name, $email, $password, $database);
        if($success) {
            $statusMessage = 'Informações atualizadas com sucesso!';
            $statusType = 'success';

            $userData['name'] = $name;
            $userData['email'] = $email;

        } else {
            $statusMessage = 'OOPS, ocorreu algum problema...';
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
    <link rel="stylesheet" href="styles/painel.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <title>DHGames - Painel</title>
</head>
<body>
    <header class="header" id="startHere">
        <div class="container">
            <a class="header__logo" href="/">
                DHGames
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
                <a href="sair.php" class="header__button button button--primary button--border">
                    Sair <i class='bx bx-exit'></i>
                </a>
            </div>
        </div>
    </header>

    <main>
        <section class="dashboard">
            <div class="container">
                <div class="dashboard__plate">
                    <h1 class="dashboard__plate__title">
                        Suas informações
                    </h1>
                    <p class="dashboard__plate__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, quod?
                    </p>

                    <?php if(!empty($statusMessage)): ?>
                        <p class="<?= sprintf("infoBox infoBox--%s", $statusType) ?>">
                            <?= $statusMessage ?>
                        </p>
                    <?php endif ?>

                    <form action="#" class="form" method="POST">
                        <label for="name" class="form__label">
                            Seu nome:</span>
                        </label>
                        <input type="text" name="name" id="name" placeholder="<?= $userData['name'] ?>" class="form__input">

                        <label for="email" class="form__label">
                            Seu email:</span>
                        </label>
                        <input type="email" name="email" id="email" placeholder="<?= $userData['email'] ?>" class="form__input">

                        <label for="password" class="form__label">
                            Atualizar sua senha</span>
                        </label>
                        <input type="password" name="password" id="password" placeholder="Sua nova senha" class="form__input">

                        <input type="submit" value="Atualizar informações" class="button button--primary">
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <p class="footer__credits">
            &copy; 2022 - 
            <a href="http://twitter.com/daniloleipnitz12" target="_blank" rel="noopener noreferrer">Danilo Leipnitz <i class='bx bxl-twitter' ></i></a>
        </p>
    </footer>
</body>
</html>