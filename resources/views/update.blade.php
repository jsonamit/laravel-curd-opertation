@extends('layout.app')

@section('content')
    <div class="container">


        <div class="row">
            <h1 class="head" style="padding-bottom: 32px;text-align: center;">Update Data</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
             @foreach($client as $data)
                    <form action="{{route('client.updated',['id'=>$data->id])}}" method="post">
                        {{ csrf_field() }}
                       
                                   <div class="form-group">
                                     <label for="email">Email address:</label>
                                     <input type="email" value="{{$data->email}}" placeholder="email" name="email" class="form-control" id="email">
                                   </div>
                                   <div class="form-group">
                                     <label for="pwd">Highest Qualification:</label>
                                     <input type="text" value="{{$data->qualification}}" placeholder="Qualification" name="qualification" class="form-control" id="qualification">
                                   </div>

                                   <button type="submit" class="btn btn-default">Submit</button>

                    </form>
               @endforeach
            </div>

        </div>

    </div>
@endsection
