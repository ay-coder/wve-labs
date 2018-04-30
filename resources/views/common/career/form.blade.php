<div class="box-body">
    <div class="form-group">
        {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('position', 'Position :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('position', null, ['class' => 'form-control', 'placeholder' => 'Position', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('sub_title', 'Sub Title :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Sub Title', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('experience', 'Experience :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('experience', null, ['class' => 'form-control', 'placeholder' => 'Experience', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('location', 'Location :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('location', null, ['class' => 'form-control', 'placeholder' => 'Location', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('description', 'Description :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('icon', 'Icon :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::file('icon', null, ['class' => 'form-control']) }}
        </div>

         <center>
            @if(isset($item->icon))
                {{ Html::image('/uploads/career/'.$item->icon, 'Image', ['width' => 250, 'height' => 250]) }}
            @endif
        </center>
    </div>
</div>
