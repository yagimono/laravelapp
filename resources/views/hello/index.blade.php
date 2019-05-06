<html>
<head>
    <title>Hello/Index</title>
    <style>
        body {font-size:16pt; color:#999;}
        h1 {font-size:50pt; text-align:right; color:#f6f6f6; margin:-20px 0 -30px 0; letter-spacing:-4pt;}
    </style>
</head>
<body>
<h1>&#064;forでぃれくてぃぶの例</h1>
<ol>
    @for ($i = 1;$i < 100;$i++)
        @if ($i % 2 == 1)
            @continue
        @elseif ($i <= 10)
            <li>No, {{$i}}
        @else
            @break
        @endif
    @endfor
</ol>
</body>
</html>