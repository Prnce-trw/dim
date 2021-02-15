@extends('layouts.master')
@section('css')
@endsection
@section('content')
<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class='fab fa-js-square'></i>
            </div>
            <div class="d-inline-block">
                <h5>JavaScript</h5>
                <span>Education Programming Language: <label class="label label-primary">DIM</label></span>
            </div>
        </div>
        <div class="col">
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{url('jsindex/')}}">JavaScript</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Learning List</h5>
            </div>
            <div class="card-block">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="dt-responsive table-responsive">
                            <table id="example1" class="table">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">#</th>
                                        <th style="text-align: center;">Tutorial</th>
                                        <th style="text-align: center;">Description</th>
                                        <th style="text-align: center;">More</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-middle text-center">1</td>
                                        <td class="text-middle">JS Basic</td>
                                        <td class="text-middle">
                                            บทเรียนการเขียนภาษา JavaScript เบื่องต้น โครงสร้างและหลักการของภาษา 
                                        </td>
                                        <td class="text-middle text-center">
                                            <button class="btn btn-primary btn-outline-primary btn-round">Learning</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-middle text-center">2</td>
                                        <td class="text-middle">JS Basic</td>
                                        <td class="text-middle">
                                            บทเรียนการเขียนภาษา JavaScript เบื่องต้น โครงสร้างและหลักการของภาษา 
                                        </td>
                                        <td class="text-middle text-center">
                                            <button class="btn btn-primary btn-outline-primary btn-round">Learning</button>
                                        </td>
                                    </tr>
                                </tbody>
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

@endsection
