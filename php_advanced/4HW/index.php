<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .wrapper {
        width: 900px;
        margin: 50px auto;
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .text {
        width: 900px;
        margin: 0 auto;
        text-align: center;
        margin-top: 50px;
        display: none;
    }

    button {
        width: 200px;
        margin: 0 auto;
        margin-top: 10px;
    }
</style>

<body>
    <script>
        window.addEventListener('load', () => {
            let wrapper = document.querySelector('.wrapper');
            wrapper.addEventListener('click', function(el) {
                if (el.target.tagName === 'BUTTON') {
                    let [...data] = document.querySelector('button').parentElement.children
                    data.forEach(element => {
                        if (element.className.slice(9) == el.target.className) {
                            element.style.display = 'block';
                        }
                    })

                }
            })
        })
    </script>
</body>

<?php
$link = mysqli_connect("localhost", "root", "root", "gb_php_pro_lvl");
$result = $link->query('SELECT * FROM `test`');
echo '<div class="wrapper">';
while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
{
    echo '<button class="' . $row['id'] . '">Кнопка' . $row['id'] . '</button> <p class="text text' . $row['id'] . '">' . $row['id'] . '. Название: ' . $row['name'] . '<br>' . 'Описание: ' . $row['description'] . '</p>'; // выводим данные
    // if ($row['id'] == 2)
    //     break;
}
echo '</div>';
?>

</html>