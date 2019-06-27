@extends('layouts.blog')
@section('titulo'," Galeria")
@section('content')

<div class="container">
    <h1 class="display-5 text-justify">Galería</h1>
    <div class="row mt-5">
    @foreach($posts as $post)
      <div class="col-xs-12 col-md-4 col-lg-3">
        <div class="card p-1">
        @if($post->file)
          <img src="{{ $post->file }}" class="card-img-top img-fluid" data-toggle="modal" data-target=".{{ $post->slug }}">
        @endif
  
  <div class="modal fade {{ $post->slug }}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <img src="{{ $post->file }}" class="card-img-top img-fluid">
      </div>
    </div>
  </div>


        </div>
      </div>  
    @endforeach
      <div class="col-12">
        {{ $posts->render() }}
      </div>
    </div>{{--  Fin del row --}}
</div> {{-- fin del container--}}
@endsection