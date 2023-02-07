      
      //    	$(document).ready(function(){
		//     $('.count').prop('disabled', true);
   		// 	$(document).on('click','.plus',function(){
		// 		$('.count').val(parseInt($('.count').val()) + 1 );
    	// 	});
        // 	$(document).on('click','.minus',function(){
    	// 		$('.count').val(parseInt($('.count').val()) - 1 );
    	// 			if ($('.count').val() == 0) 
    	// 			{
    	// 			    add
		// 				$('.count').val(1);
		// 			}
    	//     	});
 		// });
        //  $(document).ready(function() {
		// 	$('.minus').click(function () {
		// 		var $input = $(this).parent().find('input');
		// 		var count = parseInt($input.val()) - 1;
		// 		count = count < 1 ? 1 : count;
		// 		$input.val(count);
		// 		$input.change();
		// 		return false;
		// 	});
		// 	$('.plus').click(function () {
		// 		var $input = $(this).parent().find('input');
		// 		$input.val(parseInt($input.val()) + 1);
		// 		$input.change();
		// 		return false;
		// 	});
		// });


        const plus=document.querySelector(".plus"),
              minus=document.querySelector(".minus"),
              num=document.querySelector(".num");

              let a =1;

             plus.addEventListener("click" , ()=>{
                a++;
                a=(a<10) ? + a : a;
                num.innerText = a;
                console.log(a);
             }) ;
             minus.addEventListener("click" , ()=>{
                if (a>1)
                {
                    a--;
                    a= ( a < 10 ) ?  +a : a;
                    num.innerText=a;
                }
             });

            function openNav() 
            {
                document.getElementById("mySidenav").style.width = "450px";
            }
            function closeNav() 
            {
                document.getElementById("mySidenav").style.width = "0";
            }

   
    //    Add To cart Method Start   
    
    var addItemId=0;
    function addToCart(item){
        addItemId +=1;
        var SelectedItem=document.createElement('div');
        SelectedItem.classList.add('cartImg');
SelectedItem.setAttribute('id',addItemId);
var img=document.createElement('img');
img.setAttribute('src',item.children[0].currentSrc );
var title =- document.getElementById
var cartItems=document.getElementById('title');
SelectedItem.append(img);
cartItems.append(SelectedItem);

    }
    
    //    Add To cart Method Start    
    

    //  Image Silder Method

    
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

                // SIMILAR PRODUCTS
                $('.owl-carousel').owlCarousel({
                    stagePadding: 50,
                    loop:true,
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                })

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}