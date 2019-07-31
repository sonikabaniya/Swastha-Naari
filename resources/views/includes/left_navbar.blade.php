<div class="wrapper">
    <aside class="main_left_sidebar">
        <ul>
            <li class ="{{(request()->is('userprofile/*'))?'active':''}}"><i class="fa fa-user"></i><a href="{{ route('userprofile',['id' => session()->get('userid')]) }}">My Profile</a></li>
            <li class ="{{(request()->is('graph'))?'active':''}}"><i class="fa fa-area-chart"></i><a href="{{ route('graphroute')}}">Data Infographics</a></li>
            <li class ="{{(request()->is('dataview'))?'active':''}}"><i class="fa fa-eye"></i><a href="{{ route('dataviewroute')}}">Data List View</a></li>
            <li class ="{{(request()->is('dataintake'))?'active':''}}"><i class="fa fa-tasks"></i><a href="{{ route('dataintakeroute')}}">Data Intake</a></li>
            <li class ="{{(request()->is('discussion'))?'active':''}}"><i class="fa fa-comment"></i><a href="#">Discussion</a></li>
             
        </ul>
    </aside>
</div>
