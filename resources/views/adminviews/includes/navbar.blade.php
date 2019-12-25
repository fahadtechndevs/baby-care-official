<!--
start sidebar
Left side column. contains the sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{asset('adminassets')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>

      <li>
        <a href="{{-- {{route('faq.index')}} --}}"><i class="fa fa-question"></i><span>Faqs</span></a>
      </li>
      <li>
        <a href="{{-- {{route('blog.index')}} --}}"><i class="fa fa-file"></i><span>Blogs</span></a>
      </li>
      <li>
        <a href="{{route('service.show')}}"><i class="fa fa-list"></i><span>Services</span></a>
      </li>
      <li>
        <a href="{{-- {{route('gallerycategory.index')}} --}}"><i class="glyphicon glyphicon-th-list"></i><span>Gallery Categories</span></a>
      </li>
      <li>
        <a href="{{-- {{route('gallery.index')}} --}}"><i class="fa fa-image"></i><span>Gallery Images</span></a>
      </li>
      <li>
        <a href="{{-- {{route('slider.index')}} --}}"><i class="glyphicon glyphicon-picture"></i><span> Slider Images</span></a>
      </li>
      <li>
        <a href="{{-- {{route('foodcategory.index')}} --}}"><i class="glyphicon glyphicon-th-list"></i><span> Food Categories</span></a>
      </li>
      <li>
        <a href="{{-- {{route('food.index')}} --}}"><i class="fa fa-battery-3"></i><span> Foods</span></a>
      </li>
      <li>
        <a href="{{-- {{route('event.index')}} --}}"><i class="fa fa-newspaper-o"></i><span> Events</span></a>
      </li>
      <li>
        <a href="{{-- {{route('plan.index')}} --}}"><i class="fa fa-map"></i><span> Plans</span></a>
      </li>
      <li>
        <a href="{{-- {{route('tour.index')}} --}}"><i class="fa fa-map-marker"></i><span> Tours</span></a>
      </li>
      <li>
        <a href="{{-- {{route('feature.index')}} --}}"><i class="fa fa-cube"></i><span> Features</span></a>
      </li>
      <li>
        <a href="{{-- {{route('partner.index')}} --}}"><i class="fa fa-users"></i><span> Partners</span></a>
      </li>
      <li>
        <a href="{{-- {{route('teacherdetails.index')}} --}}"><i class="fa fa-user"></i><span> Teachers</span></a>
      </li>
      <li>
        <a href="{{-- {{route('parentdetails.index')}} --}}"><i class="fa fa-male"></i><span> Parents</span></a>
      </li>
       <li>
        <a href="{{-- {{route('teacherchild.index')}} --}}"><i class="fa fa-arrows-h"></i><span> Assign Teacher To Childs</span></a>
      </li>
      <li><a href="{{-- {{route('contact.index')}} --}}"><i class="fa fa-commenting"></i><span>Messages</span></a></li>
      <li><a href="{{route('subscribe.index')}}"><i class="fa fa-envelope"></i><span>Subscribers</span> </a></li>
      <li><a href="{{-- {{route('termination.index')}} --}}"><i class="fa  fa-bell"></i><span>Requests</span> </a></li>
      <li><a href="{{-- {{route('general.index')}} --}}"><i class="fa fa-gears"></i><span>General Settings</span></a></li>
      <li><a href="{{-- {{route('aboutus.index')}} --}}"><i class="fa fa-star"></i><span>About Us Page</span> </a></li>

    </ul>

  </section>
  <!-- /.sidebar -->
</aside>
<!--
end sidebar
=============================================== -->