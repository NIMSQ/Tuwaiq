@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card">
                <div class="card-header " style="background-color: blueviolet;" >
                    <h3 class="text-white"> تعديل منتج</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('products.update')}}" method="post">
                        @CSRF
                        <div class="row">
                            <div class="col">
                                <select name="cat_id" class="form-select mb-3">
                                    @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}} </option>
                                    @endforeach
                                </select>
                                    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label> اسم المنتج</label>
                                <input type="text" class="form-control" name="name" value="{{$item->name}}">
                                <input type="hidden" name="id" value="{{$item->id}}">
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label> وصف المنتج</label>
                                <input type="text" class="form-control" name="description" value="{{$item->description}}" >
                                @error ('description')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col">
                                <label> الكمية </label>
                                <input type="number" class="form-control" name="stocke" value="{{$item->stocke}}">
                                @error ('stocke')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label> السعر </label>
                                <input type="number" class="form-control" name="price" value="{{$item->price}}" >
                                @error ('price')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label"> الصورة</label>
                                <input type="file" name="image" class="form-control" value="{{$item->image}}">
                                @error('image')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary text-center"> تعديل</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>

    
</div>

@endsection