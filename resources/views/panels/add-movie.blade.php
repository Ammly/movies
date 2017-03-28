@php

    $levelAmount = 'level';

    if (Auth::User()->level() >= 2) {
        $levelAmount = 'levels';

    }

@endphp


<div class="panel panel-primary @role('admin', true) panel-default  @endrole">
    <div class="panel-heading">

        Add Movies

        @role('admin', true)
            <span class="pull-right label label-primary" style="margin-top:4px">
            Admin Access
            </span>
        @else
            <span class="pull-right label label-warning" style="margin-top:4px">
            User Access
            </span>
        @endrole

    </div>
    <div class="panel-body">

        @role('admin')
            
            {!! Form::open(['route' => 'movie', 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST', 'files' => true] ) !!}

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="col-sm-4 control-label">Movie Name</label>
                    <div class="col-sm-6">
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Movie Name', 'id' => 'name']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="director" class="col-sm-4 control-label">Movie Director</label>
                    <div class="col-sm-6">
                        {!! Form::text('director', null, ['class' => 'form-control', 'placeholder' => 'Movie Director', 'id' => 'director']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="country" class="col-sm-4 control-label">Country</label>
                    <div class="col-sm-6">
                        {!! Form::text('country', null, ['class' => 'form-control', 'placeholder' => 'Country', 'id' => 'country']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="category" class="col-sm-4 control-label">Category</label>
                    <div class="col-sm-6">
                        {!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Category', 'id' => 'category']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="poster" class="col-sm-4 control-label">Upload Poster</label>
                    <div class="col-sm-6">
                        {!! Form::file('poster', null, ['class' => 'form-control', 'placeholder' => 'Upload poster', 'id' => 'poster']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="video_file" class="col-sm-4 control-label">Upload File</label>
                    <div class="col-sm-6">
                        {!! Form::file('video_file', null, ['class' => 'form-control', 'placeholder' => 'Upload video-file', 'id' => 'video_file']) !!}
                    </div>
                </div>

                <div class="form-group">
                    <label for="description" class="col-sm-4 control-label">Description</label>
                    <div class="col-sm-6">
                        {!! Form::text('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'id' => 'description']) !!}
                    </div>
                </div>

                <div class="form-group margin-bottom-2">
                    <div class="col-sm-6 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                    </div>
                </div>
            
            {!! Form::close() !!}

        @endrole

    </div>
</div>