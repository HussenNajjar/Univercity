


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{'../css/card.css'}}" />
    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>



  @foreach($posts as $post)
    <div class="cards">
      <div class="content">
      <img class="rounded-circle" src="../image/images/{{$post->image}}" alt="..." width="250px" height="250px"></a>
                <h5> {{$post->text}}</h3>
                 <h6>{{$post->data_time}}</h3>

                 
        @if(auth()->user()->role==1)
             
              
             <a href="{{ route('post.edit',$post->id) }}">edit</a>
 
             <form action="{{route('post.destroy',$post->id)}}" method="post">
             @method('delete')
             @csrf
             <button type="submit"> delete</button>
             </form>
                         
             @endif
          
              
            </div>
          
    </div>
    @endforeach
  </body>
</html>










