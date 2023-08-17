<!doctype html>
<html>
<head>
  <title>TransmissionWave</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
  <link href="{{ asset('assets/prism.css') }}" rel="stylesheet" />
  @vite('resources/css/app.css')
</head>
<body>
   <div class="relative w-full min-h-screen bg-[#283747]">
   		<div class="absolute top-0 left-0 w-full min-h-screen flex">
   		   <div class="lg:w-[30%] xl:w-[30%] 2xl:w-[20%] min-h-screen bg-[#0B2949] border-r-[1px] border-white flex flex-col">
   		   		<div class="w-full flex justify-center py-5">
					<div class="lg:w-[150px] lg:h-[150px] xl:w-[200px] xl:h-[200px] 2xl:w-[250px] 2xl:h-[250px] bg-white rounded-full flex items-center justify-center">
						<img src="{{ asset('images/profileImage.png') }}" />
					</div>
				</div>
				<div class="w-full h-full flex-1">
				  @include("lists/index",['Posts'=>$Posts,'id'=>$id]);
				</div>
   		   </div>
   		   <div class="lg:w-[70%] xl:w-[70%] 2xl:w-[80%] max-h-screen overflow-y-scroll">
   		   	  <div class="w-full py-10 flex items-center lg:px-10 lg:text-2xl xl:px-16 xl:text-3xl text-white">
   		   	  	<span>{{ $content->title }}</span>
   		   	  </div>
   		   	  <div class="w-full py-4 space-y-2 lg:px-10 lg:text-base xl:text-lg xl:px-16 2xl:text-xl text-white formatting">
   		   	  	<?php echo($content->body); ?>
   		   	  	<pre style="border-radius: 5px;"><code class="language-css">p { color: red }</code></pre>
   		   	  </div>
   		   </div>
   		</div>
   </div>
   <!-- Google tag (gtag.js) -->
   	<script async src="https://www.googletagmanager.com/gtag/js?id=G-3YTN5VCEQ1"></script>
		<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());
  		gtag('config', 'G-3YTN5VCEQ1');
		</script>
		<script src="{{ asset('assets/prism.js') }}"></script>
</body>
</html>