@extends('layouts.admin')

@section('content')

<div class="container">

    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card">
                <div class="card-header " style="background-color: blueviolet;" >
                    <h3 class="text-white"> اضافة فئه</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('categories.create')}}" method="post">
                        @CSRF
                        <div class="row">
                            <div class="col">
                                <label> اسم الفئة</label>
                                <input type="text" class="form-control" name="categ_name" >
                                @error('categ_name')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="col">
                                <label> وصف الفئة</label>
                                <input type="text" class="form-control" name="categ_des" >
                                @error ('categ_des')
                                <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary"> حفظ</button>
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
                    <h3 class="text-white"> الفئات</h3>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr >
                                <td class="text-center">رقم الفئة</td>
                                <td class="text-center">اسم الفئة</td>
                                <td class="text-center">وصف الفئة</td>
                                <td class="text-center" colspan="2">إجراء</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach($data as $item)
                                <tr>
                                    <td class="text-center"> {{$item->id}}</td>
                                    <td class="text-center">{{$item->name}}</td>
                                    <td class="text-center"> {{$item->description}}</td>
                                    <td class="text-center"> <a href="{{Route('categories.edit',['id'=>$item->id])}}"><i class="bi bi-pencil-fill text-success"></i></a></td>
                                    <td class="text-center"> <a href="{{Route('categories.delete',['id'=>$item->id])}}"><i class="bi bi-trash text-danger"></i> </a></td>
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