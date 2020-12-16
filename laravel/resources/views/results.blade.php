@extends('layouts.base')
@section('css', '/css/results.css')
@section('title','Résulats')

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;900&display=swap" rel="stylesheet">

@section('content')
<main>

    <div>
        <div>
            @if ($request->team1 > $request->team2  )
                <p></p>
            @else
                <p></p>
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

    <div>
        <div>
            @if ($request->team1 > $request->team2  )
                <p></p>
            @else
                <p></p>
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