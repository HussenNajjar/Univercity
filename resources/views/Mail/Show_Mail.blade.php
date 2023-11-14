

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


@foreach($Mails as $Mail)
    <div class="cards">
        <div class="content">
           
        <p> {{$Mail->name}} </p>
        <p> {{$Mail->email}} </p>
        <p> {{$Mail->phone}} </p>
        <p> {{$Mail->text}} </p>

            

        @if(auth()->user()->role==1)
             
              
             <form action="{{route('Mail.destroy',$Mail->id)}}" method="post">
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
