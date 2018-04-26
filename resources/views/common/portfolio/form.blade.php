<div class="box-body">
    <div class="form-group">
        {{ Form::label('title', 'Title :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('sub_title', 'Sub Title :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('sub_title', null, ['class' => 'form-control', 'placeholder' => 'Sub Title', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('app_title', 'App Title :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('app_title', null, ['class' => 'form-control', 'placeholder' => 'App Title', 'required' => 'required']) }}
        </div>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('category', 'Category :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::select('category', ['IPHONE' => 'I Phone', 'ANDROID' => 'Android'], isset($item->category) ? $item->category : 'IPHONE', ['class' => 'form-control', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('ide', 'Ide :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('ide', null, ['class' => 'form-control', 'placeholder' => 'Ide', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('frontend', 'Frontend :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('frontend', null, ['class' => 'form-control', 'placeholder' => 'Frontend', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('country', 'Country :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('country', null, ['class' => 'form-control', 'placeholder' => 'Country', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('os_version', 'Os Version :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('os_version', null, ['class' => 'form-control', 'placeholder' => 'Os Version', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('backend', 'Backend :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('backend', null, ['class' => 'form-control', 'placeholder' => 'Backend', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('rating', 'Rating :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('rating', null, ['class' => 'form-control', 'placeholder' => 'Rating', 'required' => 'required']) }}
        </div>
    </div>
</div><div class="box-body">
    <div class="form-group">
        {{ Form::label('description', 'Description :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description']) }}
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
                {{ Html::image('/uploads/portfolio/'.$item->icon, 'Image', ['width' => 250, 'height' => 250]) }}
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
                {{ Html::image('/uploads/portfolio/'.$item->image, 'Image', ['width' => 250, 'height' => 250]) }}
            @endif
        </center>
    </div>
</div>

<div class="box-body">
    <div class="form-group">
        {{ Form::label('banner_image', 'Banner Image :', ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::file('banner_image', null, ['class' => 'form-control']) }}
        </div>
        <center>
            @if(isset($item->banner_image))
                {{ Html::image('/uploads/portfolio/'.$item->banner_image, 'Image', ['width' => 250, 'height' => 250]) }}
            @endif
        </center>
    </div>
</div>
