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
                                    <h2 class="mb-0"> Products <br><br></h2>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                                    </ol>
                                </div>
                            </div>
                        </div>


                        <div class="wrapper">


                        <body>
                            <h5><a href="{{route('dashboard')}}">Dashboard</a>  /<a href="{{route('products.index')}}"> products</a> </h5>
                            <div class="col-md-12 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">

                                        @include('products.create')
                                        <br><br>

                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Notes</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Process</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$product->name}}</td>
                                                <td>{{$product->notes == true ? $product->notes:"no note" }}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->categorie->name}}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EditProducts{{$product->id}}">
                                                        <i class="fa fa-edit"></i>
                                                       </button>
                                                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteProducts{{$product->id}}">
                                                        <i class="fa-solid fa-trash"></i>
                                                       </button>
                                                  </td>
                                                  @include('products.edit')
                                                  @include('products.delete')
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  </table>
                            </div>
                        </body>
                            <!-- row closed -->

                    </div>
                    <br><br><br>
            <!--=================================
 wrapper -->

            <!--=================================
 footer -->
          <div>

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>
