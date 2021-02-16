@extends('layouts.master')
@section('css')
<!-- Syntax highlighter Prism css -->
<link rel="stylesheet" type="text/css" href="{{asset('files/assets/pages/prism/prism.css')}}">
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
                    <li class="breadcrumb-item"><a href="{{url('js/index/')}}">JavaScript</a>
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
                                    @foreach ($js as $key => $item)
                                    <tr>
                                        <td class="text-middle text-center">{{$key+1}}</td>
                                        <td class="text-middle">{{$item->js_title}}</td>
                                        <td class="text-middle">{{$item->js_description}}</td>
                                        <td class="text-middle text-center">
                                            <button onclick="detail({{$item->js_id}})" class="btn btn-primary btn-outline-primary btn-round">Learning</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="result-modaljsdetail"></div>
@endsection
@section('js')
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!-- Syntax highlighter prism js -->
<script src="{{asset('files/assets/pages/prism/custom-prism.js')}}"></script>
<!-- i18next.min.js -->
<script src="{{asset('files/bower_components/i18next/js/i18next.min.js')}}"></script>
<script src="{{asset('files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
<script src="{{asset('files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script src="{{asset('files/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
@include('flash-message')
<script>
    function detail(id) {
        $.ajax({
            url: '{{ url('js/detail') }}/' + id,
            type: 'GET',
            data: {id: id},
        }).done(function (data) {
            $('#result-modaljsdetail').html(data);
            $("#modaljsdetail").modal('show');
        });
    }
</script>
@endsection
