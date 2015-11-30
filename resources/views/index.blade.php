<!DOCTYPE html>
<html>
	<body>
		<div class="container">
		
			{!! Form::open(array('url' => 'soma')) !!}
				{!!	Form::number('numero1', '0'); !!}
				{!!	Form::number('numero2', '0'); !!}
				{!! Form::submit('calcular') !!}
			{!! Form::close() !!}
			
		</div>
	</body>
</html>
