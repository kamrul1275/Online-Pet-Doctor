@extends('admin.layouts.admin_master')

@section('admin_content')


<div class="content">
    <!-- Default Table Style -->
    <h2 class="content-heading">All Discussion  Table </h2>


    <!-- Bordered Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Discussion Table</h3>
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
                <th>Discussion Name</th>
                <th> Discussion Date</th>

                <th class="text-center" style="width: 100px;">Actions</th>
              </tr>
            </thead>
            <tbody>

          @foreach ($discusions as $key=> $discusion)


              <tr>
                <th class="text-center" scope="row">{{ $key+1 }}</th>
                <td> {{ $discusion->discussion_name }}</td>
                <td >  <span class="badge bg-success">  {{ $discusion->discussion_day }}  </span></td>

                <td class="text-center">
                  <div class="btn-group">


                      <a href=""  class="btn btn-sm btn-success"> Edit</a>
                      <a href=""  class="btn btn-sm btn-danger">Delete</a>
                  </div>
                </td>
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
