<div class="sidebar">
    <ul class="widget widget-menu unstyled">
        <li class="active"><a href="{{route('dashboard')}}"><i class="menu-icon icon-dashboard"></i>Dashboard
            </a></li>
        <li><a href="activity.html"><i class="menu-icon icon-bullhorn"></i>News Feed </a>
        </li>
        <li><a href="message.html"><i class="menu-icon icon-inbox"></i>Inbox <b class="label green pull-right">
                    11</b> </a></li>
        <li><a href="task.html"><i class="menu-icon icon-tasks"></i>Tasks <b class="label orange pull-right">
                    19</b> </a></li>
        <li><a href="{{route('barang.view')}}"><i class="icon-inbox"></i>All Barang </a></li>
        <li><a href="{{route('film.view')}}"><i class="icon-inbox"></i>Film </a></li>

    </ul>

    <!--/.widget-nav-->
    <ul class="widget widget-menu unstyled">
        <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
                </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
                </i>Manage Users </a>
            <ul id="togglePages" class="collapse unstyled">
                <li><a href="{{route('user.add')}}"><i class="icon-inbox"></i>Add User </a></li>
                <li><a href="{{route('user.view')}}"><i class="icon-inbox"></i>All Users </a></li>
            </ul>
        </li>
    </ul>

</div>