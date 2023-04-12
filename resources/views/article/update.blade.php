<x-layout>
    <x-header title="Crea Articolo"/>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <form method="POST" action="{{route('article.edit' , compact('article'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                      <label class="form-label">Title</label>
                      <input type="text" class="form-control name="title" value="{{$article->title}}">
 
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Article</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$article->description}}</textarea>
          
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Old Immage</label>
                        <img src="{{Storage::url($article->img)}}" alt="">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">New Immage</label>
                        <input type="file" class="form-control name="img">

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Author</label>
                        <input type="text" class="form-control name="author" value="{{$article->author}}">

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>