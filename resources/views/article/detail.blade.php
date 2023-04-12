<x-layout>
    <x-header title="Dettaglio"/>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
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
                          <a href="{{route('homepage')}}" class="btn btn-primary">Home</a>
                          <a href="{{route('article.update' , compact('article'))}}" class="btn btn-secondary">Update</a>
                        </div>
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>