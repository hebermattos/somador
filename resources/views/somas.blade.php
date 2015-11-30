<!DOCTYPE html>
<html>
	<strong>Resultados</strong>
	@foreach ($array_somas as $soma)
		<span>{{ $soma->resultado }}</span>
	@endforeach
</html>
