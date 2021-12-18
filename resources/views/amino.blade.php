<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <button id=iris>irisデータ解析開始</button>
    <p id=iris_result></p>

</body>

</html>

<script src="/js/app.js"></script>
<script>
    var iris_button = document.getElementById("iris");
    var iris_result = document.getElementById("iris_result");

    function butotnClick() {
        var xhr = new XMLHttpRequest();
        xhr.open('GET', '/iris');
        xhr.send();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                iris_result.innerHTML = xhr.responseText;
                console.log(xhr.responseText);
            }
        }
    }

    iris.onClick = butotnClick();
    console.log(message('Hoge'));
</script>