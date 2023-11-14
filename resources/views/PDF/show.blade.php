<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="cards">
        <div class="content">
            <img src="{{ asset('imgs/Software engineer-rafiki.png') }}" alt="" />
            <h3>الفصل الأول</h3>
            <a href="../L_PDF/{{ $names }}/1">رابط الفصل الأول</a>
        </div>
        <div class="content">
            <img src="{{ asset('imgs/Software integration-bro.png') }}" alt="" />
            <h3>الفصل الثاني</h3>
            <a href="../L_PDF/{{ $names }}/2">رابط الفصل الثاني</a>
        </div>
    </div>
</body>
</html>
