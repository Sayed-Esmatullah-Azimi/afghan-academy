<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">{{__('messages.navbar')}}</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav w-100">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('post')}}">{{__('messages.post')}}</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.index')}}">{{__('messages.admin')}}</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about">{{__('messages.about')}}</a>
      </li>
      <li class="ml-auto">
        <select name="language" id="language" class="form-control" style="width: auto; text-align: right;">
          <option value="" disabled selected>Languages</option>
          <option value="en">English</option>
          <option value="fs">Persian</option>
        </select>
      </li>
    </ul>
  </div>
</nav>

@yield('content')

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function () {
        $('#language').change(function () {
            let language = this.value;
            window.location.href = "{{route('welcome')}}" + '?language=' + language;
        });
    });
</script>
</body>
</html>



