<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Template for Bootstrap</title>

    <!--
    //this was original link
    https://getbootstrap.com/docs/4.0/examples/blog/
    I only had to the end of the .css not the next two lines.
    ???what will change if you remove the next two lines???
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


    <!--
    integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmL1dC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
    crossorigin="anonymous"> -->

    <!-- Custom styles for this template
    ???JMS: I still need to reference the css. The next line is how it was set up.
    <link href="blog.css" rel="stylesheet">
-->
    <link href="/css/blog.css" rel="stylesheet">

  </head>


  <body>

    @include ('layouts.nav')


    <div class="blog-header">

      <div class="container">

        <h1 class="blog-title">James Scherer</h1>

        <p class="lead blog-description">A half working website to show my ability to learn new technologies</p>

      </div>

    </div>

    <div class="container">

      <div class="row">

        @yield ('content')

        @include ('layouts.sidebar')

      </div>

    </div>

    @include ('layouts.footer')


  </body>


</html>
