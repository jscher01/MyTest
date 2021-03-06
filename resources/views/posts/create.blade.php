@extends ('layouts.master')

@section ('content')

  <div class="col-sm-8 blog-main">

  <h1>Contact us</h1>

  <hr>

  <form method="POST" action="/posts">

    <!-- for all forms include this call: -->
    {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Full Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>

  <div class="form-group">
    <label for="message">Message</label>
    <textarea id="message" name="message" class="form-control"></textarea>
    <!-- <p class="help-block">Example block-level help text here.</p> -->
  </div>

  <!-- <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div> -->

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  </div>

@endsection
