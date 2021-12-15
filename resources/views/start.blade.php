<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="id">
        {{$decrypted}}
    </div>

    <p class="text-3xl font-bold underline">before</p>
    <div class="text-5xl font-extrabold">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
            無機化学
        </span>
    </div>
    <div class="text-5xl font-extrabold">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-green-500">
            有機化学
        </span>
    </div>
    <div class="text-5xl font-extrabold" id=amino>
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-500 to-yellow-500">
            必須アミノ酸
        </span>
    </div>

</body>
<script>
    var buttonClick = () => {
        window.location.href = "amino";
    }

    var amino_button = document.getElementById("amino");
    amino_button.onclick = buttonClick;
</script>

</html>