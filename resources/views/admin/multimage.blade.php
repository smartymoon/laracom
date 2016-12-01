<style> .dropzone{
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
    @foreach([2,3,4,5] as $img)
   <div class="col-md-2">
       <img src="http://www.jqueryscript.net/images/Simplest-Responsive-jQuery-Image-Lightbox-Plugin-simple-lightbox.jpg" class="img-responsive img-rounded dropzone_image" alt="">
   </div>
   @endforeach
</div>

<div class="row">
    <div id="dropzone"  class="col-md-12">
        <form action="/upload" class="dropzone needsclick" id="demo-upload">
            <div class="dz-message needsclick">
                拖动图片到此<br />
            </div>
        </form>
    </div>
</div>
