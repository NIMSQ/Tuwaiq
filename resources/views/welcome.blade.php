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

    <div class="row">
      <div class="col d-flex justify-content-center">
        <div class="row">
          <div class="col">
            <div class="card" style="width: 300px;">
              <div class="card-header" style="background-color: rgb(4, 4, 4);">
                <h3 class="text-white">إليكترونيات</h3>
              </div>
              <div class="card-body">
                 <div class="row">
                  <div class="col d-flex justify-content-center align-items-center">
                    <small class="text-info">هواتف - كمبيوترات محمولة - سماعات</small>
                  </div>
                  <div class="col">
                    <i class="bi bi-laptop" style="font-size: 100px;"></i>
                  </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
 </div>



@endsection