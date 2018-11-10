@if (Session::has('flash_message'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif
<form method="post" action="{{ route('form.contact') }}#we-wrapper" class="form questions-form" autocomplete="off">
    {{ csrf_field() }}

    <div class="form-group">
        <input type="text" class="form-control" id="first-name" name="first_name" placeholder="First name" />
        @if ($errors->has('first_name'))
            <small class="form-text invalid-feedback">{{ $errors->first('first_name') }}</small>
        @endif
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="last-name" name="last_name" placeholder="Last name" />
        @if ($errors->has('last_name'))
            <small class="form-text invalid-feedback">{{ $errors->first('last_name') }}</small>
        @endif
    </div>

    <div class="form-group">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email address" />
        @if ($errors->has('email'))
            <small class="form-text invalid-feedback">{{ $errors->first('email') }}</small>
        @endif
    </div>

    <div class="form-group">
        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Message..."></textarea>
    </div>

    <button type="submit" class="btn btn-theme"><i class="fa fa-envelope"></i> Send message</button>
</form>
