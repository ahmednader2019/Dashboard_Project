<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="EditProducts{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Products</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form action="{{route('products.update','test')}}" method="POST" autocomplete="off">
               @method('PUT')
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <div class="form-group">
                  <label for="exampleFormControlInput1">Prodcut Name</label>
                  <input type="text" class="form-control" name="name" value="{{$product->name}}"  >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Notes</label>
                    <input type="text" class="form-control" name = "notes" value="{{$product->notes}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="text" class="form-control" name = "price" value="{{$product->price}}" >
                  </div>

                  <select class="form-select" name = "categorie_id" aria-label="Default select example">
                    <option selected></option>
                    @foreach($categories as $categorie)
                    <option value="{{$categorie->id}}" {{$categorie->id == $product->categorie_id ? 'selected' : ' '}}>{{$categorie->name}}</option>
                    @endforeach
                  </select>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update changes</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>
