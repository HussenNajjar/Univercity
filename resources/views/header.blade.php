<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT</title>
    <link rel="stylesheet" href="{{'../css/normalize.css'}}" />
    <link rel="stylesheet" href="{{'../css/root.css'}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{'../css/all.min.css'}}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
</head>

<body>




    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">IT</a>
            <ul class="main-nav">
                
            <li> <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                > بروفايل</a></li>

                @if(auth()->check())
                @if(auth()->user()->role==1)
                <form action="{{ route('logout') }}" method="POST">
                @csrf
        
                 <button type="submit">Logout</button>
                 </form>
                 <li><a href="/Mail">  رسائل الطلاب</a></li>
                 <li><a href="/post"> القرارات</a></li>
                 <li><a href="/post/create">رفع القرارات</a></li>
                 <li><a href="/search">العلامات </a></li>
                 <li><a href="/mark/create">رفع العلامات</a></li>
                 <li><a href="#articles">المساقات</a></li>
                 <li><a href="/REgister1">انشاء حساب</a></li>
    
                @elseif (auth()->user()->role==2)
                <form action="{{ route('logout') }}" method="POST">
                @csrf
        
                 <button type="submit">Logout</button>
                 </form>
                <li> <a href="/post"> القرارات</a></li>    
                 <li><a href="/search">العلامات </a></li>
                 <li><a href="/mark/create">رفع العلامات</a></li>
                 <li><a href="#articles">المساقات</a></li>

                 @else
                 <li><a href="/post"> القرارات</a></li>
                 <li><a href="/search">العلامات </a></li>    
                 <li><a href="#articles">المساقات</a></li>
                {{-- إخفاء العنصر عن المستخدم العادي --}}
                @endif
        @else
        <a href="{{ route('login') }}">Login</a>

@endif
            </div>
        </div>
 

        @yield('head')
    <!-- End Stats -->
    <!-- Start Discount -->
  
    <script src="js/main.js"></script>
</body>

</html>