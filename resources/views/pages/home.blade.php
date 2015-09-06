@extends('app')

@section('content')
	<div class="hello-block">
		<div class="container">
			<h2>¡Hola!</h2>
			<p>Somos un estudio especializado en diseño, desarrollo web, marketing digital y branding.</p>
			<span class="arrow icon-c"></span>
		</div>
	</div>

	<div class="container form">
		{!! Form::open(['id'=>'contactForm']) !!}
			<div class="form-group select">{!! Form::select('motivo', [''=>'¿Qué estás buscando?', 'Diseño'=>'Diseño', 'Desarrollo Web'=>'Desarrollo Web', 'Marketing Digital'=>'Marketing Digital', 'Branding'=>'Branding'], 'selected', []) !!}</div>
			<div class="form-group"> {!! Form::text('nombre', null, ['class'=>'form-control', 'data-validate'=>'required', 'placeholder'=>'Escribe tu nombre']) !!} </div>
			<div class="form-group"> {!! Form::text('email', null, ['class'=>'form-control', 'data-validate'=>'required|email', 'placeholder'=>'Escribe tu correo']) !!} </div>
			<div class="form-group"> {!! Form::textarea('comentario', null, ['placeholder'=>'Platícanos un poco de tu proyecto', 'data-validate'=>'required']) !!} </div>
			<div class="submit-line"> {!! Form::submit('Enviar', ['class'=>'btn btn-primary'])!!} </div>
		{!! Form::close() !!}
	</div>

	<div class="container clients">
		<h2>Nuestros clientes</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio rerum dignissimos consequatur tempore quod.</p>
		<div class="clients-carousel">
			<div class="item"><span class="icon-i"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-j"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-k"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-l"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-m"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-n"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-o"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-p"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-q"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-r"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-t"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-u"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-v"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-w"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-x"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
			<div class="item"><span class="icon-y"></span><a href="#" class="btn btn-primary">Ver proyecto</a></div>
		</div>
	</div>
@stop