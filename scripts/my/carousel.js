


 carouselId ="";
 carouselContainer ="";
 carouselElemNb ="";
 carouselSelector ="";
var carouselWidth;
var carouselHeight;
var carouselChilds;
var carouselNav;
var carouselNavHeight;
var carouselAutoPlay;
var carouselTransition="swing";
var carouselEasing="jswing";
var carouselSpeed=800;
var currentSlide=1;
var carouselThumbsWidth;
var showThumbsStatus = false;
var thumbsMaxVisible = 5; // Nombre de miniatures visibles sur l'écran ;



function MyCarousel(n,c,nb,s,args)
{

    carouselId=n;
    carouselContainer=c;
    carouselElemNb=nb;
    extractArgs(args);
    carouselSelector=s;
    initCarouselEvents();
    getCarouselWidth();
    getCarouselHeight();
    getCarouselChilds();
    setContainerWidth();
    initThumbs(); //  (portfolio)

    if ((carouselAutoPlay== true) && (carouselChilds > 1))
    {
       var timer = setInterval(manageCarouselAutoPlay, 4000);
        jQuery(n).hover(function(ev){
            clearInterval(timer);
        }, function(ev){
            timer = setInterval( manageCarouselAutoPlay, 4000);
        });
    }
}


function initCarouselEvents()
{
    jQuery("a.carousel-nav-prev-link").click(function(evt){evt.preventDefault(); moveCarousel('prev',1)});
    jQuery("a.carousel-nav-next-link").click(function(evt){evt.preventDefault(); moveCarousel('next',1)});
    jQuery("#carousel.cat-master-b").mouseenter(function(evt){ showCarouselDesc(true)});
    jQuery("#carousel.cat-master-b").mouseleave(function(evt){ showCarouselDesc(false)});

}


function manageCarouselAutoPlay()
{
    if (currentSlide < carouselChilds)
    moveCarousel('next',1) ;
    else if (currentSlide >= carouselChilds)
    moveCarousel('prev',carouselChilds-1);
}

function moveCarousel(a,r)
{

    if(a=="prev")
    {
        jQuery(carouselId + ' > .carousel-container').animate(
        {
            left: '+='+ (getCarouselWidth() * r),
            transition : carouselTransition,
            opacity: '100%' 
        }, carouselSpeed , carouselEasing);
        currentSlide = currentSlide - r;
        manageThumbsCurrentStat("#carousel-thumb-"+currentSlide,'prev');
    }

    if(a=="next")
    {
        jQuery(carouselId + ' > '+ carouselContainer).animate(
        {
            left: '-=' + (getCarouselWidth() * r),
            transition : carouselTransition
        },  carouselSpeed , carouselEasing);
        currentSlide = currentSlide + r;
        manageThumbsCurrentStat("#carousel-thumb-"+currentSlide,'next');
    }

    
    manageCarouselNav();
}


function getCarouselChilds()
{

    carouselChilds = jQuery( carouselId +" >" + carouselContainer + " " +carouselSelector).length;
    return carouselChilds;

}

function getCarouselWidth()
{
    carouselWidth = jQuery(carouselId).width();
    return carouselWidth;
}

function getCarouselHeight()
{
    carouselHeight = jQuery(carouselId).height();
    initCarouselNav();
}

function setContainerWidth()
{
    var containerWidth = carouselWidth * getCarouselChilds();
    jQuery( carouselId +" >" + carouselContainer).css( "width", carouselWidth * carouselChilds);
}


function initCarouselNav()
{
    carouselNavHeight = jQuery( carouselId + " .carousel-nav-links").height();
    var posNav = ((carouselHeight / 2) + (carouselNavHeight)); 
    jQuery(carouselId+" .carousel-nav-links").css({"marginTop": "-"+posNav+"px"});

    manageCarouselNav();
}


