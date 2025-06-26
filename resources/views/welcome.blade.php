    @extends('index')
    @push('style')
     <title>Prome</title>
    @endpush
    @section('main-contents')

     <h1>Hey, I am Prome,</h1>
     <img src="{{ asset('asset/image/image.png') }}" alt="Photo of X">
     <div class="info">
         <h2>About Me</h2>
         <p>I’m a student :</p>
         <ul>
             <li>Computer Science & Engineering</li>
             <li>Political Science</li>
             <li>Data Science</li>
         </ul>
         <p>Let's connect and create something great together!</p>
     </div>
    @endsection