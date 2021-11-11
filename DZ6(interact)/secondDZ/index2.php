<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
    .center {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .space {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .reviews {
        display: flex;
        justify-content: space-around;
        width: 500px;
        flex-direction: column;
    }
</style>

<body class="center">
    <h1>Добавить отзыв</h1>
    <form action="POST" class="feedback__form" name="main__form">
        <input type="email" name="email" class="feedback__email" placeholder="Email">
        <input type="text" name="name" class="feedback__name" placeholder="First name">
        <input type="text" name="desc" class="feedback__desc" placeholder="Description">
        <button type="submit" class="btn_send" name="submit">Submit</button>
        <hr>
    </form>
    <section class="reviews">
        <?php
        require_once 'db.php';
        require_once 'requere.php'
        ?>
    </section>
    <script>
        let btn_send = document.querySelector('.btn_send')
        btn_send.addEventListener('click', (el) => {
            el.preventDefault();
            console.log(el.target);
// async function getData(){
//     let data = await fetch('http://127.0.0.1/openserver/phpmyadmin/sql.php?db=example&table=example')
//     console.log(data);
// }
// $.post('http://127.0.0.1/openserver/phpmyadmin/sql.php?db=example&table=example', {text: 'Текст'}, function(data){
// 	alert(data);
// });
        })
    </script>
    <?php
    require_once 'update.php';
    ?>
</body>

</html>