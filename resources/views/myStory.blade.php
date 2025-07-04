@extends('index')
 @push('style')
     <title>My Story - Prome Portfolio</title>
     <style>
    body {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background-color: #222;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }

    header h1 {
      margin: 0;
    }

    nav {
      text-align: center;
      margin-top: 10px;
    }

    nav a {
      text-decoration: none;
      margin: 0 15px;
      color: #f4f4f4;
    }

    .container {
      max-width: 900px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .post {
      background-color: white;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.1);
    }

    .post h2 {
      margin-top: 0;
    }

    .post p {
      line-height: 1.6;
    }

    footer {
      text-align: center;
      padding: 15px 0;
      background-color: #222;
      color: #aaa;
      margin-top: 50px;
    }
  </style>
 @endpush
 @section('main-contents')
<div class="container">
    <div class="post">
      <h2>My Journey into Web Development</h2>
      <p>
        I started learning HTML and CSS a few months ago, and I’ve been building cool stuff ever since. Here’s what I’ve learned...
      </p>
    </div>

    <div class="post">
      <h2>Top 5 Tips for CSS Beginners</h2>
      <p>
        CSS can be a bit tricky at first. Here are my top 5 tips to make your stylesheets shine and keep your layout in control.
      </p>
    </div>
  </div>
 @endsection