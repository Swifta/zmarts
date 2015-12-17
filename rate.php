<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript" src="<?php echo PATH; ?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo PATH; ?>themes/default/js/public.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>themes/default/css/electronics3/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo PATH; ?>themes/default/css/electronics3/multi_style.css" /
</head>

<body>
<div class="deal_rating">

                                        <link href="<?php echo PATH; ?>themes/default/css/jRating.jquery.css" rel="stylesheet" type="text/css">
                                        <script type="text/javascript" src="<?php echo PATH; ?>themes/default/js/jRating.jquery.js"></script>

                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                $(".basic28").jRating({
                                                    bigStarsPath : '<?php echo PATH; ?>images/star_03.png', // path of the icon stars.png
                                                    smallStarsPath : '<?php echo PATH; ?>images/small.png', // path of the icon small.png
                                                    phpPath : '<?php echo PATH; ?>product-rating.html', // path of the php file jRating.php
                                                    length : 5,
                                                    rateMax : 5,
                                                    step:true,

                                                    //decimalLength:1,
                                                    showRateInfo: false,
                                                    canRateAgain : true,
                                                    nbRates : 10,
                                                    onError : function(){
                                                        //$('.jStar').css({backgroundColor: 'white'});
                                                        showlogin();
                                                    }
                                                });
                                            });
                                        </script>


                                        <label style="height: 15px; width: 70px; overflow: hidden; z-index: 1; position: relative; cursor: default;" class="basic28" id="0" title="0 / 5">
                                            <!--
                                                    Check the images folder for 'black_star.png' and 'white_star.png'
                                            -->
                                        <div style="width: 0px;" class="jRatingColor"></div><div style="width: 0px; top: -15px;" class="jRatingAverage"></div><div style="width: 70px; height: 15px; top: -30px; background: transparent url(&quot;<?php echo PATH; ?>/images/star_03.png&quot;) repeat-x scroll 0% 0%;" class="jStar"></div></label>
                                        <span>0 Ratings</span>


                                    </div>
</body>
</html>