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
                                    <h2 class="mb-0"> Invoices <br><br></h2>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                                    </ol>
                                </div>
                            </div>
                        </div>


                        <div class="wrapper">


                        <body>
                            <h5><a href="{{route('dashboard')}}">Dashboard</a> </h5>
                            <div class="col-md-12 mb-30">
                                <div class="card card-statistics h-100">
                                    <div class="card-body">


                                        <br><br>

                                <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Invoice number</th>
                                        <th scope="col">Invoice date</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Price </th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Tax rate </th>
                                        <th scope="col">Tax value</th>
                                        <th scope="col">Total </th>
                                        <th scope="col">Notes </th>
                                        <th scope="col">Process</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($invoices as $invoices)
                                        <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$invoices->invoice_number}}</td>
                                                <td>{{$invoices->invoice_date}}</td>
                                                <td>{{$invoices->categorie->name}}</td>
                                                <td>{{$invoices->product->name}}</td>
                                                <td>{{$invoices->price}}</td>
                                                <td>{{$invoices->discount}}</td>
                                                <td>{{$invoices->tax_rate}}</td>
                                                <td>{{$invoices->tax_value}}</td>
                                                <td>{{$invoices->total}}</td>
                                                <td>{{$invoices->notes == true ? $invoice->notes:"no note" }}</td>
                                                <td>
                                                   <a href="{{route('invoices.show',$invoices->id)}}"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#EditInvoices{{$invoices->id}}">
                                                    <i class="fa fa-edit"></i>
                                                   </button></a>
                                                       <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteInvoices{{$invoices->id}}">
                                                        <i class="fa-solid fa-trash"></i>
                                                       </button>
                                                  </td>
                                                  @include('invoices.delete')
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
