<!DOCTYPE html>
<html lang="en" dir={{App::getLocale() == 'en' ? '':'rtl'}}>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>





        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="assets/images/pre-loader/loader-01.svg" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')



           {{-- @include('layouts.content') --}}
           <!-- main-content -->
                    <div class="content-wrapper">
                        <div class="page-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h4 class="mb-0">  <a href="{{route('dashboard')}}"> Dashboard</a> /  Invoices  </h4>
                                    <br>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                                    </ol>
                                </div>
                            </div>
                        </div>


                        <div class="wrapper">


                        <body>
                            <div class="col-md-12 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">
                                        <form  action ="{{route('invoices.update','test')}}" method="POST" autocomplete="off">
                                            @method('PUT')
                                            @csrf
                                            <input type="hidden" name="id" value="{{$invoice->id}}">

                                            <div class="form-group">
                                              <label for="exampleFormControlInput1">Invoices number </label>
                                              <input type="text" class="form-control" name="invoices_number" id="exampleFormControlInput1" value="{{$invoice->invoice_number}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Invoices date </label>
                                                <input type="date" class="form-control" name="invoices_date" value="{{$invoice->invoice_date}}" id="exampleFormControlInput1">
                                              </div>
                                            <div class="form-group">
                                              <label for="exampleFormControlSelect1">Category</label>
                                              <br>
                                              <select class="form-select" name = "categorie_id" aria-label="Default select example">
                                                <option selected> Category Name </option>
                                                @foreach($categories as $categorie)
                                                <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Product</label>
                                                <br>
                                                <select class="form-select" name = "product_id" aria-label="Default select example">
                                                  <option selected>Product Name </option>
                                                  @foreach($products as $product)
                                                  <option value="{{$product->id}}">{{$product->name}}</option>
                                                  @endforeach
                                                </select>
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">Price </label>
                                                <input type="text" class="form-control" name="invoices_price" value="{{$invoice->price}}" id="exampleFormControlInput1" >
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">Discount </label>
                                                <input type="text" class="form-control" name="invoices_discount" value="{{$invoice->discount}}" id="exampleFormControlInput1" >
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleFormControlSelect1">tax rate </label>
                                                <br>
                                                <select class="form-select" name = "invoices_taxrate" aria-label="Default select example">
                                                  <option selected>{{$invoice->tax_rate}}" </option>
                                                  <option value="5%">5%</option>
                                                  <option value="10%">10%'</option>
                                                </select>
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">tax value </label>
                                                <input type="text" class="form-control" name="invoices_taxvalue" value="{{$invoice->tax_value}}"id="exampleFormControlInput1" >
                                              </div>

                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">total </label>
                                                <input type="text" class="form-control" name="invoices_total"  value="{{$invoice->total}}" id="exampleFormControlInput1" >
                                              </div>

                                            <div class="form-group">
                                              <label for="exampleFormControlTextarea1">Notes</label>
                                              <textarea class="form-control" id="exampleFormControlTextarea1" value="{{$invoice->notes}}" name="notes" rows="2"></textarea>
                                            </div>
                                                <button type="submit" class="btn btn-success">Update Invoice</button>
                                          </form>


                                    </div>
                                </div>
                            </div>
                        </body>
                            <!-- row closed -->


            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')
</body>
    @section('js')

    <script>
        $(document).ready(function() {
            $('select[name="categorie_id"]').on('change', function() {
                var categorie_id = $(this).val();
                if (categorie_id) {
                    $.ajax({
                        url: "{{ URL::to('product') }}/" + categorie_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="product_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="product_id"]').append('<option value="' +
                                    value + '">' + value + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>

    @endsection
</html>
