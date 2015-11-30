<!DOCTYPE html>
<html>
	<body>
		<div class="container">
		
			{!! Form::open(array('url' => 'somas')) !!}
				{!!	Form::number('numero1', '0',array('id' => 'numero1')); !!}
				{!!	Form::number('numero2', '0',array('id' => 'numero2')); !!}
				{!! Form::submit('calcular',array('id' => 'calcular')) !!}
			{!! Form::close() !!}
			
		</div>
	</body>
</html>
