
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="{{url('/')}}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-mortar-board fa-fw"></i> Departments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('department/add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Department</a>
                                </li>
                                <li>
                                    <a href="{{url('department/manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Departments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-book fa-fw"></i> Subjects<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('subject/add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Subject</a>
                                </li>
                                <li>
                                    <a href="{{url('subject/manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Subjects</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
<!--                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
                        <li>
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                        </li>-->
<!--                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="panels-wells.html">Panels and Wells</a>
                                </li>
                                <li>
                                    <a href="buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="typography.html">Typography</a>
                                </li>
                                <li>
                                    <a href="icons.html"> Icons</a>
                                </li>
                                <li>
                                    <a href="grid.html">Grid</a>
                                </li>
                            </ul>
                             /.nav-second-level 
                        </li>-->
                        <li>
                            <a href="#"><i class="fa fa-bank fa-fw"></i> Question Bank<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#"><i class="fa fa-hand-o-right fa-fw"></i> Broad Question <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{url('broad-question/add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add</a>
                                        </li>
                                        <li>
                                            <a href="{{url('broad-question/manage')}}"><i class="fa fa-edit fa-fw"></i> Manage</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags fa-fw"></i> Tags <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('tag/add')}}"><i class="fa fa-plus-circle fa-fw"></i> Add Tags</a>
                                </li>
                                <li>
                                    <a href="{{url('tag/manage')}}"><i class="fa fa-edit fa-fw"></i> Manage Tags</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul><br>
                    <style>
            .buttonkuks{
                    background-color: #4CAF50; /* Green */
                    border: none;
                    color: white;
                    padding: 16px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    -webkit-transition-duration: 0.4s; /* Safari */
                    transition-duration: 0.4s;
                    cursor: pointer;
                }
                .button1kuk {
                    background-color: white; 
                    color: green; 
                    border: 2px solid #4CAF50;
                }

                .button1kuk:hover {
                    
                    background-color: #4CAF50;
                    color: white;       
                }
                .button3kuk {
                    background-color: white; 
                    color: #F0AD4E; 
                    border: 2px solid #F0AD4E;
                }

                .button3kuk:hover {
                    
                    background-color: #F0AD4E;
                    color: white;       
}
                    
                </style>
                @if(Auth::user()->id<2)
            
                <a href="{{url('/admin/register')}}"><button class="buttonkuks button1kuk" style"width:240px;"><i class="fa fa-user-plus fa-1x"></i><strong> Create New Admin &nbsp</strong></button></a>
                <a href="{{url('/admin/manage')}}">
                                <button style="width:240px;" class="buttonkuks button3kuk"><i class="fa fa-cogs fa-1x"></i><strong> Manage Admins</strong></button></a><hr>
                @endif
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>