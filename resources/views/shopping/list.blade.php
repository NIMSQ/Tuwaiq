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
    <div class="row mt-5">
        <div class="col">
            @foreach($products as $item)
            <div class="row mt-5">
                <div class="col d-flex justify-content-center">
                    <div class="card" style="width: 600px;">
                        <div class="card-header" style="background-color: rgb(142, 23, 189);">
                            <span class="text-white">{{$item->name}}</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <li><h3> <span class="badge bg-info">{{$item->name}}</span></h3></li>
                                        <li>{{$item->description}}</li>
                                        <li><span class="badge bg-danger">{{$item->price}}</span></li>

                                    </ul>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <img src="{{$item->image}}" width="100" height="100">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col">
                                <a href="{{route('shopping.details',['product_id'=>$item->id])}}" class="btn btn-primary"> اختر هذا المنتج </a>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection