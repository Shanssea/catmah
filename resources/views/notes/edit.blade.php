@extends('layouts.app')

@section('css')
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('content')

<!-- Page Content -->
<section>
<div class="container">
        <div class="row">
            <div class="col-sm-15 col-md-10 col-lg-15 mx-auto">
                    <div class="container card card-signin bg-light">
    
                            <!-- Page Heading -->
                            <div style="display: table;">
                                    <div style="display: table-row">
                                        <div style="width: 1000px; display: table-cell;">
                                            <div class="container">
                                                <h1 class="my-5 section-heading text-faded" style="font-weight:bold; color:#F05F40">{{$note->title}}</h1>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <hr>

        {!! Form::open(['action' => ['NotesController@update',$note->id],'method'=>'POST']) !!}
            <div class="form-group">
                    {{Form::label('body','Catatan')}}
                    {{Form::textarea('body',$note->body,['class' => 'form-control','placeholder' => 'Mulailah menulis!'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('Simpan',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        <br/>
    </div>
</section>
@endsection