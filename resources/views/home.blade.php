 @php
  
  $data = config("pasta"); 

  $lunga = [];
  $corta = [];
  $cortissima = [];

  foreach ($data as $key => $prodotto) {
    $prodotto["id"] = $key;
    if($prodotto["tipo"] == "lunga"){
      $lunga[] = $prodotto;
    } elseif ($prodotto["tipo"] == "corta"){
      $corta[] = $prodotto;
    } elseif ($prodotto["tipo"] == "cortissima"){
      $cortissima[] = $prodotto;
    }
  }

@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>La Molisana - HOME</title>
</head>
<body>

    {{-- header --}}
    <header>
    <div id="logo"><img src="{{asset('img/marchio-sito-test.png')}}" alt="Logo"></div>
        <nav><ul>
            <li><a href="">Home</a></li>
            <li><a href="">Prodotti</a></li>
            <li><a href="">News</a></li>
            </ul>
        </nav>
    </header>
    {{-- // header --}}

    {{-- Main --}}
    <main>
      @if (!empty($lunga))
        <h2>Lunga</h2>
        <ul>
           @foreach ($lunga as $prodotto)
             <li>
             <img src="{{$prodotto['src']}}" alt="">
             <h3>{{$prodotto["titolo"]}}</h3>
             </li>                      
          @endforeach
        </ul>
      @endif
      @if (!empty($corta))
        <h2>Corta</h2>
        <ul>
           @foreach ($corta as $prodotto)
             <li>
             <img src="{{$prodotto['src']}}" alt="">
             <h3>{{$prodotto["titolo"]}}</h3>
             </li>                      
          @endforeach
        </ul>
      @endif
      @if (!empty($cortissima))
        <h2>Cortissima</h2>
        <ul>
           @foreach ($cortissima as $prodotto)
             <li>
             <img src="{{$prodotto['src']}}" alt="">
             <h3>{{$prodotto["titolo"]}}</h3>
             </li>                      
          @endforeach
        </ul>
      @endif


    </main>

    {{-- //Main --}}
  <script src="{{asset('js/app.js')}}"></script>
</body>
</html>