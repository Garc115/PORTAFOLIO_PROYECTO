<p>ID del ArrestedBelonging: {{ $arrestedFault->id }}</p>


<form action="{{ route('updateArrestedBelonging', $arrestedFault->id ) }}" method="POST">
    @csrf
    @method('PUT')   
    @include('arrested_belongings.register')

    <button type="submit">Actualizar</button>
</form>