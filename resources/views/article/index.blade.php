<x-layout>
    <x-header title="Tutti gli articoli"/>
    <div class="container my-5">
        <div class="row justify-content-center">
            @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <div class="col-12 d-flex justify-content-center">
                       <x-article-card
                        :article="$article"
                       />
                    </div>
                @endforeach 
            @endif
        </div>
    </div>
</x-layout>