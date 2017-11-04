function check_info(status,id){
    $.ajax({
        url:'/admin/viewNewHouse/checkHouse',
        type:'post',
        data:'status='+status+'&id='+id,
        dataType:'JSON',
        success:function(res){
            console.log(res);
            if(res.error === 0){
                swal('审核成功',res.msg,'success');
                setTimeout(window.location.href='/admin/viewNewHouse/index',2000);
            }else{
                swal('操作失败','尝试刷新后再试','error');
            }
        }
    })
}
