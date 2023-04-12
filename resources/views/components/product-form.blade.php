<form method="POST" action="{{route('product.store')}}">
    @csrf
    <div class="mb-3">
      <label class="form-label">Nome Prodotto</label>
      <input type="text" class="form-control" name='name'>
    </div>
    <div class="mb-3">
        <label class="form-label">Brand</label>
        <input type="text" class="form-control" name='brand'>
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
    </div>
      <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input type="number" step="0.1" class="form-control" name='price' max="999">
    </div>
   <button type="submit" class="btn btn-primary">Submit</button>
  </form>