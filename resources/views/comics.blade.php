@extends('layouts.main')

@section('content')
  <main class="content pad-t pad-b">
     <section class="container">
        <div class="cards">
            @foreach ($cards as $card)
               <div class="card">
                <img src="{{ $card['image'] }}" alt="">
                <h3>{{ $card['title']}}</h3>
              </div>
           @endforeach
        </div>
        <div class="btn-blue text-center">LEAD MORE</div>
     </section>
     <div class="sez-blue"></div>
  </main>
@endsection