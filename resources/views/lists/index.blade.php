<ul class="w-full h-[95%] overflow-y-scroll">
   @foreach($Posts as $Post)
   		@if($Post->status=="PUBLISHED")
   			<a href="{{ url('/?post='.$Post->id) }}">
   				<li class="w-full py-4 Kanit lg:px-4 xl:px-16 text-black flex items-center lg:text-lg xl:text-lg mt-1 cursor-pointer {{ $id==intval($Post->id)? 'bg-[#2E86C1] text-white' : 'bg-white' }} hover:bg-[#2E86C1] hover:text-white">{{ $Post->title }}</li>
   			</a>
   		@endif
   @endforeach
</ul>



