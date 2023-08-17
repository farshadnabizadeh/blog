<ul class="w-full h-full">
   @foreach($Posts as $Post)
   		@if($Post->status=="PUBLISHED")
   			<a href="{{ url('/?post='.$Post->id) }}">
   				<li class="w-full py-4 Kanit px-16 text-black flex items-center text-lg mt-1 cursor-pointer {{ $id==intval($Post->id)? 'bg-[#2E86C1] text-white' : 'bg-white' }} hover:bg-[#2E86C1] hover:text-white">{{ $Post->title }}</li>
   			</a>
   		@endif
   @endforeach
</ul>



