@extends('layouts.blog')
@section('titulo'," Galeria")
@section('content')
<div class="container">

  <div class="card-columns">
   @foreach($posts as $post)  

   <div class="card">
      @if($post->file)
      <img src="{{ $post->file }}" class="card-img-top img-fluid">
      @endif
      <div class="card-body">
        <h5 class="card-title">Card title that wraps to a new line</h5>
        <p class="card-text">{{ $post->excerpt}}</p>
      </div>
    </div> 
    @endforeach
    
  </div>

    <div class="col-12">
      {{ $posts->render() }}
    </div>
</div>
@endsection