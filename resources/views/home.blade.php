@extends('layout.app')

@section('content')
    <div class="container">


        <div class="row">
            <h1 class="head" style="padding-bottom: 32px;text-align: center;">Laravel CURD Operation</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                    <form action="{{route('client.insert')}}" method="post">
                        {{ csrf_field() }}
                                   <div class="form-group">
                                     <label for="email">Email address:</label>
                                     <input type="email" placeholder="email" name="email" class="form-control" id="email">
                                   </div>
                                   <div class="form-group">
                                     <label for="pwd">Highest Qualification:</label>
                                     <input type="text" placeholder="Qualification" name="qualification" class="form-control" id="qualification">
                                   </div>

                                   <button type="submit" class="btn btn-default">Submit</button>
                                 </form>
            </div>

        </div>
        <div class="row" style="margin-top:20px;">
           @if(empty(!$client))
             <table class="table">
               <thead>
                 <tr>
                   <th scope="col">Qualification</th>
                   <th scope="col">Email</th>
                   <th scope="col">Action</th>
                 </tr>
               </thead>
               <tbody>
               @foreach($client as $data)
                 <tr>
                   <td>{{$data->qualification}}</td>
                   <td>{{$data->email}}</td>
                   <td>
                        <a href="{{route('client.delete',['id'=>$data->id])}}"><button type="button" class="btn btn-danger" >Delete</button></a>
                        <a href="{{route('client.update',['id'=>$data->id])}}"><button type="button" class="btn btn-success" >Update</button></a>
                   </td>
                 </tr>
               @endforeach
               </tbody>
             </table>
             @endif
        </div>
    </div>
@endsection
