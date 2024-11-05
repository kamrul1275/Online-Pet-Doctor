
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
      <!-- Side Header -->
      <div class="content-header justify-content-lg-center">
        <!-- Logo -->
        <div>
          <span class="smini-visible fw-bold tracking-wide fs-lg">
            c<span class="text-primary">b</span>
          </span>
          <a class="link-fx fw-bold tracking-wide mx-auto" href="{{ route('admin.dashboard') }}">
            <span class="smini-hidden">

              <span class="fs-5 text-dual">Admin </span><span class="fs-5 text-primary">Dashboard</span>
            </span>
          </a>
        </div>
        <!-- END Logo -->

        <!-- Options -->
        <div>
          <!-- Close Sidebar, Visible only on mobile screens -->
          <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
          <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout" data-action="sidebar_close">
            <i class="fa fa-fw fa-times"></i>
          </button>
          <!-- END Close Sidebar -->
        </div>
        <!-- END Options -->
      </div>
      <!-- END Side Header -->

      <!-- Sidebar Scrolling -->
      <div class="js-sidebar-scroll">
        <!-- Side User -->
        <div class="content-side content-side-user px-0 py-0">
          <!-- Visible only in mini mode -->
          <div class="smini-visible-block animated fadeIn px-3">
            <img src="{{ (! empty($adminProfile->photo)) ? url('upload/admin_images/'.$adminProfile->photo):url('upload/no_image.jpg') }}"
            alt="Admin"  style="width:100px; height: 100px;">

          </div>
          <!-- END Visible only in mini mode -->

          @php
               $id= Auth::user()->id;
              $adminProfile =App\Models\User::find($id);

          @endphp

          <!-- Visible only in normal mode -->
          <div class="smini-hidden text-center mx-auto">
            <a class="img-link" href="be_pages_generic_profile.html">
                <img src="{{ (! empty($adminProfile->photo)) ? url('upload/admin_images/'.$adminProfile->photo):url('upload/no_image.jpg') }}"
                alt="Admin"  style="width:100px; height: 100px;">

            </a>
            <ul class="list-inline mt-3 mb-0">
              <li class="list-inline-item">
                <a class="link-fx text-dual fs-sm fw-semibold text-uppercase" href="{{ route('admin.profile.Edit') }}">{{ Auth::user()->name }}</a>
              </li>
              <li class="list-inline-item">
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle" href="javascript:void(0)">
                  <i class="fa fa-burn"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="link-fx text-dual" href="{{ route('admin.logout') }}">
                  <i class="fa fa-sign-out-alt"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- END Visible only in normal mode -->
        </div>
        <!-- END Side User -->

        <!-- Side Navigation -->
        <div class="content-side content-side-full">
          <ul class="nav-main">
            <li class="nav-main-item">
              <a class="nav-main-link active" href="{{ route('admin.dashboard') }}">
                <i class="nav-main-link-icon fa fa-house-user"></i>
                <span class="nav-main-link-name">Dashboard</span>
              </a>
            </li>
          <li class="nav-main-item">


            </li>
            <li class="nav-main-heading">User Interface</li>
           <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-grip-vertical"></i>

                <span class="nav-main-link-name">News Post</span>
              </a>
              <ul class="nav-main-submenu">

                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('create.news_post') }}">
                      <span class="nav-main-link-name">Create News Post...</span>
                    </a>
                  </li>

                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('all.news_post') }}">
                      <span class="nav-main-link-name">All News Post</span>
                    </a>
                  </li>

              </ul>
            </li>



            {{-- discussion start --}}
            <li class="nav-main-item">
                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <i class="nav-main-link-icon fa fa-vector-square"></i>
                  <span class="nav-main-link-name">Discussion</span>
                </a>
                <ul class="nav-main-submenu">
                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('create.discussion') }}">
                      <span class="nav-main-link-name">Create Discussion</span>
                    </a>
                  </li>

                  <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('all.discussion') }}">
                      <span class="nav-main-link-name">All Discussion</span>
                    </a>
                  </li>
                </ul>
              </li>





{{-- doctor manage start --}}

<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
      <i class="nav-main-link-icon fa fa-user-lock"></i>
      <span class="nav-main-link-name">Doctor Management</span>
    </a>
    <ul class="nav-main-submenu">
      <li class="nav-main-item">
        <a class="nav-main-link" href="{{ route('doctor.inactive') }}">
          <span class="nav-main-link-name">Inactive</span>
        </a>
      </li>

      <li class="nav-main-item">
        <a class="nav-main-link" href="{{ route('doctor.active') }}">
          <span class="nav-main-link-name">Active</span>
        </a>
      </li>
    </ul>
  </li>

{{-- end docotr manage --}}


{{-- Appoinment request start --}}



