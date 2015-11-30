<!DOCTYPE html>
<html>
	<strong>Resultados</strong>
	@foreach ($somas as $soma)
		<span>{{ $soma->resultado }}</span>
	@endforeach
</html>
