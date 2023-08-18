<!doctype html>
<html>
<head>
    <title>TransmissionWave</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css') }}">
    <link href="{{ asset('assets/prism.css') }}" rel="stylesheet" />
    <link href="{{ asset('style.css') }}" rel="stylesheet" />
    @vite('resources/css/app.css')
</head>
<body>
    <div class="relative w-full min-h-screen bg-[#283747]">
        <div id="ClOSEBTN__CONTAINER" class="absolute top-0 left-0 w-full min-h-screen hidden items-center justify-center z-10">
            <div class="w-[98%] border-[1px] bg-[#283747] border-white rounded-md">
                <div class="w-full flex justify-end p-3">
                    <svg id="ClOSEBTN" xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12ZM8.96963 8.96965C9.26252 8.67676 9.73739 8.67676 10.0303 8.96965L12 10.9393L13.9696 8.96967C14.2625 8.67678 14.7374 8.67678 15.0303 8.96967C15.3232 9.26256 15.3232 9.73744 15.0303 10.0303L13.0606 12L15.0303 13.9696C15.3232 14.2625 15.3232 14.7374 15.0303 15.0303C14.7374 15.3232 14.2625 15.3232 13.9696 15.0303L12 13.0607L10.0303 15.0303C9.73742 15.3232 9.26254 15.3232 8.96965 15.0303C8.67676 14.7374 8.67676 14.2625 8.96965 13.9697L10.9393 12L8.96963 10.0303C8.67673 9.73742 8.67673 9.26254 8.96963 8.96965Z" fill="#fff" />
                    </svg>
                </div>
                <div class="w-full flex justify-center">
                    <div class="w-[150px] h-[150px] rounded-full bg-white my-2">
                        <img src="{{ asset('images/profileImage.png') }}" />
                    </div>
                </div>
                <div class="w-full h-[400px] justify-center my-5">
                    <div class="w-full h-full">
                        <ul class="w-full h-full  overflow-y-scroll">
                            @foreach($Posts as $Post)
                            @if($Post->status=="PUBLISHED")
                            <a href="{{ url('/?post='.$Post->id) }}">
                                <li class="w-full py-4 px-16 text-base Kanit mt-1 cursor-pointer {{ $id==intval($Post->id)? 'bg-[#2E86C1] text-white' : 'bg-white' }} hover:bg-[#2E86C1] hover:text-white">{{
									$Post->title }}</li>
                            </a>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-0 left-0 w-full min-h-screen z-0">
            <div class="sticky top-0 w-full">
                <div class="rotate w-[50px] h-[50px] p-2 m-5 rounded-full flex justify-center items-center bg-white">
                    <svg id="OPENBTN" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40px" height="40px" viewBox="0 -0.5 21 21" version="1.1">

                        <title>menu_navigation_grid [#1529]</title>
                        <desc>Created with Sketch.</desc>
                        <defs>

                        </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -200.000000)" fill="#512E5F">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M60.85,51 L57.7,51 C55.96015,51 54.55,52.343 54.55,54 L54.55,57 C54.55,58.657 55.96015,60 57.7,60 L60.85,60 C62.58985,60 64,58.657 64,57 L64,54 C64,52.343 62.58985,51 60.85,51 M49.3,51 L46.15,51 C44.41015,51 43,52.343 43,54 L43,57 C43,58.657 44.41015,60 46.15,60 L49.3,60 C51.03985,60 52.45,58.657 52.45,57 L52.45,54 C52.45,52.343 51.03985,51 49.3,51 M60.85,40 L57.7,40 C55.96015,40 54.55,41.343 54.55,43 L54.55,46 C54.55,47.657 55.96015,49 57.7,49 L60.85,49 C62.58985,49 64,47.657 64,46 L64,43 C64,41.343 62.58985,40 60.85,40 M52.45,43 L52.45,46 C52.45,47.657 51.03985,49 49.3,49 L46.15,49 C44.41015,49 43,47.657 43,46 L43,43 C43,41.343 44.41015,40 46.15,40 L49.3,40 C51.03985,40 52.45,41.343 52.45,43" id="menu_navigation_grid-[#1529]">

                                    </path>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <div id="TABLETCONTENT" class="w-full h-[84vh] overflow-y-scroll">
				<h1 class="px-5 pt-10 pb-5 text-3xl text-white">{{ $content->title }}</h1>
				<div class="px-5 text-xl text-white">
					<?php echo($content->body); ?>
					<pre style="border-radius: 5px;display:flex;justify-content: start;">
						<code class="language-css">p { color: red }</code>
					</pre>
				</div>
            </div>
        </div>
    </div>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3YTN5VCEQ1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-3YTN5VCEQ1');

    </script>

    <script src="{{ asset('assets/prism.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/JQuery.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#ClOSEBTN').on('click', function() {
                $('#ClOSEBTN__CONTAINER').css({
                    'display': 'none'
                })
                $('.rotate').css({
                    'display': 'flex'
                })
				$('#TABLETCONTENT').css({
					'display':'inline-block'
				})
            })
            $('#OPENBTN').on('click', function() {
                $('#ClOSEBTN__CONTAINER').css({
                    'display': 'flex'
                })
                $('.rotate').css({
                    'display': 'none'
                })
				$('#TABLETCONTENT').css({
					'display':'none'
				})
            })
        })

    </script>
</body>
</html>
