@extends('layouts.master')
@section('css')
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="icofont icofont-home"></i>
            </div>
            <div class="d-inline-block">
                <h5>Home</h5>
                <span>Education Programming Language: <label class="label label-primary">DIM</label></span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-xl-3">
        <div class="card bg-1 order-card">
            <div class="card-block">
                {{-- <h6>HTML 5</h6> --}}
                <h2 class="text-right"><i class="ti-html5 f-left"></i><span>HTML</span></h2>
                <br>
                <p class="m-b-0">Learning <a href="#" onclick="notalready()" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-2 order-card">
            <div class="card-block">
                {{-- <h6>CSS 3</h6> --}}
                <h2 class="text-right"><i class="ti-css3 f-left"></i><span>CSS</span></h2>
                <br>
                <p class="m-b-0">Learning <a href="#" onclick="notalready()" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-3 order-card">
            <div class="card-block">
                {{-- <h6>Java Script</h6> --}}
                <h2 class="text-right"><i class='fab fa-js-square f-left'></i><span>JavaScript</span></h2>
                <br>
                <p class="m-b-0">Learning <a href="{{url('jsindex')}}" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-3">
        <div class="card bg-5 order-card">
            <div class="card-block">
                {{-- <h6>PHP 7</h6> --}}
                <h2 class="text-right"><i class='fab fa-php f-left'></i><span>PHP</span></h2>
                <br>
                <p class="m-b-0">Learning <a href="#" onclick="notalready()" style="color: white"><span class="f-right icon-gopage"></span></a></p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>รายการลา</h5>
            </div>
            <div class="card-block">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="dt-responsive table-responsive">
                            <table id="example1" class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">ลำดับ</th>
                                        <th style="text-align: center;">ชื่อ - นามสกุล</th>
                                        <th style="text-align: center;">แผนก</th>
                                        <th style="text-align: center;">วันที่ลา - วันสิ้นสุด</th>
                                        <th style="text-align: center;">ประเภทการลา</th>
                                        <th style="text-align: center;">สถานนะการอนุมัติ</th>
                                        <th style="text-align: center;">การจัดการ</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="result-modaleditdayoff"></div>
@endsection
@section('js')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@include('flash-message')
<script>
    function notalready() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Sorry, This Pagr is Not Already Now!',
            timer: 3000,
        })
    }
</script>
@endsection
