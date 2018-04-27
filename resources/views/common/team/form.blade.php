<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', 'Name :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('designation', 'Designation :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('designation', null, ['class' => 'form-control', 'placeholder' => 'Designation', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('emailid', 'Emailid :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('emailid', null, ['class' => 'form-control', 'placeholder' => 'Emailid']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('linkedin', 'Linkedin :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('linkedin', null, ['class' => 'form-control', 'placeholder' => 'Linkedin']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('display_order', 'Display Order :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::number('display_order', isset($order) ? $order : null, ['min' => 0,  'class' => 'form-control', 'placeholder' => 'Display Order', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('image', 'Image :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::file('image', null, ['class' => 'form-control']) }}
        </div>
        <center>
            @if(isset($item->image))
                {{ Html::image('/uploads/team/'.$item->image, 'Image', ['width' => 250, 'height' => 250]) }}
            @endif
        </center>
    </div>
</div>