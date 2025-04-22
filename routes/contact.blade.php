@extends("template")
@section("content")
     <h1>Welcome Home</h1>

     <form action="/contact" methode="get">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br> 
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <input type="submit" value="Submit">
</form>   
@endsection