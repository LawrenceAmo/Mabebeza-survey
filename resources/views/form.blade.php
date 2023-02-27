@extends('layouts.app')

@section('content')
<style>
    .hero_image{
    width: 300px;
    height: 300px;
}
::placeholder {
    font-family: 'Raleway', sans-serif !important; 
}
input, select{
    border-radius: 50px !important;
}
.circle-blue{
    left: 10%;
}
.circle-light-blue{
    top: 200px;
    left: 15%;
}
.circle-purple{
    /* top: 200px; */
    bottom: -200px;

    left: 10%;
}
.circle-pink{
    top: 50%;
}

@media screen and (max-width: 500px) {
    /* .footer{
        background-color: #94d2ec;
        position: fixed;
        bottom: 0px;
    } */
}
</style>
        <section class="px-5 pt-3">
            <img src="{{ asset('/images/PinkCircle.svg') }}" class="circle-pink" alt=""> 

            <div class="row mx-0 animated fadeInDown">
                <div class="col-12 text-center p-0 m-0">
                    <p class="animated pulse w-100 pt-2">@include('inc.messages')</p>
                </div>
             </div>
            <div class="row ">
                <div class="col-md-6  d-flex flex-column justify-content-center ">
                    <form action="{{ route('save_form')}}" method="post" class="px-3" enctype="multipart/form-data">
                        @csrf
                        <label for="">Your Names</label>

                        <div class="row">
                            <div class="col-md-6 form-outline mb-2">
                                <input type="text" value="{{ old('parent_name',$data["parent_name"])}}" name="parent_name" class="form-control form-control-md" placeholder="Name" />
                            </div>
                             <div class="col-md-6 form-outline mb-2">
                                <input type="text" value="{{ old('parent_surname',$data["parent_surname"])}}" name="parent_surname" class="form-control form-control-md" placeholder="Surname"/>
                            </div>
                        </div>

                        <label for="">Baby's Names</label>
                        <div class="row ">
                            <div class="col-md-6 form-outline mb-2">
                                <input type="text" value="{{ old('child_name',$data["child_name"])}}" name="child_name" class="form-control form-control-md" placeholder="Name" />
                            </div>
                             <div class=" col-md-6 form-outline mb-2 ">
                                <input type="text" value="{{ old('child_surname',$data["child_surname"])}}" name="child_surname" class="form-control form-control-md" placeholder="Surname"/>
                            </div>
                        </div>

                        <div class="form-group">
                             <select class="custom-select" value="{{ old('store',$data["store"])}}" name="store"  >
                                <option selected disabled>Select Nearest Store</option>
                                <option value="Mabebeza Mega Mart">Mabebeza Mega Mart</option>
                                <option value="Mabebeza Bambanani">Mabebeza Bambanani</option>                      
                            </select>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="text" value="{{ old('reciept',$data["reciept"])}}" name="reciept" class="form-control form-control-md " placeholder="Receipt number" />
                        </div>
                        <div class="form-outline mb-3">
                            <input type="email" value="{{ old('email',$data["email"])}}" name="email" class="form-control form-control-md " placeholder="Email Address" />
                        </div>
                        <div class="form-outline mb-3">
                            <input type="tel" value="{{ old('cell_number',$data["cell_number"])}}" name="cell_number" class="form-control form-control-md " placeholder="Cell Number" />
                        </div>
                        <div class="form-outline mb-3">
                            <input type="file" value="{{ old('photo',$data["photo"])}}" name="photo" class="form-control form-control-md " style="border:none;" placeholder="Choose Photo" />
                        </div>
                        <div class="form-outline   text-center  ">
                            <button type="submit" class="btn-radius btn-purple btn btn-lg p-1 text-white w-50 text-center font-weight-bold btn-radius font-raleway" style="font-size: 1.8em;">submit</button>
                        </div> 
                    </form>
                </div>
                <div class="col-md-6 text-center ">
                    <p class="mabebeza-name  font-weight-bold text-white mb-0 pb-0" style="line-height: 1;font-size:110px;">MABEBEZA</p>
                    <p class=" m-0 pb-2" style="font-size: 1.8em;line-height: 1.5; font-family: 'cuty-font', cursive; color:#7f38bc">Cutie of the year</p>
                    <div class="pl-5 hero_image_container">
                        <img src="{{ asset('/images/PurpleCircle.svg') }}" class="circle-purple" alt=""> 
                        <img src="{{ asset('/images/LightBlueCircle.svg') }}" class="circle-light-blue" alt=""> 
            
                        <img src="{{ asset('/images/baby.png') }}"    class=" mx-auto hero_image rounded-circle " alt="">
                    </div>                  
                </div>
            </div>
        </section> 
@endsection
