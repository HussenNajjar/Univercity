<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IT</title>
    <link rel="stylesheet" href="{{'css/normalize.css'}}" />
    <link rel="stylesheet" href="{{'css/root.css'}}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{'css/all.min.css'}}" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&#038;display=swap" rel="stylesheet" />
    <style>
        .header .main-nav>li>a {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 72px;
    position: relative;
    color: black;
    padding: 0 17px;    
    overflow: hidden;
    font-size: 16PX;
    font-weight: 600;
    transition: var(--main-transition);
}

.header .container .loo {
    font-size: 15px;
    font-weight: bold;
    text-decoration: none;
}
    </style>
</head>

<body>

<x-guest-layout>

<x-slot name="logo">
  
</x-slot>


    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">IT</a>
            <ul class="main-nav">
              
               
              <!--  <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <br>
                  

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                   <h1>   تسجيل الخروج</h1>
            
            </button>

                </form>-->

                <li> <a
                    href="{{ route('profile.show') }}"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                > بروفايل</a></li>

                @if(auth()->check())
                @if(auth()->user()->role==1)
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <br>
                  

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                   <h1 class="loo">تسجيل الخروج</h1>
            
            </button> 
                </form>
                 <li><a href="/PDF1/create">  رفع الملفات </a></li>
                 <li><a href="/Mail">  رسائل الطلاب</a></li>
                 <li><a href="/post"> القرارات</a></li>
                 <li><a href="/post/create">رفع القرارات</a></li>
                 <li><a href="/search">العلامات </a></li>
                 <li><a href="/mark/create">رفع العلامات</a></li>
                 <li><a href="#articles">المساقات</a></li>
                 <li><a href="/REgister1">انشاء حساب</a></li>
    
                @elseif (auth()->user()->role==2)

                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <br>
                  

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">            
            </button> 

                </form>
                <li> <a href="/post"> القرارات</a></li>    
                 <li><a href="/search">العلامات </a></li>
                 <li><a href="/PDF1/create">  رفع الملفات </a></li>
                 <li><a href="#articles">المساقات</a></li>

               

                 @else
                 <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <br>
                  

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">
                   <h1>   تسجيل الخروج</h1>
            
            </button> 

                </form>
                 <li><a href="/post"> القرارات</a></li>
                 <li><a href="/search">العلامات </a></li>    
                 <li><a href="#articles">المساقات</a></li>

              

                @endif
        @else
        <a href="{{ route('login') }}">Login</a>

@endif


            </div>
        </div>
 
