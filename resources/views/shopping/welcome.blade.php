@extends('layouts.app')
@section('content')
  
 
 <div class="container">
    <div class="row mt-5">
      <div class="col">
         <h1 style="color:rgb(144, 48, 218)" > أهلاُ بكم في متجر عالم التسوق</h1>
         <small>نوفر لك كل ماتحتاجه في عالم الاليكترونيات وادوات المطبخ وادوات التنظيف</small>
         <p>طرق دفع متعددة</p>
      </div>
    </div>

    {{session('myKey')}}
   <div class="row">
    <div class="col ">
      <div class="row">
      @foreach($categories as $item)
        <div class="col-sm-5 col-md-5 col-12 d-flex justify-content-center mb-3">
          <a href= "{{route('shopping.list',['categories_id'=>$item->id])}}">

            <div class="card" style="width: 300px;">
              <div class="card-header" style="background-color: rgb(142, 140, 248);">
                <h3 class="text-white">{{$item->name}}</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col d-flex justify-content-center align-item-center">
                    <small class="text-infor">{{$item->description}}</small>
                  </div>
                  <div class="col">
                    <i class="{{$item->icon}}"  style="font-size: 100px;"></i>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach

      </div>
    </div>
   </div>
 </div>



@endsection