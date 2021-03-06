@extends('master.admin_master')

@section('style')
    <style>
        .icons{
            font-size: 25px;
        }

        .icons:hover{
            font-size: 30px;
        }

        .add_icon{
            font-size: 35px;
        }

        .add_icon:hover{
            font-size: 40px;
        }
        
    </style>
@endsection

@section('header')
    Profession List
@endsection

@section('content')
@include('user.profesion.profesion_modals')

<div class="row">
    <div class="col-md-6">
        <div class="card bg-primary mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Orders</h6>
                    <h4 class="mb-3 mt-0 float-right">1,587</h4>
                </div>
                <div>
                    <span class="badge badge-light text-info"> +11% </span> <span class="ml-2">From previous period</span>
                </div>
                
            </div>
            <div class="p-3">
                <div class="float-right">
                    <a href="#" class="text-white-50"><i class="mdi mdi-cube-outline h5"></i></a>
                </div>
                <p class="font-14 m-0">Last : 1447</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card bg-info mini-stat text-white">
            <div class="p-3 mini-stat-desc">
                <div class="clearfix">
                    <h6 class="text-uppercase mt-0 float-left text-white-50">Revenue</h6>
                    <h4 class="mb-3 mt-0 float-right">$46,785</h4>
                </div>
                <div>
                    <span class="badge badge-light text-danger"> -29% </span> <span class="ml-2">From previous period</span>
                </div>
            </div>
            <div class="p-3">
                <div class="float-right">
                    <a href="#" class="text-white-50"><i class="mdi mdi-buffer h5"></i></a>
                </div>
                <p class="font-14 m-0">Last : $47,596</p>
            </div>
        </div>
    </div>

    
</div>  

<div class="row">
    <div class="col-xl-9">
        <div class="card">
            <div class="card-body">
               <div class="float-right">
                 {{-- <button class="btn btn-primary btn-lg rounded-circle"> <i class="mdi mdi-plus"></i></button>  --}}
                 <a href="#" data-toggle="modal" data-target="#add_profesion" class="text-primary"> <i class="mdi mdi-plus add_icon"></i> </a>
               </div>
                <h4 class="mt-0 header-title mb-4">PROFESSION LIST </h4>
                <br>
                <div class="latest-massage">
                    <a class="latest-message-list">
                        <div class="border-bottom position-relative">
                            <div class="float-left user mr-3">
                                <h5 class="bg-info text-center rounded-circle text-white mt-0">FSD</h5>
                            </div>
                            <div class="float-right">
                                <a href="#" class="text-danger"><i class="mdi mdi-delete-forever icons"></i></a>
                                <a href="" data-toggle="modal" data-target="#edit_profesion" class="text-info"><i class="mdi mdi-briefcase-edit icons"></i></a>
                            </div>
                            <div class="massage-desc">
                                <h5 class="font-14 mt-0 text-dark">Full Stack Developer</h5>
                                <p class="text-muted" style="font-size:11px;">Added on: Just Now</p>
                            </div>
                        </div>
                    </a>
                    <br>
                    {{-- <a class="latest-message-list mt-5">
                        <div class="border-bottom position-relative">
                            <div class="float-left user mr-3">
                                <h5 class="bg-success text-center rounded-circle text-white mt-0">SM</h5>
                            </div>
                            <div class="float-right">
                                <a href="#" class="text-danger"><i class="mdi mdi-delete-forever h4"></i></a>
                                <a href="#" class="text-info"><i class="mdi mdi-briefcase-edit h4"></i></a>
                            </div>
                            <div class="massage-desc">
                                <h5 class="font-14 mt-0 text-dark"">Sales Marketer</h5>
                                <p class="text-muted" style="font-size:11px;">Added Time: Just Now</p>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a class="latest-message-list mt-5">
                        <div class="border-bottom position-relative">
                            <div class="float-left user mr-3">
                                <h5 class="bg-danger text-center rounded-circle text-white mt-0">WD</h5>
                            </div>
                            <div class="float-right">
                                <a href="#" class="text-danger"><i class="mdi mdi-delete-forever h4"></i></a>
                                <a href="#" class="text-info"><i class="mdi mdi-briefcase-edit h4"></i></a>
                            </div>
                            <div class="massage-desc">
                                <h5 class="font-14 mt-0 text-dark">Web Developer</h5>
                                <p class="text-muted" style="font-size:11px;">Added Time: Just Now</p>
                            </div>
                        </div>
                    </a>
                    <br>
                    <a class="latest-message-list mt-5">
                        <div class="border-bottom position-relative">
                            <div class="float-left user mr-3">
                                <h5 class="bg-warning text-center rounded-circle text-white mt-0">SD</h5>
                            </div>
                            <div class="float-right">
                                <a href="#" class="text-danger"><i class="mdi mdi-delete-forever h4"></i></a>
                                <a href="#" class="text-info"><i class="mdi mdi-briefcase-edit h4"></i></a>
                            </div>
                            <div class="massage-desc">
                                <h5 class="font-14 mt-0 text-dark">Software Developer</h5>
                                <p class="text-muted" style="font-size:11px;">Added Time: Just Now</p>
                            </div>
                        </div>
                    </a>
                     --}}
                </div>

            </div>
        </div>

    </div>
    <!-- end col -->
    <div class="col-xl-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-4">PROFESSION Info</h4>
                
                <p class="text-justify ">
                    Note: There are only four professions that 
                    can be displayed on your website, so make sure to include the ones 
                    that you know the most about. However, those features are still being worked on.
                    <br>
                    <br>
                    I'm hoping for your patience and considerations.
                </p>
            </div>
        </div>

    </div>

   
</div>

@endsection()