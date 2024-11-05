@extends('doctor.layout.doctor_master')



@section('doctor_content')



<div class="bg-image bg-image-bottom" style="background-image: url('{{ asset('AdminBackend/assets/media/photos/photo13@2x.jpg') }}');">
    <div class="bg-primary-dark-op py-4">
      <div class="content content-full text-center">
        <!-- Avatar -->
        <div class="mb-3">
          <a class="img-link" href="be_pages_generic_profile.html">
            <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset('AdminBackend/assets/media/avatars/avatar15.jpg') }}" alt="">
          </a>
        </div>
        <!-- END Avatar -->

        <!-- Personal -->
        <h1 class="h3 text-white fw-bold mb-2">
          John Smith
        </h1>
        <h2 class="h5 fw-medium text-white-75">
          Product Manager <a class="text-primary-light" href="javascript:void(0)">@GraphicXspace</a>
        </h2>
        <!-- END Personal -->

        <!-- Actions -->
        <button type="button" class="btn btn-primary me-1">
          <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Message
        </button>
        <a class="btn btn-alt-primary" href="{{ route('doctor.profile.Edit') }}">
          <i class="fa fa-fw fa-pencil-alt opacity-50 mb-1"></i> Edit
        </a>
        <!-- END Actions -->
      </div>
    </div>
  </div>




  @endsection
