<div class="row">
    @foreach($example->images as $img)
   <div class="col-md-2">
       <img src="{{ env('QINIU_CUSTOM_URL').'/'.$img->url }}" class="img-responsive img-rounded dropzone_image" alt="">
       <span data-id="{{ $img->id }}" class="del_image">删 除</span>
   </div>
   @endforeach
</div>
<div class="row">
    <div id="dropzone"  class="col-md-12">
        <div class="dropzone" >
            <div class="dz-message needsclick">
                拖动图片到此<br />
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        new Dropzone("div.dropzone", {
            url: "{{ route('saveExampleImage',['example'=>$example->id]) }}",
            sending: function(file, xhr, formData) {
                formData.append("_token", "{{ csrf_token() }}");
            },
        });
        $('.del_image').click(function() {
            var id = $(this).data('id');
            var url = '/admin/exampleImage/' + id;
            var data = {
                '_method': 'delete',
                '_token': '{{ csrf_token() }}',
            };
            swal({
                        title: "确定删除吗?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        cancelButtonText:'取消',
                        confirmButtonText: "确定",
                        closeOnConfirm: false
                    },
                    function () {
                        $.post(url,data,function(response){
                            if(response == 'ok'){
                                swal({
                                    title: "删除成功",
                                    timer: 1200,
                                    type:'success',
                                    showConfirmButton: false})
                                $(this).parent().hide();
                            }
                        }.bind(this))
            }.bind(this));
        })
    })
</script>
