<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="{{'css/all.min.css'}}">
    <title>IT</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #3498db, #42316b);
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            padding: 0;
            direction: rtl;
        }

        .container {
            max-width: 400px;
            margin: 60px auto 0 auto;
            padding: 20px;
            background-color: #b1cdfa;
            box-shadow: 0 2px 4px rgba(1, 2, 2, 0.1);
            border-radius: 5px;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            font-size: 17px;
        }

        select,
        input[type="file"],
        textarea {
            width: 70%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #042a53;
        }

        #name {

            width: 70%;
            padding: 10px;
            margin: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;

        }

        .container .form-group .up {
            background-color: #007BFF;
            width: 100px;
            margin: 10px auto;
            padding: 5px;
            border-radius: 10px;
            cursor: pointer;
        }

        .container .form-group #file {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="/store" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="name">اسم المادة </label>
                <br>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="semester">معهد/ كلية </label>
                <br>
                <select id="semester" name="universitie_id" required>
                    <option value="2"> معهد </option>
                    <option value="1"> كلية </option>

                </select>
            </div>
            <div>
                <label for="semester">السنة الدراسية </label>
                <br>
                <select id="semester" name="year" required>
                    <option value="1">السنة الأولى </option>
                    <option value="2">السنة الثانية </option>
                    <option value="3">السنة الثالثة </option>
                    <option value="4">السنة الرابعة </option>
                    <option value="5">السنة الخامسة </option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="semester">الفصل الدراسي </label>
                <br>
                <select id="semester" name="Chapter" required>
                    <option value="1">الفصل الدراسي الأول</option>
                    <option value="2">الفصل الدراسي الثاني</option>

                </select>
            </div>

            <div class="form-group">
                <label for="file" class="up">up
                </label>
                <input type="file" id="file" name="file_pdf" accept=".pdf" required>
            </div>


            <div class="form-group">
                <label for="date">التاريخ:</label>
                <input type="date" id="date" name="date_time" required>
            </div>
            <button type="submit">إرسال</button>
        </form>
    </div>
</body>

</html>