<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">

      <i class="nav-main-link-icon fa fa-vector-square"></i>
      <span class="nav-main-link-name">Appontment Request</span>
    </a>
    <ul class="nav-main-submenu">
      <li class="nav-main-item">
        <a class="nav-main-link" href="{{ route('admin.appoinment.request') }}">
          <span class="nav-main-link-name">All Request</span>
        </a>
      </li>




    </ul>
  </li>

{{-- appointment rest end --}}



{{-- metting start --}}


<li class="nav-main-item">
    <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">

      <i class="nav-main-link-icon fa fa-vector-square"></i>
      <span class="nav-main-link-name">Metting</span>
    </a>
    <ul class="nav-main-submenu">
      <li class="nav-main-item">
        <a class="nav-main-link" href="{{ url('chatify') }}">
          <span class="nav-main-link-name">join metting</span>
        </a>
      </li>




    </ul>
  </li>

{{-- metting  end --}}


            <li class="nav-main-heading">Build</li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-vector-square"></i>
                <span class="nav-main-link-name">test</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">General</span>
                  </a>
                  <ul class="nav-main-submenu">

                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Header</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Static</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_modern.html">
                            <span class="nav-main-link-name">Modern</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_classic.html">
                            <span class="nav-main-link-name">Classic</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_classic_dark.html">
                            <span class="nav-main-link-name">Classic Dark</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_glass.html">
                            <span class="nav-main-link-name">Glass</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_glass_dark.html">
                            <span class="nav-main-link-name">Glass Dark</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                        <span class="nav-main-link-name">Fixed</span>
                      </a>
                      <ul class="nav-main-submenu">
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_fixed_modern.html">
                            <span class="nav-main-link-name">Modern</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_fixed_classic.html">
                            <span class="nav-main-link-name">Classic</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_fixed_classic_dark.html">
                            <span class="nav-main-link-name">Classic Dark</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_fixed_glass.html">
                            <span class="nav-main-link-name">Glass</span>
                          </a>
                        </li>
                        <li class="nav-main-item">
                          <a class="nav-main-link" href="be_layout_header_fixed_glass_dark.html">
                            <span class="nav-main-link-name">Glass Dark</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Sidebar</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_sidebar_dark.html">
                        <span class="nav-main-link-name">Dark</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_sidebar_hidden.html">
                        <span class="nav-main-link-name">Hidden</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_sidebar_mini.html">
                        <span class="nav-main-link-name">Mini</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Side Overlay</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_side_overlay_visible.html">
                        <span class="nav-main-link-name">Visible</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_side_overlay_hoverable.html">
                        <span class="nav-main-link-name">Hoverable</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_side_overlay_no_page_overlay.html">
                        <span class="nav-main-link-name">No Page Overlay</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Main Content</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_content_boxed.html">
                        <span class="nav-main-link-name">Boxed</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_content_narrow.html">
                        <span class="nav-main-link-name">Narrow</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_content_full_width.html">
                        <span class="nav-main-link-name">Full Width</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                    <span class="nav-main-link-name">Hero</span>
                  </a>
                  <ul class="nav-main-submenu">
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_hero_color.html">
                        <span class="nav-main-link-name">Color</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_hero_bubbles.html">
                        <span class="nav-main-link-name">Bubbles</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_hero_image.html">
                        <span class="nav-main-link-name">Image</span>
                      </a>
                    </li>
                    <li class="nav-main-item">
                      <a class="nav-main-link" href="be_layout_hero_video.html">
                        <span class="nav-main-link-name">Video</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_layout_api.html">
                    <span class="nav-main-link-name">API</span>
                  </a>
                </li>
              </ul>
            </li>



            <li class="nav-main-heading">Pages</li>
            <li class="nav-main-item">
              <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                <i class="nav-main-link-icon fa fa-globe-americas"></i>
                <span class="nav-main-link-name">Generic</span>
              </a>
              <ul class="nav-main-submenu">
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_generic_blank.html">
                    <span class="nav-main-link-name">Blank</span>
                  </a>
                </li>

                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_generic_invoice.html">
                    <span class="nav-main-link-name">Invoice</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="be_pages_generic_faq.html">
                    <span class="nav-main-link-name">FAQ</span>
                  </a>
                </li>


                <li class="nav-main-item">
                  <a class="nav-main-link" href="op_installation.html">
                    <span class="nav-main-link-name">Installation</span>
                  </a>
                </li>
                <li class="nav-main-item">
                  <a class="nav-main-link" href="op_checkout.html">
                    <span class="nav-main-link-name">Checkout</span>
                  </a>
                </li>
              </ul>
            </li>




          </ul>
        </div>
        <!-- END Side Navigation -->
      </div>
      <!-- END Sidebar Scrolling -->
    </div>
    <!-- Sidebar Content -->
  </nav>

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
