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
		<div id="ClOSEBTN__CONTAINER"
			class="absolute top-0 left-0 w-full min-h-screen flex items-center justify-center z-10">
			<div
				class="w-[98%] h-[900px] border-[1px] bg-[#283747] border-white rounded-md">
				<div class="w-full flex justify-end p-3">
					<svg id="ClOSEBTN" xmlns="http://www.w3.org/2000/svg" width="50px"
						height="50px" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd"
							clip-rule="evenodd"
							d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM8.96963 8.96965C9.26252 8.67676 9.73739 8.67676 10.0303 8.96965L12 10.9393L13.9696 8.96967C14.2625 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L13.0606 12L15.0303 13.9696C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73742 15.3232 9.26254 15.3232 8.96965 15.0303C8.67676 14.7374 8.67676 14.2625 8.96965 13.9697L10.9393 12L8.96963 10.0303C8.67673 9.73742 8.67673 9.26254 8.96963 8.96965Z"
							fill="#fff" />
                            </svg>
				</div>
				<div class="w-full flex justify-center">
					<div class="w-[250px] h-[250px] rounded-full bg-white my-2">
						<img src="{{ asset('images/profileImage.png') }}" />
					</div>
				</div>
				<div class="w-full h-[535px] justify-center my-5">
					<div class="w-full h-full">
						<ul class="w-full h-full  overflow-y-scroll">
							@foreach($Posts as $Post) @if($Post->status=="PUBLISHED")
							<a href="{{ url('/?post='.$Post->id) }}">
								<li
								class="w-full py-4 px-16 text-2xl Kanit mt-1 cursor-pointer {{ $id==intval($Post->id)? 'bg-[#2E86C1] text-white' : 'bg-white' }} hover:bg-[#2E86C1] hover:text-white">{{
									$Post->title }}</li>
							</a> @endif @endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="absolute top-0 left-0 w-full min-h-screen z-0"></div>
	</div>
	<!-- Google tag (gtag.js) -->
	<script async
		src="https://www.googletagmanager.com/gtag/js?id=G-3YTN5VCEQ1"></script>
	<script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'G-3YTN5VCEQ1');
                </script>

	<script src="{{ asset('assets/prism.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/JQuery.js') }}"></script>
	<script>
            $(document).ready(function(){
                $('#ClOSEBTN').on('click',function(){
                    $('#ClOSEBTN__CONTAINER').css({
                        'display':'none'
                    })
                })
            })
        </script>
</body>
</html>