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
                                    <h4 class="mb-0"> Categories</h4>
                                </div>
                                <div class="col-sm-6">
                                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                                    </ol>
                                </div>
                            </div>
                        </div>


                        <div class="wrapper">


                        <body>

                            <!-- row -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <h5 class="mb-3">  <a href="{{route('dashboard')}}">Dashboard</a>/ Categories </h5>
                                </div>
                                <div class="col-md-12 mb-30">
                                    <div class="card card-statistics h-100">
                                        <div class="card-body">
                                          @include('categories.create')

                                              <br><br>
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                      <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Category Name</th>
                                                        <th scope="col">Notes</th>
                                                        <th scope="col">Process</th>

                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($categories as $categorie)
                                                      <tr>
                                                        <th scope="row">{{$loop->iteration}}</th>
                                                        <td>{{$categorie->name}}</td>
                                                        <td>{{$categorie->notes == true ? $categorie->notes:"no note" }}</td>

                                                        <td>
                                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#EditCategories{{$categorie->id}}">
                                                                <i class="fa fa-edit"></i>
                                                               </button>
                                                               <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteCategories{{$categorie->id}}">
                                                                <i class="fa-solid fa-trash"></i>
                                                               </button>
                                                          </td>
                                                      </tr>
                                                      @include('categories.edit')
                                                      @include('categories.delete')
                                                      @endforeach



                                                    </tbody>
                                                  </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

</html>
