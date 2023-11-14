<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($view as $post)

 <embed src="{{asset('image/'.$post->file)}}  " type="" width="100%"  height="1000px" >
@endforeach

</body>
</html>
