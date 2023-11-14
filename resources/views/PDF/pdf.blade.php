<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/files.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&display=swap" rel="stylesheet">
    <style>
        .page {
            display: block;
            
        }
        .page .file-page .file{
            padding: 20px;
        }
    </style>
</head>

<body>
    <div  class="page d-flex">

        <div class="files-page  d-flex m-200 gap-20">
            <div class="files-content d-grid gap-20">
                @foreach($posts as $pdf)


              
                <div class="file bg-white p-10 rad-10">
                    <i class="fa-solid fa-download c-grey p-absolute"></i>
                    <div class="icon txt-c">
                        <img class="mt-15 mb-15" src="{{ asset('imgs/A.png') }}" alt="">
                    </div>
                   
                    <div class="txt-c mb-10 fs-14"> {{ $pdf['name'] }} </div>
                    <p style="text-align: center;" class="c-grey fs-13">
                    <a href="" ></a>

                    <a  download="{{$pdf->name}}" href="{{asset('pdf/pdf/'.$pdf->file_pdf)}}"  style="width: 100px; border: none; font-weight: 800; padding: 5px 10px; color: #fff; cursor: pointer; border-radius: 5px; background-color: rgb(134, 110, 157);">download</a>

                   

                   <!-- <a download="{{ $pdf['name'] }}" href=".././pdf/pdf/{{ $pdf['file_pdf'] }}">تحميل</a>-->

      <!--  <a  download="{{ $pdf['name'] }}" href="../pdf/{{ $pdf['file_pdf'] }}">download</a>-->
   
                    <div class="info between-flex mt-10 pt-10 fs-13 c-grey">
                        <span>{{ $pdf['date_time'] }}</span>
                        <span>5.5MB</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>

</html>
