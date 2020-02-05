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
        <a href="{{route('faqs.view')}}"><i class="fa fa-question"></i><span>Faqs</span></a>
      </li>
      <li>
        <a href="{{route('block.show')}}"><i class="fa fa-file"></i><span>Blogs</span></a>
      </li>
      <li>
        <a href="{{route('service.show')}}"><i class="fa fa-list"></i><span>Services</span></a>
      </li>
      <li>
        <a href="{{route('themes.view')}}"><i class="glyphicon glyphicon-th-list"></i><span>Themes</span></a>
      </li>

      <li>
        <a href="{{route('packages.view')}}"><i class="glyphicon glyphicon-th-list"></i><span>Packages</span></a>
      </li>

      <li>
        <a href="{{route('all.orders')}}"><i class="fa fa-map"></i><span>Orders</span></a>
      </li>
      <li>
        <a href="{{route('view.order.status')}}"><i class="fa fa-map"></i><span>Order Status</span></a>
      </li>

      <li>
        <a href="{{route('feature.view')}}"><i class="fa fa-cube"></i><span> Features</span></a>
      </li>

      <li><a href="{{route('subscribe.index')}}"><i class="fa fa-envelope"></i><span>Subscribers</span> </a></li>

      <li><a href="{{route('edit.About')}}"><i class="fa fa-star"></i><span>About Us Page</span> </a></li>

    </ul>

  </section>
  <!-- /.sidebar -->
</aside>
<!--
end sidebar
=============================================== -->