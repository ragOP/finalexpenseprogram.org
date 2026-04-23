<!DOCTYPE html>
<html lang="en">
    <head>
	
        <title>Assisted Benefits</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7, IE=EmulateIE9, IE=EDGE" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">

        <!-- Style -->
        <link href="./css/style.css" rel="stylesheet" media="all">

        <!-- Scripts -->
	<script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>

	<!-- Meta Pixel Code -->
        <script>
                !function(f,b,e,v,n,t,s)
                {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
                fbq('init', '492991182992172');
                fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=492991182992172&ev=PageView&noscript=1" /></noscript>
        <!-- End Meta Pixel Code -->
<script>
if (!document.querySelector('script[src*="callgrid.com"]')) {
  const script = document.createElement("script");
  script.src = "https://cdn.callgrid.com/callgrid.js";
  script.setAttribute(
    "data-organization-id",
    "cmme5xlyu03h607l4z0fm592m"
  );
  script.setAttribute(
    "data-campaign-source-id",
    "cmnhsnwvf031e07jzuinyqjmw"
  );
  script.async = true;
  document.head.appendChild(script);
}
</script>
    </head>
    <body>
        <div class="congratulation">
            <div class="title">Congratulations!</div>

            <p class="text-bold" style="margin-top:20px;">Make a quick <span class="text-style-italic text-selected-yellow">call</span> to claim your $1/day <span class="text-color-red">BURIAL BENEFIT!</span></p>

            <p class="text-style-italic font-size-24" style="margin-top:20px;">Hurry! Secure this benefit <span class="text-color-red">before time runs out...</span></p>

            <p class="timer text-color-red" style="margin-top:20px;">03:00</p>

            <p class="text-bold font-size-24" style="margin-top:20px;"> Tap below to get your burial benefit 👇</p>

            <a id="PrimaryNumber" href="tel:+18778947736" class="cta-btn lead" style="margin-top:30px;">
                <span>Call Now (877) 894-7736</span>
            </a>

            <div class="comment" style="margin-top:30px;">
                <span class="icon">
                    <img src="./img/comment.png" />
                </span>
                <span class="text text-selected-yellow">Mary stayed on the call for 15 minutes and received a $24,000 final expense benefit.</span>
            </div>
        </div>

        <!-- Scripts -->
        <script>
            (function(){
                var startTime = 3.00;
  
                var doneClass = "done";

                function startTimer(duration, display) {
                    var timer = duration, minutes, seconds;
                    var intervalLoop = setInterval(function () {
                        minutes = parseInt(timer / 60, 10)
                        seconds = parseInt(timer % 60, 10);
                        minutes = minutes < 10 ? "0" + minutes : minutes;
                        seconds = seconds < 10 ? "0" + seconds : seconds;
                        
                        for(var i=0;i<display.length;i++){
                            display[i].textContent = minutes + ":" + seconds;
                        }

                        if (--timer < 0) {
                            for(var i=0;i<display.length;i++){
                                display[i].classList.add(doneClass);
                                display[i].textContent = "DONE";
                            }
                            clearInterval(intervalLoop);
                        }
                    }, 1000);
                }

                var setMinutes = 60 * startTime;
                let display = document.querySelectorAll(".timer");

                if (display instanceof NodeList) {
                    startTimer(setMinutes, display);
                }
            })();
        </script>
    
        <script>
            (function(){
                let arTags = [
                    "Age",
                    "checking"
                ];

                $('.lead').click(function(ev) {
                    if (window.fbq) fbq('track', 'Lead');
                   
                    if (window._rgba_tags){
                        let oParams = new URLSearchParams(window.location.search);

                        arTags.forEach(function(param){
                            if (oParams.has(param)){
                                window._rgba_tags.push({
                                    type: "User",
                                    [param]: oParams.get(param)
                                });
                            }
                        });
                    }
                });
            })();
        </script>
    </body>
</html>
