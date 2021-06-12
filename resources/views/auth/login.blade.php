<!DOCTYPE html>
<html>

<head>
    <title>Workkit</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto@100;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" >   
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<style>
        .body-bg {
            background-image: url("/images/bg.png");
            background-repeat: no-repeat;
            background-size: 100% 100%;
        }
    </style>

<body class="body-bg" style="font-family:Montserrat">
<div class="w-full h-screen flex items-center justify-center">
   
                    <form method="POST" class="w-full md:w-1/3 bg-white rounded-lg border-solid border-t-4 border-yellow-500 p-6 my-2" action="{{ route('login') }}">
                        @csrf
                        <div class="flex font-bold justify-center mt-6">
                             <img class="h-20 w-20" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
                         </div>
                         <h2 class="text-3xl text-center text-gray-700 mb-4">Login Form</h2>

                     <div class="px-12 pb-10">
                         <div class="w-full mb-2">
                            <div class="flex items-center">
                               
                                <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-user'></i>
                                <input id="email" type="email" placeholder="Username" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 
                            </div>
                        </div>

                        <div class="w-full mb-2">
                            <div class="flex items-center">
                        <i class='ml-3 fill-current text-gray-400 text-xs z-10 fas fa-lock'></i>
                                
                                <input id="password" type="password"  placeholder="Password" class="-mx-6 px-8 w-full border rounded px-3 py-2 text-gray-700 focus:outline-none form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input text-gray-700" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-gray-700" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit"  class="w-full py-2 rounded-full bg-yellow-600 text-gray-100  focus:outline-none">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-gray-700" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    </form>
            
     
    
</div>
<div class="items-center absolute inset-x-0 bottom-0 h-16 max-w-lg mx-auto text-center mt-12 mb-6 ...">
        <p class="text-gray-700">Don't have an account? <a href="{{ route('register') }}" class="font-bold hover:underline">Sign up</a>.</p>
    </div>
</body>

</html>