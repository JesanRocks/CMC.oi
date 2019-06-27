<div class="container">
    <h1 class="display-5 text-justify">Galería</h1>
    <div class="row mt-5">
    @foreach($posts as $post)
      <div class="col-xs-12 col-md-4 col-lg-3">
        <div class="card p-1">
        @if($post->file)
          <img src="{{ $post->file }}" class="card-img-top img-fluid">
        @endif
{{--           <div class="card-body">
              <p class="card-text">{{ $post->excerpt}}</p>
          </div> --}}
        </div>
      </div>  
    @endforeach
      <div class="col-12">
        {{ $posts->render() }}
      </div>
    </div>{{--  Fin del row --}}
</div> {{-- fin del container--}}