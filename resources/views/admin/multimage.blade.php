<style>
    .dropzone{
        border: 2px dashed #0087F7;
        border-radius: 5px;
        background: white;
    }
    .dropzone_image{
        margin:10px;
        height:200px;
    }
</style>
<div class="row">
    @foreach($example->images as $img)
   <div class="col-md-2">
       <img src="{{ env('QINIU_CUSTOM_URL').'/'.$img->url }}" class="img-responsive img-rounded dropzone_image" alt="">
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
    })
</script>
