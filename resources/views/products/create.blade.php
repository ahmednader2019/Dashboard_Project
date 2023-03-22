<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Products</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="{{route('products.store')}}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                  <label for="exampleFormControlInput1">Prodcut Name</label>
                  <input type="text" class="form-control" name="name" id="exampleFormControlInput1"  >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Notes</label>
                    <input type="text" class="form-control" name = "notes" id="exampleFormControlInput1" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Price</label>
                    <input type="text" class="form-control" name = "price" id="exampleFormControlInput1" >
                  </div>

                  <select class="form-select" name = "categorie_id" aria-label="Default select example">
                    <option selected>Category Name </option>
                    @foreach($categories as $categorie)

                    <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                    @endforeach
                  </select>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
            </form>
        </div>

      </div>
    </div>
  </div>
