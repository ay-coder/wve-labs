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
        {{ Form::label('extra_link', 'Extra Link :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('extra_link', null, ['class' => 'form-control', 'placeholder' => 'Extra Link', 'required' => 'required']) }}
        </div>
    </div>
</div>


<div class="box-body">
    <div class="form-group">
        {{ Form::label('button_text', 'Button Text :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('button_text', isset($item) && isset($item->button_text) ? $item->button_text : 'Read More', ['class' => 'form-control', 'placeholder' => 'Button Text', 'required' => 'required']) }}
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
                {{ Html::image('/uploads/press/'.$item->icon, 'Icon', ['width' => 250, 'height' => 250]) }}
            @endif
        </center>
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
                {{ Html::image('/uploads/press/'.$item->image, 'Image', ['width' => 250, 'height' => 250]) }}
            @endif
        </center>
    </div>
</div>