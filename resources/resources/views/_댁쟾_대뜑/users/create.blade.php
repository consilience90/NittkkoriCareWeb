@extends('layouts.app')

@section('content')
<form class="form__auth" action="{{ route('users.store') }}" method="post">
  {!! csrf_field() !!}

  <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    <input type="text" name="name" class="form-control" placeholder="이름" value="{{ old('name') }}" autofocus/>
    {!! $errors->first('name','<span class="form-error">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('user_id') ? 'has-error' : '' }}">
      <input type="email" name="email" class="form-control" placeholder="아이디"/>
      {!! $errors->first('email', '<span class="form-error">:message</span>') !!}
  </div>

  <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
      <input type="password" name="password" class="form-control" placeholder="비밀번호, 최소 6자"/>
      {!! $errors->first('password', '<span class="form-error">:message</span>') !!}
    </div>

    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
      <input type="password" name="password_confirmation" class="form-control" placeholder="비밀번호 확인" />
      {!! $errors->first('password_confirmation', '<span class="form-error">:message</span>') !!}
    </div>


  <div class="form-group">
    <button class="btn btn-primary btn-lg btn-block" type="submit">
        가입하기
    </button>
  </div>
</form>
@stop
