<x-layout>
    <x-header title="Prodotti per Brand"/>
    <div class="container my-5">
        <div class="row justify-content-center">
            @if ($products->isNotEmpty())
                @foreach ($products as $product)
                    <div class="col-12 d-flex justify-content-center">
                        <x-product-card
                        :product="$product"
                        />
                    </div>
                @endforeach 
            @endif
        </div>
    </div>
</x-layout>