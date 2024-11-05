@extends('admin.layouts.admin_master')

@section('admin_content')


<div class="content">
    <!-- Default Table Style -->
    <h2 class="content-heading">All Service  Table </h2>


    <!-- Bordered Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Service Table</h3>
          <div class="block-options">
            <div class="block-options-item">

            </div>
          </div>
        </div>
        <div class="block-content">
          <table class="table table-bordered table-vcenter">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;"></th>
                <th>Icon</th>
                <th>Heading</th>
                <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                <th class="text-center" style="width: 100px;">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th class="text-center" scope="row">1</th>
                <td> Issus Madical </td>
                <td>Barbara Scott</td>
                <td class="d-none d-sm-table-cell">
                  <span class="badge bg-success">VIP</span>
                </td>
                <td class="text-center">
                  <div class="btn-group">


                      <a href=""  class="btn btn-sm btn-success"> Edit</a>
                      <a href=""  class="btn btn-sm btn-danger">Delete</a>
                  </div>
                </td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>
      <!-- END Bordered Table -->



    <!-- END Default Table Style -->
  </div>



@endsection
