<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddCategories">
   Add Category
  </button>
  <br><br>
  <div>
    @include('categories.massage')
  </div>

  <!-- Modal -->
  <div class="modal fade" id="AddCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Categories</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
            <form action="{{route('categories.store')}}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Category Name </label>
                  <input type="text" class="form-control" name="name"  >
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Notes</label>
                    <input type="text" class="form-control" name="notes" >
                  </div>

                  <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
              </form>


        </div>

        </div>
      </div>
    </div>
  </div>
