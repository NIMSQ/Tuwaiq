@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card">
                <div class="card-header " style="background-color: blueviolet;" >
                    <h3 class="text-white"> اضافة منتج</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('products.create')}}" method="post" enctype="multipart/form-data">
                        @CSRF
                        <div class="row">
                            <div class="col">
                                <select name="categories_id" class="form-select mb-3">
                                    @foreach($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}} </option>
                                    @endforeach
                                </select>
                                    
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label> اسم المنتج</label>
                                <input type="text" class="form-control" name="name" >
                                @error('name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label> وصف المنتج</label>
                                <input type="text" class="form-control" name="description" >
                                @error ('description')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col">
                                <label> الكمية </label>
                                <input type="number" class="form-control" name="stocke" >
                                @error ('stocke')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <label> السعر </label>
                                <input type="number" class="form-control" name="price" >
                                @error ('price')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label class="form-label"> الصورة</label>
                                <input type="file" name="image" class="form-control">
                                @error('image')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary text-center"> حفظ</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </div>

    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: blueviolet;">
                    <h3 class="text-white"> المنتجات</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr >
                                <td class="text-center">رقم المنتج</td>
                                <td class="text-center">اسم المنتج</td>
                                <td class="text-center">وصف المنتج</td>
                                <td class="text-center">سعر المنتج</td>
                                <td class="text-center">الكميه المخزنه</td>
                                <td class="text-center">صورة المنتج</td>
                                <td class="text-center">رقم الفئه</td>
                                <td class="text-center">اسم الفئه</td>
                                <td class="text-center" colspan="2">إجراء</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($products as $item)
                                <tr>
                                    <td class="text-center"> {{$item->id}}</td>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="text-center"> {{$item->description}}</td>
                                    <td class="text-center"> {{$item->price}}</td>
                                    <td class="text-center"> {{$item->stocke}}</td>
                                    <td class="text-center"> <img src="{{$item->image}}" width="100" height="100"></td>
                                    <td class="text-center"> {{$item->categories_id}}</td>
                                    <td class="text-center"> {{$item->categories_name}}</td>


                                    <td class="text-center"> <a href="{{Route('products.edit',['id'=>$item->id])}}"><i class="bi bi-pencil-fill text-success"></i></a></td>
                                    <td class="text-center"> <a href="{{Route('products.delete',['id'=>$item->id])}}"><i class="bi bi-trash text-danger"></i> </a></td>
                                </tr>

                                @endforeach
                             </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection