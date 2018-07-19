{{--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
{{--<script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>--}}

{{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
{{--<script>--}}
    {{--tinymce.init({ selector:'textarea',--}}
        {{--plugins: "link",--}}
        {{--menu: 'disable',--}}
        {{--plugins: "lists",--}}
        {{--toolbar: "numlist bullist",--}}
        {{--//plugin:"advlist",--}}
        {{--browser_spellcheck: true,--}}
    {{--});--}}
{{--</script>--}}



@extends('admin.admin-layout.main')
@section('content')


<div class="right_col" role="main">
    <div class="page-title">
        <div class="title_left">
            <h3>Edit Employer Profile</h3>
        </div>
    </div>
    <div class="clearfix"></div>


    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> <small>Employer area</small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form role="form" class="form-group" action="{{ route('employer.update', ['id'=>$company->id]) }}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <section>
                                    <div class="wizard">

                                        <div class="tab-content">
                                            <div class="tab-pane active" role="tabpanel" id="step1">
                                                @include('employer.form.form-edit')
                                                <ul class="list-inline pull-right">
                                                    <li><button type="submit" class="btn btn-primary next-step">Update now</button></li>
                                                </ul>
                                            </div>

                                            {{--end step 4--}}
                                            <div class="clearfix"></div>
                                        </div>
                                        {{--<input type="submit" name="submit">--}}

                                    </div>
                                </section>
                            </div>
                            <div class="col-md-1"></div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection