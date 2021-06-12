@extends('home')
@section('body')

<div class="w-full border shadow bg-white">
	<div class="flex">
      	<!-- Sidebar / channel list -->
          
        <div class="bg-gray-300 text-purple-lighter w-1/5 pb-6 hidden md:block">
            <h1 class="text-white text-xl mb-2 mt-3 px-4 font-sans flex justify-between">
              	<span>Tailwind CSS</span>
              	<svg class="h-6 w-6 text-purple-lightest fill-current" viewBox="0 0 32 32" >
                    <g id="surface1">
                        <path style=" " d="M 16 3 C 14.894531 3 14 3.894531 14 5 C 14 5.085938 14.019531 5.167969 14.03125 5.25 C 10.574219 6.132813 8 9.273438 8 13 L 8 22 C 8 22.566406 7.566406 23 7 23 L 6 23 L 6 25 L 13.1875 25 C 13.074219 25.316406 13 25.648438 13 26 C 13 27.644531 14.355469 29 16 29 C 17.644531 29 19 27.644531 19 26 C 19 25.648438 18.925781 25.316406 18.8125 25 L 26 25 L 26 23 L 25 23 C 24.433594 23 24 22.566406 24 22 L 24 13.28125 C 24 9.523438 21.488281 6.171875 17.96875 5.25 C 17.980469 5.167969 18 5.085938 18 5 C 18 3.894531 17.105469 3 16 3 Z M 15.5625 7 C 15.707031 6.988281 15.851563 7 16 7 C 16.0625 7 16.125 7 16.1875 7 C 19.453125 7.097656 22 9.960938 22 13.28125 L 22 22 C 22 22.351563 22.074219 22.683594 22.1875 23 L 9.8125 23 C 9.925781 22.683594 10 22.351563 10 22 L 10 13 C 10 9.824219 12.445313 7.226563 15.5625 7 Z M 16 25 C 16.5625 25 17 25.4375 17 26 C 17 26.5625 16.5625 27 16 27 C 15.4375 27 15 26.5625 15 26 C 15 25.4375 15.4375 25 16 25 Z "></path>
                    </g>
				</svg>
          	</h1>
          	<div class="flex items-center mb-6 px-4">
          		<span class="bg-green rounded-full block w-2 h-2 mr-2"></span>
              	<span class="text-purple-lightest">{{Auth::user()->full_name}}</span>
        	</div>
		
          	<div class="px-4 mb-2 font-sans">Channels</div>
			  @foreach($chatroom as $chatrooms)
          	<div class="bg-teal-dark mb-6 py-1 px-4 text-white font-semi-bold "><span class="pr-1 text-grey-light">#</span> {{$chatrooms->name}}</div>
			  @endforeach
			  
          	
          	<div class="px-4 mb-3 font-sans">Direct Messages</div>
          
            <div class="flex items-center mb-3 px-4">
                 <span class="bg-green rounded-full block w-2 h-2 mr-2"></span>
                 <span class="text-purple-lightest">{{Auth::user()->full_name}} <i class="text-grey text-sm">(me)</i></span>
          	</div>
          
          
           
          
        </div>
      
      	<!-- Chat content -->
      	<div class="w-full flex flex-col">
          	<!-- Top bar -->
          	<div class="border-b flex px-6 py-2 items-center">
              	<div class="flex flex-col">
                  	<h3 class="text-grey-darkest text-md mb-1 font-extrabold">#general</h3>
                  	<div class="text-grey font-thin text-sm">
                  		Chit-chattin' 
                  	</div>
              	</div>
              	<div class="ml-auto hidden md:block">
                  	<input type="search" placeholder="Search" class="border border-grey rounded-lg p-2"/>
              	</div>
          	</div>
          
			<!-- Chat messages -->
          	<div class="px-6 py-4 flex-1 overflow-scroll-x">
              <!-- A message -->
			  @foreach($conversation as $conversations)
              	<div class="flex items-start mb-4">
				
                  <img src="{{ Avatar::create($conversations->name)->toBase64() }}" class="w-8 mr-4 ..."/>
                  	<div class="flex flex-col">
					
                      	<div class="flex items-end">
                      		<span class="font-bold text-md mr-2 font-sans">{{$conversations->name}}</span>
                      		<span class="text-grey text-xs font-light">{{$conversations->created_at}}</span>
                      	</div>
                    	<p class="font-light text-md text-grey-darkest pt-1">{{$conversations->content}}</p>
                        
                  	</div>
                     
              	</div>
				  @endforeach
                  
              
               
              	<!-- Ignore -->
              	<br><br><br><br><br><br><br><br><br><br><br>
              
            </div>
			<form action="submit" method="POST">
			@csrf
          
          	<div class="flex m-6 rounded-lg border-2 border-grey overflow-hidden">
              <span class="text-3xl text-grey px-3 border-r-2 border-grey">+</span>
			  <input type = "hidden" name="id" value = "{{$conversations->id+1}}">
			  <input type = "hidden" name="name" value = "{{Auth::user()->full_name}} ">
			  <input type = "hidden" name="sender_id" value = "{{Auth::user()->id}} ">
			  <input type = "hidden" name="chat_room_id" value = "1">
              <input type="text" name="content" class="w-full px-4" placeholder="Message to #general"/>
			  <button type="submit">Send</button>
          	</div>
			</form>
		</div>
  	</div>
</div>
@endsection