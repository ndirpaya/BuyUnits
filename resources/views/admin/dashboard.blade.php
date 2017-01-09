@extends('admin.layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-4 col-sm-6 portlets">
            <div class="panel">
                <div class="panel-header md-panel-controls">
                    <h3><i class="icon-list"></i> <strong>Todo</strong> List</h3>
                </div>
                <div class="panel-content">
                    <ul class="todo-list md-todo ui-sortable">
                        <li class="high">
                            <div class="checkbox checkbox-primary">
                                <label>
                                    <input id="task-1" type="checkbox" name="r-primary" value="option1" class="md-checkbox">
                                    <span class="todo-task">Send email to Bob Linch</span>
                                </label>
                            </div>
                            <div class="todo-date clearfix">
                                <div class="completed-date"></div>
                                <div class="due-date">Due on <span class="due-date-span">15 December 2014</span></div>
                            </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                            <div class="todo-tags pull-right">
                                <div class="label label-success">Work</div>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-primary">
                                <label>
                                    <input id="task-2" type="checkbox" name="r-primary" value="option1" class="md-checkbox">
                                    <span class="todo-task">Call datacenter for servers</span>
                                </label>
                            </div>
                            <div class="todo-date clearfix">
                                <div class="completed-date"></div>
                                <div class="due-date">Due on <span class="due-date-span">7 January</span></div>
                            </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                        </li>
                        <li class="low">
                            <div class="checkbox checkbox-primary">
                                <label>
                                    <input id="task-3" type="checkbox" name="r-primary" value="option1" class="md-checkbox">
                                    <span class="todo-task">Remove all unused icons</span>
                                </label>
                            </div>
                            <div class="todo-date clearfix">
                                <div class="completed-date"></div>
                                <div class="due-date">Due on <span class="due-date-span">5 January</span></div>
                            </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                        </li>
                        <li class="medium">
                            <div class="checkbox checkbox-primary">
                                <label>
                                    <input id="task-4" type="checkbox" name="r-primary" value="option1" class="md-checkbox">
                                    <span class="todo-task">Read my todo list</span>
                                </label>
                            </div>
                            <div class="todo-date clearfix">
                                <div class="completed-date"></div>
                                <div class="due-date">Due on <span class="due-date-span">4 January</span></div>
                            </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                            <div class="todo-tags pull-right">
                                <div class="label label-info">Tuesday</div>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox checkbox-primary">
                                <label>
                                    <input id="task-6" type="checkbox" name="r-primary" value="option1" class="md-checkbox">
                                    <span class="todo-task">Have a breakfeast before 12</span>
                                </label>
                            </div>
                            <div class="todo-date clearfix">
                                <div class="completed-date"></div>
                                <div class="due-date">Due on <span class="due-date-span">1 January</span></div>
                            </div>
                      <span class="todo-options pull-right">
                      <a href="javascript:;" class="todo-delete"><i class="icons-office-52"></i></a>
                      </span>
                        </li>
                    </ul>
                    <div class="clearfix m-t-10">
                        <div class="pull-left">
                            <button type="button" class="btn btn-sm btn-default check-all-tasks">Check All Done</button>
                        </div>
                        <div class="pull-right">
                            <button type="button" class="btn btn-sm btn-dark add-task md-task">Add Task</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 portlets">
            <div class="panel widget-member clearfix">
                <div class="col-xs-3">
                    <img src="{{asset('make/global/images/avatars/user2.png')}}" alt="avatar 12" class="pull-left img-responsive">
                </div>
                <div class="col-xs-9">
                    <h3 class="m-t-0 member-name"><strong>John Snow</strong></h3>
                    <p class="member-job">Software Engineer</p>
                    <div class="row">
                        <div class="col-xlg-6">
                            <p><i class="icon-envelope c-gray-light p-r-10"></i> cameso@it.com</p>
                            <p><i class="fa fa-facebook c-gray-light p-r-10"></i> fb.com/jsnow</p>
                        </div>
                        <div class="col-xlg-6 align-right">
                            <p><i class="icon-calendar c-gray-light p-r-10"></i> 6 may 2014</p>
                            <p><i class="icon-target c-gray-light p-r-10"></i> New York</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 portlets">
            <div class="widget widget_calendar bg-dark">
                <div class="multidatepicker"></div>
            </div>
            <div class="panel m-t-0">
                <div class="panel-header md-panel-controls">
                    <h3><i class="icon-basket"></i> <strong>Sales</strong> Volume Stats</h3>
                </div>
                <div class="panel-content p-t-0 p-b-0">
                    <div id="bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