function manageCarouselNav()
{

    if (currentSlide == 1  && getCarouselChilds() != 1)
    {
        jQuery(carouselId+" a.carousel-nav-prev-link").hide();
        jQuery(carouselId+" a.carousel-nav-next-link").show();
    }

    else if (currentSlide == getCarouselChilds() && getCarouselChilds() != 1)
    {
        jQuery(carouselId+" a.carousel-nav-next-link").hide();
        jQuery(carouselId+" a.carousel-nav-prev-link").show();
    }

     else if ( getCarouselChilds() != 1)
    {
        jQuery(carouselId+" a.carousel-nav-prev-link").show();
        jQuery(carouselId+" a.carousel-nav-next-link").show();
    }

    else if ( getCarouselChilds() == 0)
    {
        jQuery(carouselId+" a.carousel-nav-prev-link").hide();
        jQuery(carouselId+" a.carousel-nav-next-link").hide();
    }

    else
    {
        jQuery(carouselId+" a.carousel-nav-prev-link").hide();
        jQuery(carouselId+" a.carousel-nav-next-link").hide();
    }
    
}



function showCarouselDesc(f)
{
    if (f==true)
   jQuery(" .carousel-content").fadeIn("slow");
    else
    {
    $(".carousel-content").fadeOut("slow");
    }
}


// GESTION DU CAROUSEL DE MINIATURES


function initThumbs()
{

    setTimeout(showThumbs, 300);
    initThumbsEvents();
    getCarouselThumbsWidth();
    manageThumbsCurrentStat("#carousel-thumb-"+currentSlide);
}


function initThumbsEvents()
{
    jQuery("a#my_carousel_showThumbs").click(function(evt){evt.preventDefault(); showThumbs()});
    jQuery(".carousel-thumbs-item .image").click(function(evt){evt.preventDefault(); dispatchThumbsEvent(this)});
}


function getCarouselThumbsWidth()
{
    carouselWidth = jQuery(carouselId + " .carousel-thumbs-container .carousel-thumbs-item").width();
    return carouselWidth;
}

function showThumbs()
{
    if(showThumbsStatus==false)
    {
        jQuery(carouselId + ' > .carousel-thumbs-wrapper').animate(
        {
            top: '+=127',
            transition : carouselTransition
        },  carouselSpeed/1.5,carouselEasing
        );

     showThumbsStatus =true;
    }

    else if(showThumbsStatus==true)
    {
        jQuery(carouselId + ' > .carousel-thumbs-wrapper').animate(
        {
            top: '-=127',
            transition : carouselTransition
        },  carouselSpeed/1.5,carouselEasing
        );

     showThumbsStatus =false;
    }
}


function dispatchThumbsEvent(t)
{
    targetId = $(t).attr('id');

    var lastChar = targetId.substr(targetId.length-1);   
    var moveIndex;

    if (lastChar > currentSlide)
    {
        moveIndex = lastChar - currentSlide;
        moveCarousel('next', moveIndex);

    }

    if (lastChar < currentSlide)
    {
        moveIndex = currentSlide - lastChar ;
        moveCarousel('prev',moveIndex)

    }

     if (lastChar == currentSlide)
    {

    }


}

var previousIndex='';

function manageThumbsCurrentStat(id,d)
{

    var currentIndex = id.substr(id.length-1);

    jQuery(".carousel-thumbs-item .image").removeClass('current');
    jQuery(id).addClass('current');
        // alert(currentSlide+"/"+thumbsMaxVisible+"  d:"+d);



    if(currentSlide >= thumbsMaxVisible)
    {
        console.log('prout');
        moveThumbsCarousel(d, 1);
    }
    
    else if ((previousIndex >= (thumbsMaxVisible)) && (d == "prev"))
    {

        var moveIndex = previousIndex - currentIndex ;
        if (moveIndex == 3)
        {
            moveIndex =2;
        }
        moveThumbsCarousel(d, moveIndex);
    }


    previousIndex = id.substr(id.length-1);

}


function moveThumbsCarousel(d,r)
{
    if(d=="prev")
    {

        $(carouselId + '  .carousel-thumbs-container ').animate(
        {
            left: '+='+ (getCarouselThumbsWidth() * r),
            transition : carouselTransition
        },  carouselSpeed , carouselEasing
        ).delay(800);

    }

    if(d=="next")
    {  
        jQuery(carouselId + ' .carousel-thumbs-container ').animate(
        {
            left: '-=' + (getCarouselThumbsWidth() * r),
            transition : carouselTransition
        },  carouselSpeed , carouselEasing
        ).delay(800);

    }

}

function extractArgs(args)
{
    carouselAutoPlay = args[0];
}

