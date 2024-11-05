@extends('doctor.layout.doctor_master')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@section('doctor_content')




<div class="content">

    <!-- Basic -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Create News Post</h3>
      </div>
      <div class="block-content">


        <form action="{{ route('store.news.post') }}" method="POST" enctype="multipart/form-data">
         @csrf

          <div class="row push">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-8 col-xl-5">

              <div class="mb-4">
                <label class="form-label" for="example">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading" placeholder="heading Input">
              </div>


              <div class="mb-4">
                <label class="form-label" for="example-textarea-input">Textarea</label>
                <textarea class="form-control" id="example-textarea-input" name="description" rows="4" placeholder="Textarea content.."></textarea>
              </div>

              <div class="mb-4">
                <label class="form-label" for="example-text-input">Image</label>
                <input type="file" class="form-control"  id="image" name="photo" placeholder="incon Input">
              </div>




              <div class="mb-4">
                <img src="{{ (! empty($NewsPost->photo)) ? url('upload/news_post/'.$NewsPost->photo):url('upload/no_image.jpg') }}"
              alt="Admin" id="showImage" style="width:100px; height: 100px;">


              </div>




              <div class="mb-4">

               <button class="btn btn-primary">Submite</button>
              </div>


            </div>
          </div>

        </form>


      </div>
    </div>
    <!-- END Basic -->



    <!-- Checkbox and Radio Blocks -->

    <!-- END Checkbox and Radio Blocks -->


  </div>


  {{-- javascript photo show start --}}

  <script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			var reader = new FileReader();
			reader.onload = function(e){
				$('#showImage').attr('src',e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>{{-- javascript photo show end --}}

@endsection
