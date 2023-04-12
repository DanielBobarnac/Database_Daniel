<div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{Storage::url($article->img)}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$article->title}}</h5>
          <h6 class="card-title">{{$article->author}}</h6>
          <p class="card-text">{{$article->getDescriptionSubstring()}}</p>
          <p class="card-text"><small class="text-body-secondary">Caricato il : {{$article->getFormattedDate()}}</small></p>
          <a href="{{route('article.detail' , ['id'=>$article->id])}}" class="btn btn-primary">Dettaglio</a>
        </div>
      </div>
    </div>
  </div>