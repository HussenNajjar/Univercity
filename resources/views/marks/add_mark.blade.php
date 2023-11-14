
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{'../css/mark.css'}}">
    <title>Add Mark</title>
    <style>
        .container {
            position: relative;
            top: 50px;
            right: 110px;
            margin-top: 50px;
            transform: translate(-50px,-50px);
        }
        .container .form-group #date {
            width: 310px;
            padding: 5px 10px;
            font-weight: bold;
            border-radius: 3px;
        }
        .container button {
            width: 210;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>نموذج إضافة علامة طالب  </h1>
        <form action="{{ route('mark.store') }}" method="post" >
        @csrf
        @method('POST')

            <div class="form-group">
                <label for="name">  الرقم الجامعي   </label>
                <br>
                <input type="text" id="name" name="IDstudent" required>
    
            <div class="form-group">
                <label for="name">اسم  الطالب  </label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="name">اسم  المادة  </label>
                <input type="text" id="name" name="MaterialName" required>
            </div>
            <div class="form-group">
                <label for="semester">معهد / كلية   </label>
                <select id="semester" name="universitie" required>
                    <option value="معهد"> معهد </option>
                    <option value="كلية">  كلية </option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">  علامة  العملي   </label>
                <input type="text" id="name" name="practical" required placeholder="علامة العملي ">
            </div>
            <div class="form-group">
                <label for="name">  علامة  النظري   </label>
            
                <input type="text" id="name" name="theoretical" required placeholder="علامة النظري  ">
            </div>
                <label for="name">    المجموع   </label>
                <input type="text" id="name" name="Total" required placeholder=" المجموع   ">
                

                <div class="form-group">
                <label for="semester"> اشعار   </label>
                <select id="semester" name="message" required>
                    <option value="ناجح"> ناجح </option>
                    <option value="راسب">  راسب </option>
                </select>
            </div>
            </div>
            <div class="form-group">
                <label for="date">التاريخ:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <button type="submit">إرسال</button>
        </form>
    </div>  
</body>
</html>