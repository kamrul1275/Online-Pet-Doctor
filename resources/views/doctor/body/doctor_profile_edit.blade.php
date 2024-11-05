@extends('doctor.layout.doctor_master')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


@section('doctor_content')


<div class="block block-rounded">
    <div class="block-header block-header-default">
      <h3 class="block-title">
        <i class="fa fa-user-circle me-1 text-muted"></i> Doctor Profile
      </h3>
    </div>
    <div class="block-content">


      <form action="{{ route('doctor.profile.store') }}" method="POST"

      enctype="multipart/form-data" >
      @csrf

        <div class="row items-push">
          <div class="col-lg-3">
            <p class="text-muted">
              Your account’s vital info. Your username will be publicly visible.
            </p>
          </div>
          <div class="col-lg-7 offset-lg-1">
            <div class="mb-4">
              <label class="form-label" for="profile-settings-username">Username</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-username" name="username" placeholder="Enter your username.." value="{{ $doctor_profile->username }}">
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-name">Name</label>
              <input type="text" class="form-control form-control-lg" id="profile-settings-name" name="name" placeholder="Enter your name.." value="{{ $doctor_profile->name }}" disabled>
            </div>
            <div class="mb-4">
              <label class="form-label" for="profile-settings-email">Email Address</label>
              <input type="email" class="form-control form-control-lg" id="profile-settings-email" name="email" placeholder="Enter your email.." value="{{ $doctor_profile->email }}" disabled>
            </div>

            <div class="mb-4">
                <label class="form-label" for="profile-settings-email">Phone</label>
                <input type="number" class="form-control form-control-lg" id="profile-settings-email" name="phone" placeholder="Enter your phone.." value="{{ $doctor_profile->phone }}">
              </div>


              <div class="mb-4">
                <label class="form-label" for="profile-settings-email">Address</label>
                <input type="text" class="form-control form-control-lg" id="profile-settings-email" name="address" placeholder="Enter your address.." value="{{ $doctor_profile->address }}">
              </div>


              <div class="mb-4">
                <label class="form-label" for="profile-settings-email">Designation</label>
                <input type="text" class="form-control form-control-lg" id="profile-settings-email" name="designation" placeholder="Enter your address.." value="{{ $doctor_profile->designation }}">
              </div>



              <div class="mb-4">
                <label class="form-label" for="profile-settings-avatar" class="form-label">Choose new avatar</label>
                <input class="form-control" type="file" id="image" name="photo">
              </div>


            <div class="row mb-4">
              <div class="col-md-10 col-xl-6">
                <div class="push">

                    <img src="{{ (! empty($doctor_profile->photo)) ? url('upload/admin_images/'.$doctor_profile->photo):url('upload/no_image.jpg') }}"
                    alt="Admin" id="showImage" style="width:100px; height: 100px;">

                </div>
            </div>
        </div>



            <div class="mb-4">
              <button type="submit" class="btn btn-alt-primary">Update</button>
            </div>
          </div>
        </div>
      </form>
    </div>
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
