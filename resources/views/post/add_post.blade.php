
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./dist/style.css">
        <link rel="stylesheet" href="css/all.min.css">
    <title>Upload Post</title>
   <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        .form {
            background: rebeccapurple;
            display: flex;
            justify-content: space-between;
            padding: 10px 100px;
            align-items: center;
            position: static ;
        }
        .form .uploadimage input {
            display: none;
        }
        .form .uploadimage label {
            background-color: rgb(238, 241, 242);
            padding: 5px 10px;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            cursor: pointer;
        }
        .form .text input {
            border-radius: 10px;
            outline: none;
            padding: 2px 10px;
        }
        .form .date input {
            width: 200px;
            border-radius: 10px;
            padding: 2px 10px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-weight: 300;
        }
        .form .button button {
            background-color: rgb(219, 201, 6);
            padding: 5px 10px;
            width: 150px;
            border-radius: 10px;
            font-size: 17px;
            font-weight: 700;   
        }
        .container {
            padding-top: 2px;
            width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .container .info {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgb(219, 208, 208);
            padding: 10px 20px;
            border-radius: 10px;
        }
        .container .info img {
            width: 40px;
        }
        .container .post img{
            min-width: 600px;
            max-width: 601px;
        }
        .container .like {
            display: flex;
            justify-content:space-between;
            align-items: center;
            background-color: rgb(219, 208, 208);
            padding: 5px 10px;
            border-radius: 10px;
        }
        .container .like .s1,.s2 i{
            padding: 2px;
            margin-left: 7px;
        }
        .line {
            margin-top: 10px;
        }
   </style>
</head>
<body>


<form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data" class="form">
        @csrf
        @method('POST')   
        
        <div class="uploadimage">
                <label for="up">Chose Images</label>
                <input type="file" name="image" id="up">
            </div>
            <div class="text">
                <input type="text" name="text" id="" placeholder="Write Hear">
            </div>
            <div class="date">
                <input type="date" name="data_time" id="">
            </div>
            <div class="button">
                <button>Post</button>
            </div>
        </form>

       
      
</body>
</html>