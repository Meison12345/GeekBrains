<!DOCTYPE html>
<html lang="en">
<?php
$masUlName = ['Portein', 'Понравилось', 'Личный кабинет', 'Каталог', 'https://pngimg.com/uploads/shopping_cart/shopping_cart_PNG37.png'];
$catalogName = ['Товар1', 'Товар2', 'Товар3', 'Товар4', 'Товар5', 'Товар6', 'Товар7', 'Товар8'];
$title = "HomeWork1";
$newDate = date("d/m/Y");
$footerCopy = '&copy Все права защищены';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrapper">
        <header class="center header">
            <nav class="nav">
                <ul class="nav__ul">
                    <li><a href="index.php" class="nav__ul_link"><?php echo $masUlName[0]; ?></a></li>
                    <li><a href="#" class="nav__ul_link"><?php echo $masUlName[1]; ?></a></li>
                    <li><a href="#" class="nav__ul_link"><?php echo $masUlName[2]; ?></a></li>
                    <li><a href="#" class="nav__ul_link"><?php echo $masUlName[3]; ?></a></li>
                    <li><a href="#" class="nav__ul_link"><img src="<?php echo $masUlName[4]; ?>" class="cart"></a></li>
                </ul>
            </nav>
        </header>

        <main class="center main">
            <div class="main__wrapper">
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[0]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[1]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[2]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[3]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[4]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[5]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[6]; ?></a>
                <a href="#" class="main__wrapper_link"><img src="https://placehold.it/300x300" class="img"><?php echo $catalogName[7]; ?></a>
            </div>
        </main>


        <footer class="center footer">
            <p class="footer__copy"><?= $footerCopy?></p>
            <p class="footer__copy"><?= $newDate; ?></p>
        </footer>
    </div>
</body>
</html>