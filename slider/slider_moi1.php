<?php 
    class thuviendetail
    {
        
        function __construct($name,$meta_description,$image){
                $this->name=$name;
                $this->meta_description=$meta_description;
                $this->image=$image;
            }
        }
        $datathuviendetail = array(
            array('CUỘC THI HCMC RUN BIKELIFE TÀI TRỢ NĂM 2017','','thuviendetail1.jpg'),
            array('CUỘC THI HCMC RUN BIKELIFE TÀI TRỢ NĂM 2017','','thuviendetail2.jpg'),
            array('CUỘC THI HCMC RUN BIKELIFE TÀI TRỢ NĂM 2017','','thuviendetail3.jpg'),
        );
    
        
        $thuviendetail = array();
        foreach($datathuviendetail as $key => $value){
            array_push($thuviendetail,new thuviendetail($value[0],$value[1],$value[2]));
        }
?>
<style>
    .moi1 .owl-nav [class*=owl-]:hover {
        color: #b68944;
        background-color: unset;
    }
    .moi1>.owl-nav>.owl-next{
        top: 50%;
        position: absolute;
        left: 5vw;
    }
    .moi1>.owl-nav>.owl-prev{
        top: 50%;
        position: absolute;
        right: 5vw;
    }
    .card-text {
        min-height: 215px;
    }
    .card_img{
        height: 50vw;
    }
    @media (min-width: 768px){
        .card_img{
            height: 30vw;
        }
        .card-text {
            min-height: 215px;
        }
        .moi1>.owl-nav>.owl-next{
            top: 50%;
            position: absolute;
            left: -5vw;
        }
        .moi1>.owl-nav>.owl-prev{
            top: 50%;
            position: absolute;
            right: -5vw;
        }
        .bg{
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
</style>




    <div class="px-0">
        <div class="moi1 owl-carousel owl-theme">
            
                <?php
                    foreach ($thuviendetail as $key => $value) {
                        # code...
                    
                ?>
                    
                        <div class=" position-relative d-md-none d-block px-2">
                            <div class="position-relative">
                                <div>
                                    <img width="360" height="234" src="public/demo/<?php echo $value->image ?>" alt="">
                                </div>
                                <div class="position-absolute bottom-0  text-white bg-dark w-100 text-center" style="opacity: 0.5">
                                    <p class="mb-0 text-uppercase"><?php echo $value->name; ?></p>
                                </div>
                            </div>
                        </div>
                    
                <?php } ?>
            
        </div>   
    </div>




<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.moi1').owlCarousel({
            center: false,
            loop:true,
            nav:false,
            dots:true,
            autoplay:true,
            responsive:{
                0:{
                    items:1,
                    stagePadding: 0,
                    margin:0
                },
                600:{
                    items:1,
                    stagePadding: 100,
                    margin:10
                }
            }
        });
        $( ".owl-next").html('<i class="bi bi-arrow-left-short fs-1"></i>');
         $( ".owl-prev").html('<i class="bi bi-arrow-right-short fs-1"></i>');


    });
</script>