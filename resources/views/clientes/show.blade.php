<h1>{{ $cliente->nombre }} {{ $cliente->apellido }}</h1>
<p><strong>Email:</strong> {{ $cliente->email }}</p>
<p><a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a></p>