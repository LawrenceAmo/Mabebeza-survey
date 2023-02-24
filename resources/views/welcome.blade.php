@extends('layouts.app')

@section('content')
<style>
    @media screen and (max-width: 1000px) {
        .hero_text_container p span{
            font-size: 30px
        }
    
    }
</style>
        <section class="hero_container row  m-0 pt-5">
            <img src="{{ asset('/images/PinkCircle.svg') }}" class="circle-pink" alt=""> 
            <img src="{{ asset('/images/PurpleCircle.svg') }}" class="circle-purple" alt=""> 
            <img src="{{ asset('/images/LightBlueCircle.svg') }}" class="circle-light-blue" alt=""> 

                 <div class="hero_image_container col-md-5 text-center    d-flex flex-column justify-content-center">
                    {{-- loading="lazy" --}}
                <img src="{{ asset('/images/baby.png') }}"    class=" mx-auto hero_image rounded-circle " alt="">
                </div> 
                <div class="hero_text_container col-md-7  text-center d-flex flex-column ">
                    <p class="  font-weight-bold text-white mb-0 pb-0 font-raleway mabebeza-name" style="line-height: 1; font-size:110px">MABEBEZA</p>
                    <p class=" m-0 pb-2 cuty-font" style="font-size: 3em;line-height: 1; font-family: 'Shantell Sans', cursive; color:#7f38bc">Cutie of the year</p>
                    <p class=" text-white p-0 font-raleway" style="font-size: 2.5em; line-height: 1;">
                        <span>Every baby is a cutie and</span>  <span  > we are looking for the</span>  <span> cutie of the year!</span>
                    </p>
                    <div class="">
                        <a href="{{ route('create_form')}}" class="btn btn-lg rounded bg-pink  p-1 text-white w-50 text-center font-weight-bold btn-radius font-raleway" style="font-size: 1.8em;">ENTER TODAY</a>
                    </div>
 
                    <a target="_blank" href="{{ asset('/images/tnc.pdf') }}" class="text-dark small">*Terms & Conditions Apply</a>
                </div>
         </section>
@endsection
