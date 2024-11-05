@extends('doctor.layout.doctor_master')




@section('doctor_content')


<div class="content">
    <!-- Default Table Style -->
    <h2 class="content-heading">Doctor All News Post  Table </h2>


    <!-- Bordered Table -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">News Post Table</h3>
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

                <th>Heading</th>
                <th>Description</th>
                <th style="width: 100px;">Image</th>
                <th class="text-center" style="width: 100px;">Actions</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($NewsPosts as $key=>$NewsPost)

                <tr>
                    <th class="text-center" scope="row">{{ $key+1}}</th>
                    <td> {{ $NewsPost->heading }} </td>
                    <td >  {{ $NewsPost->description }} </td>
                    <td>
                        <img src="{{ (! empty($NewsPost->photo)) ? url('upload/news_post/'.$NewsPost->photo):url('upload/no_image.jpg') }}" style="width: 50px; height:60px";>

                    </td>

                    <td class="text-center">
                      <div class="btn-group">

                          <a href="{{ route('edit.news_post',$NewsPost->id) }}"  class="btn btn-sm btn-success"> Edit</a>
                          <a href="{{ route('delete.news_post',$NewsPost->id) }}"  class="btn btn-sm btn-danger">Delete</a>
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
