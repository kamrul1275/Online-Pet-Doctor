@extends('Frontend.layout.master')


@section('content')






<section class="blog-one">
    <div class="container">
        <div class="block-title text-center">
            <p>06. Doctor List</p>
            <h3>All Doctor  Farm Doc</h3>
        </div><!-- /.block-title -->
        <div class="row">




            <table class="table  table-striped">
             <thead>
               <tr>
                 <th scope="col">No</th>
                 <th scope="col">Name</th>
                 <th scope="col">Destination</th>
                 <th scope="col">Phone</th>
               </tr>
             </thead>
             <tbody>


              @foreach ($doctors as $key=> $doctor)


                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->designation }}</td>
                    <td>{{ $doctor->phone }}</td>
                  </tr>


                @endforeach

             </tbody>
           </table>



        </div><!-- /.row -->
    </div><!-- /.container -->








</section>




<section class="appointment-one appointment-one__home-one">

    <img src="Frontend/assets/images/shapes/appointment-map-1-1.png" class="appointment-one__map-1" alt="">
    <img src="Frontend/assets/images/shapes/appointment-map-1-2.png" class="appointment-one__map-2" alt="">
    <img src="Frontend/assets/img/s33.jpg" class="appointment-one__moc" alt="">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="block-title text-left">
                    <p class="has-line">07. Appointment</p>
                    <h3>Want to Hear More About <br> Oberlin Hospice?</h3>
                </div><!-- /.block-title -->



                <form action="{{ route('user.appoinment.store') }}" method="post"  class="contact-one__form contact">
                {{-- "> --}}
                    @csrf

                    <div class="row">


                        <div class="col-md-6">
                            <input type="text" placeholder="Full Name" name="full_name" required>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder="Email Address" name="email" required>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <input type="text" placeholder="Phone Number" name="phone" required>
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-6">
                            <select required name="discussion_name" class="selectpicker">

                                @foreach ($discussions as $discussion)


                                 <option value="{{ $discussion->discussion_name }}">{{ $discussion->discussion_name }}</option>

                                @endforeach


                            </select><!-- /.selectpicker -->
                        </div><!-- /.col-md-6 -->

                        <div class="col-md-12">
                            <textarea name="message" required placeholder="Message" ></textarea>
                        </div><!-- /.col-md-12 -->

                        <div class="col-md-12 text-left">
                            <button type="submit" class="thm-btn contact-one__btn">Submit Now</button>
                            <!-- /.thm-btn contact-one__btn -->
                        </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->
                </form>


                <div class="result"></div><!-- /.result -->

            </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>









@endsection
