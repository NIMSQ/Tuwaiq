@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card">
                <div class="card-header " style="background-color: blueviolet;" >
                    <h3 class="text-white"> تحرير فئه</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.update')}}" method="post">
                        <input type = "hidden" name ="id" value="{{$item->id}}">
                        @CSRF
                        <div class="row">
                            <div class="col">
                                <label> اسم الفئة</label>
                                <input type="text" class="form-control" name="categ_name" value="{{$item->name}}">
                                
                            </div>
                            <div class="col">
                                <label> وصف الفئة</label>
                                <input type="text" class="form-control" name="categ_des" value="{{$item->description}}" >
            
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">تعديل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</div>

@endsection