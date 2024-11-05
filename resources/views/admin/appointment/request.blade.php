 @extends('admin.layouts.admin_master')

@section('admin_content')


<div class="content">
    <!-- Default Table Style -->
    <h2 class="content-heading">Active Appoinment Table </h2>



    <!-- Bordered Table -->
    <div class="block block-rounded">
      <div class="block-header block-header-default">
        <h3 class="block-title">Active Appoinment Table</h3>
        <div class="block-options">
          <div class="block-options-item">

          </div>
        </div>
      </div>
      <div class="block-content">
        <table class="table table-bordered table-vcenter">
          <thead>
            <tr>
              <th class="text-center" style="width: 50px;">Sl No</th>

              <th>User Name</th>
              <th>Email</th>
              <th>phone</th>
              <th>message</th>

            </tr>
          </thead>
          <tbody>
  @foreach ($AppoinmentRequest as $key=>$iteam)



            <tr>
              <th class="text-center" scope="row">{{  $key+1 }}</th>

           <td>{{ $iteam->full_name }}</td>
              <td>{{ $iteam->email }}</td>
              <td>{{ $iteam->phone }}</td>
              <td>{{ $iteam->message }}</td>



            </tr>

            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!-- END Bordered Table -->



    <!-- END Default Table Style -->
  </div>





@endsection
