@if (count($errors))

  <div class="form-group">

    <div class="alert alert-danger">

      <ul>

        @foreach ($erros->all() as $errors)

          <li>{{ $errors}}</li>

        @endforeach

      </ul>

    </div>

  </div>

@endif
