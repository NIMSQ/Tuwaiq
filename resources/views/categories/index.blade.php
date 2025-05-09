@extends('layouts.admin')
@section('content')
<!-- Modal -->
<div class="modal fade" id="deletemodel" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title fs-5" id="exampleModalLabel">تأكيد الحذف</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="editform">
            <input type="hidden" id="editid" name="id">
            <div class="form-group">
                <h5 class="model-title" id="deleteModelLabel">هل تريد حذف هذا السجل</h5>
            </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إغلاق</button>
          <button type="button" class="btn btn-primary" onclick="ConfirmDelete_Categories()" data-bs-dismiss="modal"> حذف</button>
        </div>
      </div>
    </div>
  </div>

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
                            <div class="col">
                                <label> الأيقونه </label>
                                <input type="text" class="form-control" name="icon" >
                                @error ('icon')
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
                                    <td class="text-center"> <button onclick="delete_categories({{$item->id}})" class="btn btn-link"><i class="bi bi-trash text-danger"></i> </button></td>
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