@extends('layouts.app')
@section('main')

<div class="content">
    <div class="container">


        <div class="row">
            <div class="col-xs-12">
                <div class="page-title-box">
                    <h4 class="page-title">Form elements </h4>
                    <ol class="breadcrumb p-0 m-0">
                        <li>
                            <a href="#">Zircos</a>
                        </li>
                        <li>
                            <a href="#">Forms </a>
                        </li>
                        <li class="active">
                            Form elements
                        </li>
                    </ol>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Input Types</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Most common form control, text-based input fields. Includes support for all HTML5 types: <code>text</code>, <code>password</code>, <code>datetime</code>, <code>datetime-local</code>, <code>date</code>, <code>month</code>, <code>time</code>, <code>week</code>, <code>number</code>, <code>email</code>, <code>url</code>, <code>search</code>, <code>tel</code>, and <code>color</code>.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Text</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" value="Some text value...">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label" for="example-email">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Password</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control" value="password">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Placeholder</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="placeholder">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Text area</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>



                            </form>
                        </div>

                        <div class="col-md-6">
                            <form class="form-horizontal" role="form">

                                <div class="form-group">
                                    <label class="col-md-2 control-label">Readonly</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" readonly="" value="Readonly value">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Disabled</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" disabled="" value="Disabled value">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Static control</label>
                                    <div class="col-sm-10">
                                        <p class="form-control-static">email@example.com</p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Helping text</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" placeholder="Helping text">
                                        <span class="help-block"><small>A block of help text that breaks onto a new line and may extend beyond one line.</small></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Input Select</label>
                                    <div class="col-sm-10">
                                        <select class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <h6>Multiple select</h6>
                                        <select multiple="" class="form-control">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                                </div>

                            </form>
                        </div>


                    </div>




                    <div class="row">
                        <div class="col-md-6 m-t-50">
                            <h4 class="m-t-0 header-title"><b>Input States</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Bootstrap includes validation styles for error, warning, and success states on form controls.
                            </p>

                            <form class="form-horizontal" role="form">

                                <div class="form-group has-success">
                                    <label class="col-md-3 control-label" for="state-success">Success</label>
                                    <div class="col-md-6">
                                        <input type="text" id="state-success" name="state-success" class="form-control" placeholder="...">
                                    </div>
                                </div>


                                <div class="form-group has-warning">
                                    <label class="col-md-3 control-label" for="state-warning">Warning</label>
                                    <div class="col-md-6">
                                        <input type="text" id="state-warning" name="state-warning" class="form-control" placeholder="...">
                                    </div>
                                </div>

                                <div class="form-group has-error">
                                    <label class="col-md-3 control-label" for="state-danger">Danger</label>
                                    <div class="col-md-6">
                                        <input type="text" id="state-danger" name="state-danger" class="form-control" placeholder="...">
                                    </div>
                                </div>

                                <div class="form-group has-success has-feedback">
                                    <label class="col-sm-3 control-label">Input with success </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control">
                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                    </div>
                                </div>

                                <div class="form-group has-warning has-feedback">
                                    <label class="col-sm-3 control-label">Input with warning </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control inputmask">
                                        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span>
                                    </div>
                                </div>

                                <div class="form-group has-error has-feedback">
                                    <label class="col-sm-3 control-label">Input with error </label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control inputmask">
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label class="col-sm-3 control-label">Custom Icons</label>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" placeholder="Custom icons">
                                        <i class="fa fa-envelope form-control-feedback l-h-34"></i>
                                    </div>
                                </div>
                            </form>
                        </div>


                        <div class="col-md-6 m-t-50">
                            <h4 class="m-t-0 header-title"><b>Input Sizes</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Set heights using classes like <code>.input-lg</code>, and set widths using grid column classes like <code>.col-lg-*</code>.
                            </p>

                            <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="example-input-small">Small</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="example-input-small" name="example-input-small" class="form-control input-sm" placeholder=".input-sm">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="example-input-normal">Normal</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="example-input-normal" name="example-input-normal" class="form-control" placeholder="Normal">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label" for="example-input-large">Large</label>
                                    <div class="col-sm-6">
                                        <input type="text" id="example-input-large" name="example-input-large" class="form-control input-lg" placeholder=".input-lg">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Grid Sizes</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" placeholder=".col-sm-4">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-5 col-sm-offset-3">
                                        <input type="text" class="form-control" placeholder=".col-sm-5">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-6 col-sm-offset-3">
                                        <input type="text" class="form-control" placeholder=".col-sm-6">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-9 col-sm-offset-3">
                                        <input type="text" class="form-control" placeholder=".col-sm-9">
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


                    <h4 class="m-t-50 header-title"><b>Input groups</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Extend form controls by adding text or buttons before, after, or on both sides of any text-based <code>&lt;input&gt;</code>. Use <code>.input-group</code> with an <code>.input-group-addon</code> or <code>.input-group-btn</code> to prepend or append elements to a single <code>.form-control</code>.
                    </p>

                    <div class="row">
                        <div class="col-md-4">
                            <form role="form">
                                <div class="form-group">
                                    <label class="control-label" for="example-input1-group1">Static</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="example-input1-group1" name="example-input1-group1" class="form-control" placeholder="Username">
                                    </div>

                                    <div class="input-group m-t-10">
                                        <input type="email" id="example-input2-group1" name="example-input2-group1" class="form-control" placeholder="Email">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    <div class="input-group m-t-10">
                                        <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                        <input type="text" id="example-input3-group1" name="example-input3-group1" class="form-control" placeholder="..">
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div> <!-- form-group -->

                            </form>
                        </div>

                        <div class="col-md-4">
                            <form role="form">
                                <div class="form-group">
                                    <label class="control-label" for="example-input1-group2">Buttons</label>
                                    <div class="input-group">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-search"></i></button>
                                                        </span>
                                        <input type="text" id="example-input1-group2" name="example-input1-group2" class="form-control" placeholder="Search">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <input type="email" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Email">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Submit</button>
                                                        </span>
                                    </div>
                                    <div class="input-group m-t-10">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-facebook"></i></button>
                                                        </span>
                                        <input type="text" id="example-input3-group2" name="example-input3-group2" class="form-control" placeholder="Search">
                                                        <span class="input-group-btn">
                                                        <button type="button" class="btn waves-effect waves-light btn-primary"><i class="fa fa-twitter"></i></button>
                                                        </span>
                                    </div>
                                </div> <!-- form-group -->

                            </form>
                        </div>

                        <div class="col-md-4">
                            <form role="form">
                                <div class="form-group">
                                    <label class="control-label" for="example-input1-group3">Dropdowns</label>
                                    <div class="input-group">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" id="example-input1-group3" name="example-input1-group3" class="form-control" placeholder="Username">
                                    </div>
                                    <div class="input-group m-t-10">
                                        <input type="email" id="example-input2-group3" name="example-input2-group3" class="form-control" placeholder="Email">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;">Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="input-group m-t-10">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn waves-effect waves-light btn-primary" style="overflow: hidden; position: relative;">Action</button>
                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>
                                        <input type="text" id="example-input3-group3" name="example-input3-group3" class="form-control" placeholder="..">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn waves-effect waves-light btn-primary dropdown-toggle" data-toggle="dropdown" style="overflow: hidden; position: relative;"><span class="caret"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="javascript:void(0)">Action</a></li>
                                                <li><a href="javascript:void(0)">Another action</a></li>
                                                <li class="divider"></li>
                                                <li><a href="javascript:void(0)">Separated link</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div> <!-- form-group -->

                            </form>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-md-6 m-t-50">
                            <h4 class="m-t-0 header-title"><b>Basic example</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Individual form controls automatically receive some global styling. All textual <code>&lt;input&gt;</code>,
                                <code>&lt;textarea&gt;</code>, and <code>&lt;select&gt;</code> elements with <code>.form-control</code> are set to
                                <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing.
                            </p>

                            <form role="form">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                            </form>
                        </div>

                        <div class="col-md-6 m-t-50">
                            <h4 class="m-t-0 header-title"><b>Horizontal form</b></h4>
                            <p class="text-muted m-b-30 font-13">
                                Use Bootstrap's predefined grid classes to align labels and groups of form controls in a horizontal layout by adding
                                <code>.form-horizontal</code> to the form (which doesn't have to be a <code>&lt;form&gt;</code>). Doing so changes
                                <code>.form-group</code>s to behave as grid rows, so no need for <code>.row</code>.
                            </p>

                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword4" class="col-sm-3 control-label">Re Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="inputPassword4" placeholder="Retype Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox2" type="checkbox">
                                            <label for="checkbox2">
                                                Check me out !
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- end row -->



                    <!-- Inline Form -->
                    <h4 class="m-t-50 header-title"><b>Inline Form</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Add <code>.form-inline</code> to your form (which doesn't have to be a <code>&lt;form&gt;</code>)
                        for left-aligned and inline-block controls. <strong>This only applies to forms within viewports
                            that are at least 768px wide.</strong>
                    </p>
                    <div class="row m-b-30">
                        <div class="col-sm-12">
                            <h5><b>Style 1</b></h5>

                            <form class="form-inline" role="form">
                                <div class="form-group">
                                    <label class="sr-only" for="exampleInputEmail21">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail21" placeholder="Enter email">
                                </div>

                                <div class="form-group m-l-10">
                                    <label class="sr-only" for="exampleInputPassword2">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                                </div>
                                <div class="form-group m-l-10">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success waves-effect waves-light m-l-10 btn-md">Sign in</button>
                            </form>
                        </div>


                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            <h5><b>Style 2</b></h5>

                            <form class="form-inline">
                                <div class="form-group m-r-10">
                                    <label for="exampleInputName2">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="Jane Doe">
                                </div>
                                <div class="form-group m-r-10">
                                    <label for="exampleInputEmail2">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                                </div>
                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md">
                                    Send invitation
                                </button>
                            </form>
                        </div>

                    </div>
                    <!-- end row -->


                </div>
            </div>
        </div>
        <!-- end row -->


    </div> <!-- container -->

</div> <!-- content -->
@endsection