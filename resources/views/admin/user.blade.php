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

                                <h1  style="text-align:center ;font-weight:bold; color:#212529">Users</h1>
                                    <hr>
                                    @if (count ($users) > 0)
                                    <div>
                                            <table style="width:100%">
                                                @foreach ($users as $user)
                                                @if ($user->user_type == 1)
                                                
                                                <tr>
                                                    <td><p style="font-weight:bold">{{$user->name}}</p></td>
                                                    <td><p style="font-weight:bold">{{$user->email}}</p></td>
                                                    <form action="{{route('admin.destroy',$user->user_id)}}">
    
                                                    </form>
                                                </tr>
                                                @endforeach
                                                @else
                                                <script type="text/javascript">window.location = '/home'</script>
                                                @endif
                                            </table>
                                    </div>
                                    
                                    @else
                                        <p class="mb-4 text-center">No users</p>
                                    @endif
                                    <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @else

    <script type="text/javascript">window.location = '/home'</script> --}}
    
    

    @endsection
    





