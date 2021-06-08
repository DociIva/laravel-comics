@extends('layouts.main')

@section('content')
  <main>
     <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
               <div class="card">
                <img src="{{ $card['image'] }}" alt="">
                <h3>{{ $card['title']}}</h3>
              </div>
           @endforeach
        </div>

     </section>
  </main>
@endsection