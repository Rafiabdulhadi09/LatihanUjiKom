<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/style_login.css') }}">
    <!--Stylesheet-->
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="{{ route('user.login') }}" method="POST">
        @csrf
        <h3>Login Here</h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                    @endforeach
                </ul>
            </div>
        @else
            
        @endif

        <label for="email">Email</label>
        <input type="text" value="{{ old('email') }}" name="email" placeholder="Email or Phone" id="email">

        <label for="password">Password</label>
        <input type="password" value="{{ old('password') }}" name="password" placeholder="Password" id="password">

        <button type="submit">Log In</button>
    </form>
</body>
</html>
