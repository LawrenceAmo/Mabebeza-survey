@extends('layouts.app')

@section('content')
        <section class="p-5">
            <div class="row ">
                <div class="col-md-5  d-flex flex-column justify-content-center">
                    <img src="{{ asset('/images/baby.png') }}" style="height: 400px; width:400px;" class=" hero_image shadow rounded-circle " alt="">
                </div>
                <div class="col-md-7 text-center ">
                    <p class="display-1 font-weight-bold text-white mb-0 pb-0" style="line-height: 1;">MABEBEZA</p>
                    <p class=" m-0 pb-2" style="font-size: 3em;line-height: 1; font-family: 'Shantell Sans', cursive; color:#7f38bc">Cutie of the year</p>
                    <p class="  display-5 text-white p-0" style="font-size: 2.5em; line-height: 1;">
                        <span>Every baby is a cutie and</span>  <span  > we are looking for the</span>  <span> cutie of the year!</span>
                    </p>
                    <a href="{{ route('create_form')}}" class="btn btn-lg rounded bg-pink py-2 text-white" style="font-size: 1.8em;">ENTER TODAY</a>
                    <br>
                    <a href="" class="text-dark small">*Terms & Conditions Apply</a>
                </div>
            </div>
        </section>
@endsection
