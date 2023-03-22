<form  action ="{{route('invoices.store')}}" method="POST" autocomplete="off">
    @csrf
    <div class="form-group">
      <label for="exampleFormControlInput1">Invoices number </label>
      <input type="text" class="form-control" name="invoices_number" id="exampleFormControlInput1"  required>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Invoices date </label>
        <input type="date" class="form-control" name="invoices_date" id="exampleFormControlInput1">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Category</label>
      <br>
      <select class="form-select" name = "categorie_id" aria-label="Default select example">
        <option selected>Category Name </option>
        @foreach($categories as $categorie)
        <option value="{{$categorie->id}}">{{$categorie->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Product</label>
        <br>
        <select class="form-select" name = "product_id" aria-label="Default select example">
          <option selected>product Name </option>
          @foreach($products as $product)
          <option value="{{$product->id}}">{{$product->name}}</option>
          @endforeach
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Price </label>
        <input type="text" class="form-control" name="invoices_price" id="exampleFormControlInput1" >
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">Discount </label>
        <input type="text" class="form-control" name="invoices_discount" id="exampleFormControlInput1" >
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">tax rate </label>
        <br>
        <select class="form-select" name = "invoices_taxrate" aria-label="Default select example">
          <option selected> tax rate </option>
          <option value="5%">'5%'</option>
          <option value="10%">'10%'</option>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">tax value </label>
        <input type="text" class="form-control" name="invoices_taxvalue" id="exampleFormControlInput1" >
      </div>

      <div class="form-group">
        <label for="exampleFormControlInput1">total </label>
        <input type="text" class="form-control" name="invoices_total" id="exampleFormControlInput1" >
      </div>

    <div class="form-group">
      <label for="exampleFormControlTextarea1">Notes</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="notes" rows="2"></textarea>
    </div>
        <button type="submit" class="btn btn-success">Add new Invoice</button>
  </form>

