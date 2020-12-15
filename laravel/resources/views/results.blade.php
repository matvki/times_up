@extends('layouts.base')
@section('css', '/css/results.css')
@section('title','Résulats')

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

@section('content')
<main>
    <div>
        <div>
            <p>
                @if ($request->team1 > $request2->team2 ou  )
                    
                @else
                    
                @endif
            </p>
            <img src="/img/podium2.png" alt="">
        </div>
        <div>
            <p>45</p>
            <img src="/img/podium1.png" alt="">
        </div>
        <div>
            <p>34</p>
            <img src="/img/podium3.png" alt="">
        </div>
    </div>
</main>


</section>
@endsection