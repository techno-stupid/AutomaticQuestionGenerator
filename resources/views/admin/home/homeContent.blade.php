@extends('admin.master')

@section('title')
    Auto Question Generator
@endsection


@section('mainContent')

<style>
                    .buttonkuk {
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
                    .button2kuk {
                    background-color: #008CBA;
                    color: white;
                    border: 2px solid #008CBA;
                }

                .button2kuk:hover {
                    
                    background-color: white; 
                    color: #008CBA; 
}
                    
                </style>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-mortar-board fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$publishedDepartments}}</div>
                                    <div>Departments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/department/manage')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$publishedSubjects}}</div>
                                    <div>Subjects!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/subject/manage')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-pencil fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$publishedBQ}}</div>
                                    <div>Broad Questions!</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/broad-question/manage')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-check fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">0</div>
                                    <div>MCQ!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div> -->
            </div>
            <hr>
                                <a href="{{url('/generate/broad-question')}}"><button class="buttonkuk button2kuk"><i class="fa fa-paper-plane-o fa-1x"></i><strong> Generate Question Paper</strong></button></a>
                                <a href="{{url('/saved-questions')}}"><button class="buttonkuk button2kuk"><i class="fa fa-floppy-o fa-1x"></i><strong> Saved Question Papers</strong></button></a><hr>

                
                            </div>
                        </div>
                        <!-- /.panel-footer -->
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        
        <!-- /#page-wrapper -->
@endsection