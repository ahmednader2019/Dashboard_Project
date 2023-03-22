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
                                      @include('invoices.create')
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
