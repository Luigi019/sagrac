<div class="mt-2"><a href="{{ URL::previous() }}" class="btn btn-primary"> Volver hacia atrás</a></div>
<div class="mb-4"></div>
<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::email('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'maxlength' => '40', 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $user->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'cedula', 'maxlength' => '15']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group ">

            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
              <input type="password" class="form-control" id="inputPassword" value="{{$user->password}}" name="password">
        </div>

        <div class="form-group">
            @foreach($roles as $rol => $values)
                <div class="form-group checkbox">
                    <input type="checkbox"  name="roles[]" class="mr-2" {{$values['check'] ? 'checked' : ''}} value="{{$values['id']}}" />{{$rol}}
                </div>
            @endforeach
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Aceptar</button>
    </div>
</div>
