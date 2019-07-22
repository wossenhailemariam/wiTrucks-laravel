<!-- navbar -->
<div class="wrapper">

            <nav>
                <div class="menu-icon">
                   <i class="fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                  <a href="/wiTrucks-laravel/public"> <h1>░</h1><a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="/wiTrucks-laravel/public/our_services">Our Services</a></li>
                        <li><a href="/wiTrucks-laravel/public/careers">Careers</a></li>
                        <li><a href="/wiTrucks-laravel/public/contacts">Contacts</a></li>

                    </ul>
                </div>
                <div class="menu-icon">
                    <i class="fa-bars fa-2x"></i>
                </div>
            </nav>


<script type="text/javascript">
    // the menu toggle-button

    $(document).ready(function(){
        $(".menu-icon").on("click", function(){
            $("nav ul").toggleClass("showing");
        });
    });
    //scrolling effect
    $(window).on("scroll", function(){
        if($(window).scrollTop()){
            $('nav').addClass('black');
        }
        else{
            $('nav').removeClass('black');
        }
    })

</script>
