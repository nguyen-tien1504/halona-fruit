<?php 
    class thuviendetail2
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
            array_push($thuviendetail,new thuviendetail2($value[0],$value[1],$value[2]));
        }
?>
<style>
    .moi2 .owl-nav [class*=owl-]:hover {
        color: #b68944;
        background-color: unset;
    }
    .moi2>.owl-nav>.owl-next{
        top: 50%;
        position: absolute;
        left: -3vw;
    }
    .moi2>.owl-nav>.owl-prev{
        top: 50%;
        position: absolute;
        right: -3vw;
    }
    .card-text {
        min-height: 215px;
    }
    .card_img{
        height: 20vw;
    }
    @media (min-width: 768px){
        .card_img{
            height: 30vw;
        }
        .card-text {
            min-height: 150px;
        }
        .moi2>.owl-nav>.owl-next{
            top: 50%;
            position: absolute;
            left: -5vw;
        }
        .moi2>.owl-nav>.owl-prev{
            top: 50%;
            position: absolute;
            right: -5vw;
        }
    }
</style>




    <div class="px-0">
        <div class="moi2 owl-carousel owl-theme">
            
                <?php
                    foreach ($thuviendetail as $key => $value) {
                        # code...
                    
                ?>
                    <div class="card_img bg position-relative d-md-block d-none" style="background-image: url(public/demo/<?php echo $value->image ?>")>
                        <div class="position-absolute bottom-0  text-white bg-dark w-100 text-center" style="opacity: 0.5">
                            <p class="mb-0 text-uppercase"><?php echo $value->name; ?></p>
                        </div>
                    </div>
                <?php } ?>
            
        </div>   
    </div>




<script src="owlcarousel/owl.carousel.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

        $('.moi2').owlCarousel({
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
                    margin:20
                }
            }
        });
        $( ".owl-next").html('<i class="bi bi-arrow-left-short fs-1"></i>');
         $( ".owl-prev").html('<i class="bi bi-arrow-right-short fs-1"></i>');


    });
</script>