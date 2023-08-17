<!doctype html>
<html>
<head>
  <title>TransmissionWave</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
  @vite('resources/css/app.css')
</head>
<body>
   <div class="relative w-full min-h-screen bg-[#283747]">
   		<div class="absolute top-0 left-0 w-full min-h-screen">
   		   <div class="w-[20%] min-h-screen bg-[#0B2949] border-r-[1px] border-white flex flex-col">
   		   		<div class="w-full flex justify-center py-5">
					<div class="w-[50%] h-[50%] bg-white rounded-full">
						<img src="{{ asset('images/profileImage.png') }}" />
					</div>
				</div>
				<div class="w-full h-full flex-1">
				  @include("lists/index",['Posts'=>$Posts,'id'=>$id]);
				</div>
   		   </div>
   		   <div class="w-[80%] h-full"></div>
   		</div>
   </div>
</body>
</html>