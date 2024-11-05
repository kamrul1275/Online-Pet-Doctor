@extends('admin.layouts.admin_master')



@section('admin_content')


<div class="content">

    <!-- Basic -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Create Discussion</h3>
      </div>
      <div class="block-content">

        <form action="{{  url('/admin/store/discussion') }}" method="POST" enctype="multipart/form-data">
          @csrf



              <div class="mb-4">
                <label class="form-label" for="example-text-input">Discussion Name</label>
                <input type="text" class="form-control" id="example-text-input" name="discussion_name" placeholder="enter name">
              </div>

              <div class="mb-4">
                <label class="form-label" for="example-text-input">Discussion Day</label>
                <input type="text" class="form-control" id="example-text-input" name="discussion_day" placeholder="enter day">
              </div>

              <div class="mb-4">
               <button class="btn btn-primary">Submite</button>
              </div>

          </form>




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
