<form action="{{ url('/Belonging') }}" method="POST">
    
    @csrf
    @include('arrested_belongings.register')

</form>