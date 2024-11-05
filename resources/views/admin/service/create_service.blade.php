@extends('admin.layouts.admin_master')



@section('admin_content')


<div class="content">

    <!-- Basic -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Create Service</h3>
      </div>
      <div class="block-content">
        <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
          <div class="row push">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-8 col-xl-5">
              <div class="mb-4">
                <label class="form-label" for="example-text-input">Icon</label>
                <input type="text" class="form-control" id="example-text-input" name="heading-text-input" placeholder="incon Input">
              </div>
              <div class="mb-4">
                <label class="form-label" for="example">Heading</label>
                <input type="text" class="form-control" id="heading" name="heading-email-input" placeholder="heading Input">
              </div>


              <div class="mb-4">
                <label class="form-label" for="example-textarea-input">Textarea</label>
                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
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




@endsection
