

<script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
<script src="{{asset('frontend/assets/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/isotope.js')}}"></script>
<script src="{{asset('frontend/assets/js/owl.js')}}"></script>
<script src="{{asset('frontend/assets/js/appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/wow.js')}}"></script>
<script src="{{asset('frontend/assets/js/scrollbar.js')}}"></script>
<script src="{{asset('frontend/assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.polyglot.language.switcher.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/parallax-scroll.js')}}"></script>
<script src="{{asset('frontend/assets/js/knob.js')}}"></script>

<script src="{{asset('frontend/assets/js/script.js')}}"></script>

<script>
    $(document).ready(function () {
            $('.add-to-news-btn').click(function (e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var news_id = $(this).closest('.news_data').find('.news_id').val();
                //alert(news_id);
                $.ajax({
                    url:"{{route('addtonews.status')}}",
                    method: "POST",
                    data: {
                        _token:'{{csrf_token()}}',
                        'email': news_id,
                    },
                    success: function (response) {
                        if(response.condition == 'no'){
                            alertify.set('notifier','position','bottom-right');
                            alertify.error(response.status);
                            $('.news_id').val('');
                        }else{
                            alertify.set('notifier','position','bottom-right');
                            alertify.success(response.status);
                            $('.news_id').val('');
                        }
                       // alert(response.status)

                    }
                });
            });
        });
</script>




<script type="text/javascript">
    function setCookie(b, h, c, f, e) {
        var a;
        if (c === 0) {
            a = ""
        } else {
            var g = new Date();
            g.setTime(g.getTime() + (c * 24 * 60 * 60 * 1000));
            a = "expires=" + g.toGMTString() + "; "
        }
        var e = (typeof e === "undefined") ? "" : "; domain=" + e;
        document.cookie = b + "=" + h + "; " + a + "path=" + f + e
    }

    function getCookie(d) {
        var b = d + "=";
        var a = document.cookie.split(";");
        for (var e = 0; e < a.length; e++) {
            var f = a[e].trim();
            if (f.indexOf(b) == 0) {
                return f.substring(b.length, f.length)
            }
        }
        return ""
    }

    //Google provides this function
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: "fr",
            includedLanguages: "fr,en",
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
            autoDisplay: false
        }, "google_translate_element")
    }

    //Using jQuery
    $(document).ready(function() {


        $(".lang-select").on("change",function(){

            var theLang = jQuery(this).val();

                setCookie("googtrans", "/fr/"+theLang, 0, "/", "tunisiasails.com");
                setCookie("googtrans", "/fr/"+theLang, 0, "/");
                location.reload()


        });


        var googTrans = getCookie('googtrans');


    });

    function downloadJSAtOnload() {
        var i;
        var paths = new Array(
            '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'
        );
        for (i in paths) {
            if (typeof paths[i] !== 'string') {
                console.log(typeof paths[i]);
                continue;
            }
            var element = document.createElement("script");
            element.src = paths[i];
            document.body.appendChild(element);
        }
    }

    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>



    @yield('scripts')
