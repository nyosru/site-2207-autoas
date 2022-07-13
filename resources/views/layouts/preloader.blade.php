    <style>
        #loader2 {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(255, 255, 255, .95);
            z-index: 50000
        }

        #preloader_4 {
            position: relative;
            margin-left: 50%;
            margin-top: 20%
        }

        #preloader_4 span {
            position: absolute;
            width: 20px;
            height: 20px;
            background: #3498db;
            opacity: .5;
            border-radius: 20px;
            -webkit-animation: preloader_4 1s infinite ease-in-out;
            -moz-animation: preloader_4 1s infinite ease-in-out;
            animation: preloader_4 1s infinite ease-in-out
        }

        #preloader_4 span:nth-child(2) {
            left: 20px;
            -webkit-animation-delay: .2s;
            -moz-animation-delay: .2s;
            animation-delay: .2s
        }

        #preloader_4 span:nth-child(3) {
            left: 40px;
            -webkit-animation-delay: .4s;
            -moz-animation-delay: .4s;
            animation-delay: .4s
        }

        #preloader_4 span:nth-child(4) {
            left: 60px;
            -webkit-animation-delay: .6s;
            -moz-animation-delay: .6s;
            animation-delay: .6s
        }

        #preloader_4 span:nth-child(5) {
            left: 80px;
            -webkit-animation-delay: .8s;
            -moz-animation-delay: .8s;
            animation-delay: .8s
        }

        @-webkit-keyframes preloader_4 {
            0% {
                opacity: .3;
                -webkit-transform: translateY(0);
                box-shadow: 0 0 3px rgba(0, 0, 0, .1)
            }

            50% {
                opacity: 1;
                -webkit-transform: translateY(-10px);
                background: #f1c40f;
                box-shadow: 0 20px 3px rgba(0, 0, 0, .05)
            }

            100% {
                opacity: .3;
                -webkit-transform: translateY(0);
                box-shadow: 0 0 3px rgba(0, 0, 0, .1)
            }
        }

        @-moz-keyframes preloader_4 {
            0% {
                opacity: .3;
                -moz-transform: translateY(0);
                box-shadow: 0 0 3px rgba(0, 0, 0, .1)
            }

            50% {
                opacity: 1;
                -moz-transform: translateY(-10px);
                background: #f1c40f;
                box-shadow: 0 20px 3px rgba(0, 0, 0, .05)
            }

            100% {
                opacity: .3;
                -moz-transform: translateY(0);
                box-shadow: 0 0 3px rgba(0, 0, 0, .1)
            }
        }

        @keyframes preloader_4 {
            0% {
                opacity: .3;
                transform: translateY(0);
                box-shadow: 0 0 3px rgba(0, 0, 0, .1)
            }

            50% {
                opacity: 1;
                transform: translateY(-10px);
                background: #f1c40f;
                box-shadow: 0 20px 3px rgba(0, 0, 0, .05)
            }

            100% {
                opacity: .3;
                transform: translateY(0);
                box-shadow: 0 0 3px rgba(0, 0, 0, .1)
            }
        }

    </style>

    <div id="loader2" {{-- style="display: none;" --}}>
        <div id="preloader_4">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    @section('js')
        @parent

        <script src="{{ asset('assets/js1/preloader.js') }}"></script>

        {{-- <script type="text/javascript">
            $().ready(function() {
                $('#loader2').hide();
            });
        </script> --}}
    @endsection
