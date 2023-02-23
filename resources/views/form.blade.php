@extends('layouts.app')

@section('content')
        <section class="px-5 pt-3">
            <div class="row mx-0 animated fadeInDown">
                <div class="col-12 text-center p-0 m-0">
                    <p class="animated pulse w-100 pt-2">@include('inc.messages')</p>
                </div>
             </div>
            <div class="row ">
                <div class="col-md-6  d-flex flex-column justify-content-center ">
                    <form action="{{ route('save_form')}}" method="post" class="px-3" enctype="multipart/form-data">
                        @csrf
                        <label for="">Parent Names</label>

                        <div class="row">
                            <div class="col-md-6 form-outline mb-2">
                                <input type="text" value="{{ old('parent_name',$data["parent_name"])}}" name="parent_name" class="form-control form-control-md" placeholder="Name" />
                            </div>
                             <div class="col-md-6 form-outline mb-2">
                                <input type="text" value="{{ old('parent_surname',$data["parent_surname"])}}" name="parent_surname" class="form-control form-control-md" placeholder="Surname"/>
                            </div>
                        </div>

                        <label for="">Baby Names</label>
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
                            <button type="submit" class="rounded font-weight-bold btn-sm btn-purple w-50" >submit</button>
                        </div> 
                    </form>
                </div>
                <div class="col-md-6 text-center ">
                    <p class="display-1 font-weight-bold text-white mb-0 pb-0" style="line-height: 1;">MABEBEZA</p>
                    <p class=" m-0 pb-2" style="font-size: 3em;line-height: 1; font-family: 'Shantell Sans', cursive; color:#7f38bc">Cutie of the year</p>
                    <div class="pl-3">
                        <img src="{{ asset('/images/baby.png') }}" style="height: 300px; width:300px;" class=" shadow rounded-circle border " alt="">
                    </div>                  
                </div>
            </div>
        </section>
@endsection
