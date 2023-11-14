
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"   href="{{ asset('../css/mark.css') }}">
  
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>نموذج تعديل علامة طالب  </h1>
        <form action="{{ route('mark.update',$edit_mark->id)}}" method="post">
        @csrf
        @method('PUT')


            <div class="form-group">
                <label for="name">  الرقم الجامعي   </label>
                <br>
                <input type="text" id="name" name="IDstudent" required  value="{{$edit_mark->IDstudent}}">
    
            <div class="form-group">
                <label for="name">اسم  الطالب  </label>
                <input type="text" id="name" name="name" required value="{{$edit_mark->name}}">
            </div>
            <div class="form-group">
                <label for="name">اسم  المادة  </label>
                <input type="text" id="name" name="MaterialName" required  value="{{$edit_mark->MaterialName}}">
            </div>
            <div class="form-group">
                <label for="semester">معهد / كلية   </label>
                <select id="semester" name="universitie" required  value="{{$edit_mark->theoretical}}">
                    <option value="معهد"> معهد </option>
                    <option value="كلية">  كلية </option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">  علامة  العملي   </label>
                <input type="text" id="name" name="practical" required placeholder="علامة العملي "  value="{{$edit_mark->theoretical}}" >
            </div>
            <div class="form-group">
                <label for="name">  علامة  النظري   </label>
            
                <input type="text" id="name" name="theoretical" required placeholder="علامة النظري  " value="{{$edit_mark->practical}}">
            </div>
                <label for="name">    المجموع   </label>
                <input type="text" id="name" name="Total" required placeholder=" المجموع   "  value="{{$edit_mark->Total}}">
                

                <div class="form-group">
                <label for="semester"> اشعار   </label>
                <select id="semester" name="message" required  value="{{$edit_mark->message}}"> 
                    <option value="ناجح"> ناجح </option>
                    <option value="راسب">  راسب </option>
                </select>
            </div>
            </div>
         
            <button type="submit">إرسال</button>
        </form>
    </div>  
</body>
</html>