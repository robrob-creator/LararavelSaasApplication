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

                
                    <form method="POST"  class="w-full md:w-1/3 bg-white rounded-lg border-solid border-t-4 border-yellow-500 p-4 my-2" action="{{ route('register') }}">
                        @csrf
                        <div class="flex font-bold justify-center mt-6">
                             <img class="h-20 w-20" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/avatar.svg">
                         </div>
                         <h2 class="text-3xl text-center text-gray-700 mb-4">Register</h2>

                        <div class="px-12 pb-10">
                             <div class="w-full mb-2">
                                <div class="flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 text-gray-400 text-xs z-10 " fill="none" viewBox="0 0 24 24" stroke="gray">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                         </svg>
                  
                                              <input id="name" placeholder="Name" type="text" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                     
                      
                         <div class="w-full mb-2">
                            <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 text-gray-400 text-xs z-10 " fill="none" viewBox="0 0 24 24" stroke="gray">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                                <input id="email" placeholder="Email Address" type="email" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full mb-2">
                            <div class="flex items-center">         
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 text-gray-400 text-xs z-10" fill="none" viewBox="0 0 24 24" stroke="gray">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                           
                                <input id="password" placeholder="Password" type="password" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="w-full mb-2">
                            <div class="flex items-center">   
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-3 text-gray-400 text-xs z-10" viewBox="0 0 20 20" fill="gray">
                                 <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
  
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="-mx-6 px-8  w-full border rounded px-3 py-2 text-gray-700 focus:outline-none form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <br>
                                <button type="submit" class=" text-white w-full py-2 rounded-lg bg-yellow-600 text-gray-100  focus:outline-none">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
              
          
   
    
</div>
<div class="items-center absolute inset-x-0 bottom-0 h-16 max-w-lg mx-auto text-center mt-12 mb-6 ...">
        <p class="text-gray-700">Already have an Account? <a href="{{ route('login') }}" class="font-bold hover:underline">Login</a>.</p>
    </div>
</body>

</body>



