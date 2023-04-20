<form action="{{ url('/pet'.$pet->id) }}" method="POST">
    @csrf
    {{ method_field('PATH') }}
    @include('pet.form');


 
</form>