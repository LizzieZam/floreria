@extends('templates.layout')
@section('content')
     
        <table align="center" width="100%">
                <tr align="center"><td width="5%">ID</td><td width="5%">NOMBRE</td><td width="30%">CEL</td></tr>
                @foreach ($info as $data)
                        <tr align="center"><td width="5%">{{$data['id']}}</td><td width="5%">{{$data['nombre']}}</td><td width="30%">{{$data['email']}}</td></tr>
                @endforeach
           
        </table>
  
@endsection