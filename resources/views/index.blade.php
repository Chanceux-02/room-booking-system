@include('partials._header')

<form action="{{route('logout')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-primary">Log out</button>
</form>
<h1>Hello World</h1>

@include('partials._footer')
 