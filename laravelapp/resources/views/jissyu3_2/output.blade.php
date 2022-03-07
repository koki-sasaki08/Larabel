<html>
<head>
   <title>Jissyu/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <ol>
    @foreach($data as $item)
    <!--最初の繰り返しかどうか-->
    @if($loop->first)
    <p>データ一覧</p>
    @endif
    <!--現在の繰り返し数（1から開始）-->
    <li>No,{{$loop->iteration}}.{{$item}}</li>
    <!--最後の繰り返しかどうか-->
    @if($loop->last)
    <p>ここまで出力</p>
    @endif
    @endforeach
 </body>
</html>
