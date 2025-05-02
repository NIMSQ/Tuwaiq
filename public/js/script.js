
var delete_id; 
function delete_categories(id) {
    delete_id = id; 
    const model = new bootstrap.Modal(document.getElementById("deletemodel"));
    model.show();
}

function ConfirmDelete_Categories(){

    $.ajax({
        url:'/deletecategories/' + delete_id,
        type:'GET',

        success:function()
        {
            Swal.fire({
                toast: true,
                icon: 'success',
                title: 'تم الحذف بنجاح!',
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000, // يختفي بعد 3 ثوانٍ
                timerProgressBar: true,
            });
        },
        error:function(){
            Swal.fire({
                toast: true,
                icon: 'error',
                title: 'حدث خطأ لم يتم حذف السجل, الرجاء مراجعة مسؤول النظام',
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true
            });
        }

});
}