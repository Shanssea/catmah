@extends('layouts.app')


@section('css')
    <link href="/css/login.css" rel="stylesheet">
@endsection

@section('content')

<!-- Page Content -->
<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-10 col-md-8 col-lg-100 mx-auto">
                <div class="card card-signin my-5 bg-light">
                    <div class="card-body">
                            <h1  style="text-align:center ;font-weight:bold; color:#212529">Notes</h1>
                                <hr>
                        
                                @if (count ($notes) > 0)
                                <div>
                                        <table style="width:100%">
                                            @foreach ($notes as $note)
                                            <tr>
                                                <td><h4 style="font-weight:bold"><a href="/notes/{{$note->id}}">{{$note->title}}</a></h4></td>
                                                <td><p>{{$note->created_at}}</p></td>
                                                <td><h6>{{$note->subject}}</h6></td>
                                            </tr>
                                            @endforeach
                                        </table>
                                </div>
                                {{-- {{$notes->links()}} --}}
                                @else
                                    <p class="mb-4 text-center">Catatanmu kosong nih.. :(</p>
                                @endif
                                <br/>
                    </div>
                </div>
            </div>

            <div class=" col-sm-3 col-md-4 mx-auto">
                <div class="card card-signin my-5 bg-light">
                    <div class="card-body">
                        <h2 style="text-align:center; font-weight:bold; color:#212529">Profil</h2>
                        <hr>
                        <h6 style="text-align:center">{{ Auth::user()->name }}</h6>
                        <h6 style="font-weight:bold">Name :</h6>
                        <p style="text-align:justify">{{Auth::user()->name}}</p>
                        <h6 style="font-weight:bold">Email :</h6>
                        <p style="text-align:justify">{{Auth::user()->email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection