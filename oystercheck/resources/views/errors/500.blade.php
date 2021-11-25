<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
     <meta charset="utf-8" />
         <title>{{ config('app.name', 'Oysterchecks') }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Oysterchecks Comprehensive and Exceptional background checks, KYC & AML compliance Solutions</" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('/assets/images/favicon.png')}}">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('/assets/assets/css/dashlite.css?ver=2.2.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('/assets/assets/css/theme.css?ver=2.2.0')}}">
</head>

<body class="nk-body npc-default pg-error">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle wide-md mx-auto">
                        <div class="nk-block-content nk-error-ld text-center">
                           <div class="wide-xs mx-auto">
                                <h3 class="nk-error-title">Oops! Why you’re here?</h3>
                                <p class="nk-error-text">We are very sorry for inconvenience. It looks like you’re try to access a page that either has errors.</p>
                                <a href="{{route('index')}}" class="btn btn-lg btn-primary mt-2">Back To Home</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('/assets/assets/js/bundle.js?ver=2.2.0')}}"></script>
    <script src="{{asset('/assets/assets/js/scripts.js?ver=2.2.0')}}"></script>


</html>