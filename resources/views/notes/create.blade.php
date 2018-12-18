@extends('layouts.app')

@section('css')
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('content')

<!-- Page Content -->
<section>
    <div class="card card-signin container bg-light">

        <!-- Page Heading -->
        <div style="width: 100%; display: table;">
                <div style="display: table-row">
                    <div style="width: 1000px; display: table-cell;">
                        <div class="container">
                            <h1 class="my-5 section-heading text-faded" style="font-weight:bold; color:#F05F40">Create Note</h1>
                        </div>
                    </div>
                    <div style="display: table-cell;">
                        <a href="/home" class="btn btn-secondary">Return</a>
                    </div>
                </div>
        </div>
        <hr>

        {!! Form::open(['action' => 'NotesController@store','method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('title','Judul')}}
                {{Form::text('title','',['class' => 'form-control','placeholder' => 'Judul'])}}
                {{Form::label('subject','Subjek')}}
                {{Form::text('subject','',['class' => 'form-control','placeholder' => 'Subjek'])}}
            </div>
            <div class="form-group">
                    {{Form::label('body','Catatan')}}
                    {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control','placeholder' => 'Mulailah menulis!'])}}
            </div>
            {{Form::submit('Simpan',['class'=>'btn btn-primary'])}}
            {!! Form::close() !!}
        <br/>
    </div>
</section>
@endsection