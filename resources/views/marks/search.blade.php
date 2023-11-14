







<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/style.css">
    <link rel="stylesheet" href="css/root.css">
    <title>Mark</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: rgba(127, 255, 212, 0.349);
        }
        .contanier{
            width: 900px;
            /* background: linear-gradient(to left,#7c1818,#666c15); */
            background-color: rgb(198, 214, 209);
            margin: 0px auto;
            align-items: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .contanier form {
            margin: 30px auto;
        }
       .contanier form label {
        font-size: 15px;
        font-weight: bold;
        color: rgb(98, 95, 95);
       }
       .contanier form input {
        border: none;
        padding: 5px;
        border-radius: 6px;
        text-align: center;
        outline: none;
        font-size: 15px;
        font-weight: 700;
        color: blue;
       }
       .contanier table {
        border: 1px solid black;
        width: 800px;
        margin-bottom: 30px;
        border-radius: 10px;
       }
       .contanier table th,td{
        border: 1px solid rgb(230, 227, 227);
        border-radius: 10px;
       }
       .contanier form button {
        background-color: rgb(52, 140, 152);
        padding: 5px 7px;
        margin-right: 10px;
        font-size: 15px;
        font-weight: bold;
        border-radius: 6px;
        width: 100px;
       }
    </style>
</head>
<body>
    <div class="header" id="header" style="box-shadow: none;direction: ltr; height: 70px;">
        <div class="container">
            <a href="#" class="logo">IT</a>
            <ul class="main-nav">
                <li><a href="index_h">الرئيسية</a></li>
            </ul>
        </div>
    </div>

   
    <div class="contanier">
        <form action="{{ route('search') }}" method="GET">
        @csrf
            <label for="">ابحث بالرقم الجامعي :</label>
            <input type="text" name="id" id="">
            <button>Serch</button>
        </form>
        <table>
           <thead>
            <tr>
                <th> الرقم الجامعي</th>
                <th> اسم الطالب</th>
                <th> اسم المادة</th>
                <th> الكلية</th>
                <th> النظري</th>
                <th>النظري</th>
                <th> العملي </th>
                <th> الاشعار </th>
            </tr>
           </thead>
           <tbody>
           @foreach ($marks as $mark )
        <tr>
          
              <td>{{$mark->IDstudent}}</td>
              <td>{{$mark->name}}</td>
              <td>{{$mark->MaterialName}}</td>
              <td>{{$mark->universitie}}</td>
              <td>{{$mark->theoretical}}</td>
              <td>{{$mark->practical}}</td>
              <td>{{$mark->Total}}</td>
              <td>{{$mark->message}}</td>
              @if(auth()->user()->role==1)
             
              
              <td> <a href="{{ route('mark.edit',$mark->id) }}">edit</a></td>
              <form action="{{route('mark.destroy',$mark->id)}}" method="post">
              @method('delete')
              @csrf
           <td> <button type="submit"> delete</button></td>
          </form>
          @endif
              
            
        </tr>
    

        @endforeach
           </tbody>
        </table>
    </div>
</body>
</html>