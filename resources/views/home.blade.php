@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('/css/index.css')}}">
<style>
    th{
        /* font-size: 900px; */
    }
</style>
{{ session('status')}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">{{ __('Survey Data') }}
                    <form class="" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-blue rounded m-0">Log Out</button>
                    </form> 
                </div>

                <div class="card-body">                    
                    <table class="table table-striped table-inverse table-responsive">
                        <thead class="thead-inverse">
                            <tr class="bg-dark rounded text-light font-weight-bold">
                                <th>#</th>
                                <th>Parent's Name</th>
                                <th>Child's Name</th>
                                <th>Cell number</th>
                                <th>Email Address</th> 
                                <th>Reciept Number</th>
                                <th>Store Name</th>
                                 <th>Photo</th>
                                <th>Created At</th>
                            </tr>
                            </thead>
                            <tbody> 
                                    <?php $i = 1; ?>
                                @foreach ($data as $user)
                                    <tr>
                                        <td scope="row">{{$i}}</td>
                                        <td>{{$user->parent_name}} {{$user->parent_surname}}</td>
                                        <td>{{$user->child_name}} {{$user->child_surname}}</td>
                                        <td>{{$user->cell_number}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->reciept}}</td>
                                        <td>{{$user->store}}</td>
                                        {{-- <td>{{$user->photo}}</td> --}}
                                        <td> </td>
                                        <td>{{$user->created_at}}</td>
                                     </tr>
                                    {{-- {{$i++}} --}}
                                    <?php $i++; ?>
                                @endforeach 
                            </tbody>
                    </table>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