</x-guest-layout>

            </ul>
        </div>
    </div>
    <!-- End Header -->
    <!-- Start Landing -->
    <div class="landing">
        <div class="container">
            <div class="text">
                <h1>Welcome, To Idlib University</h1>
                <p>Hello, students at the Technology Complex! Here, you will find everything you need.</p>
            </div>
            <div class="image">
                <img style="width: 370px;" decoding="async" src="imgs/idlib_u.jpg" alt="" />
            </div>
        </div>
        <a href="#articles" class="go-down">
            <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
    </div>
    <!-- End Landing -->
    <!-- Start Articles -->
    <div class="articles" id="articles">
        <h2 class="main-title">المساقات</h2>
        <div class="container">
            <div class="box">
                <img decoding="async" src="imgs/Cyber attack-amico.png" alt="" />
                <div class="content">
                    <h3>Cyber Security</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                    <a href="/track">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="imgs/Programming-bro.png" alt="" />
                <div class="content">
                    <h3>Backend Developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                <a href="/track">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="imgs/Software engineer-rafiki.png" alt="" />
                <div class="content">
                    <h3>Mobile Developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                <a href="/track">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
            <div class="box">
                <img decoding="async" src="imgs/Developer activity-bro.png" alt="" />
                <div class="content">
                    <h3>Frontend Developer</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                </div>
                <div class="info">
                <a href="/track">Read More</a>
                    <i class="fas fa-long-arrow-alt-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    <!-- End Articles -->
    <!-- Start Features -->
    <div class="features" id="features">
        <h2 class="main-title">المعهد التقاني للحاسوب</h2>
        <div class="container">
            
            
            <div class="box quality">
                <div class="img-holder"><img decoding="async" src="imgs/features-01.jpg" alt="" /></div>
                <h2>الدورات السابقة</h2>
                <p>ستجد هنا كل ما يخص الدورات السابقة</p>
                <a href="#">More</a>
            </div>
            <div class="box quality">
                <div class="img-holder"><img decoding="async" src="imgs/features-01.jpg" alt="" /></div>
                <h2>السنة الثانية</h2>
                <p>ستجد هنا جميع مقررات السنة الثانية وملفات تقوية</p>
                <a href="/it/2">More</a>
            </div>
            <div class="box quality">
                <div class="img-holder"><img decoding="async" src="imgs/features-01.jpg" alt="" /></div>
                <h2>السنة الأولى</h2>
                <p>ستجد هنا جميع مقررات السنة الأوبى وملفات تقوية</p>
                <a href="/it/1">More</a>
            </div>
        </div>
    </div>  

    
    <div class="features" id="features">
        <h2 class="main-title">كلية الهندسة المعلوماتية</h2>
        <div class="container">
            <div class="box passion">
                    <div class="img-holder"><img decoding="async" src="imgs/features-03.jpg" alt="" /></div>
                    <h2>السنة الثالثة</h2>
                    <p>ستجد هنا جميع مقررات السنة الثالثة وملفات تقوية</p>
                    <a href="/universitie/3">More</a>
            </div> 
            <div class="box passion">
                <div class="img-holder"><img decoding="async" src="imgs/features-03.jpg" alt="" /></div>
                <h2>السنة الثانية</h2>
                <p>ستجد هنا جميع مقررات السنة الثانية وملفات تقوية</p>
                <a href="/universitie/2">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img decoding="async" src="imgs/features-03.jpg" alt="" /></div>
                <h2>السنة الأولى</h2>
                <p>ستجد هنا جميع مقررات السنة الأولى وملفات تقوية</p>
                <a href="/universitie/1">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img decoding="async" src="imgs/features-03.jpg" alt="" /></div>
                <h2>الدورات السابقة</h2>
                <p>ستجد هنا كل ما يخص الدورات السابقة</p>
                <a href="#">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img decoding="async" src="imgs/features-03.jpg" alt="" /></div>
                <h2>السنة الخامسة</h2>
                <p>ستجد هنا جميع مقررات السنة الخامسة وبعض المشاريع للتدريب</p>
                <a href="/universitie/5">More</a>
            </div>
            <div class="box passion">
                <div class="img-holder"><img decoding="async" src="imgs/features-03.jpg" alt="" /></div>
                <h2>السنة الرابعة</h2>
                <p>ستجد هنا جميع مقررات السنة الرابعة وبعض المشاريع</p>
                <a href="/universitie/4">More</a>
            </div>
        </div>
    </div>
    <!-- End Features -->
    <!-- Start Stats -->
    <div class="stats" id="stats">
        <h2>الإحصائيات</h2>
        <div class="container">
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number">1100</span>
                <span class="text">التصنيف</span>
            </div>
            <div class="box">
                <i class="far fa-user fa-2x fa-fw"></i>
                <span class="number">400</span>
                <span class="text">الطلاب الخريجين</span>
            </div>
            <div class="box">
                <i class="fas fa-code fa-2x fa-fw"></i>
                <span class="number">300</span>
                <span class="text">الكلية</span>
            </div>
        
            <div class="box">
                <i class="far fa-money-bill-alt fa-2x fa-fw"></i>
                <span class="number">200</span>
                <span class="text">المعهد</span>
            </div>
        </div>
    </div>
    <!-- End Stats -->
    <!-- Start Discount -->
    <div class="discount" id="discount">
        <div class="image">
            <div class="content">
                <h2>تواصل معنا </h2>
                <p>
                    
                </p>
                <img decoding="async" src="imgs/discount.png" alt="" />
            </div>
        </div>
        <div class="form">
            <div class="content">
                <h2 style="font-size: 30px">تواصل مع شؤون الطلبة</h2>
                <form action="{{ route('Mail.store') }}" method="post">
        @csrf
        @method('POST')
                    <input class="input" type="text" placeholder="Your Name" name="name" />
                    <input class="input" type="email" placeholder="Your Email" name="email" />
                    <input class="input" type="text" placeholder="Your Phone" name="phone" />
                    <textarea class="input" placeholder="Tell Us About Your Needs" name="text"></textarea>
                    <input type="submit" value="Send" />
                </form>
            </div>
        </div>
    </div>
    <!-- End Discount -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container">
            <div class="box">
                <h3 style="font-size: 30px;">Idlib University</h3>
                <ul class="social">
                    <li>
                        <a href="#" class="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="youtube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </li>
                </ul>
               
            </div>
            <div class="box">
                <ul class="links">
                    <li><a href="#">Important Link 1</a></li>
                    <li><a href="#">Important Link 2</a></li>
                </ul>
            </div>
            <div class="box">
                <div class="line">
                    <i class="fas fa-map-marker-alt fa-fw"></i>
                    <div class="info">Syria, Idlib, Street Number 220</div>
                </div>
                <div class="line">
                    <i class="far fa-clock fa-fw"></i>
                    <div class="info">Worktime: From 7:00 To 18:00</div>
                </div>
                <div class="line">
                    <i class="fas fa-phone-volume fa-fw"></i>
                    <div class="info">
                        <span>+20123456789</span>
                        <span>+20198765432</span>
                    </div>
                </div>
            </div>
            <div class="box footer-gallery">
                <img decoding="async" src="imgs/gallery-01.png" alt="" />
                <img decoding="async" src="imgs/gallery-02.png" alt="" />
                <img decoding="async" src="imgs/gallery-03.jpg" alt="" />
                <img decoding="async" src="imgs/gallery-04.png" alt="" />
                <img decoding="async" src="imgs/gallery-05.jpg" alt="" />
                <img decoding="async" src="imgs/gallery-06.png" alt="" />
            </div>
        </div>
        <p class="copyright">Made With &lt; By Hussin Najar</p>
    </div>
    <!-- End Footer -->
    <script src="js/main.js"></script>
</body>

</html>