            
            <a class="pro_tit" href="<?php echo PATH . $deals_categories->store_url_title . '/product/' . $deals_categories->deal_key . '/' . $deals_categories->url_title . '.html'; ?>" 
               title="<?php echo $deals_categories->deal_title; ?>" style="font-size:<?php echo $font_size; ?> arial; <?php echo $font_color; ?>"> 
                   <?php 
                   if(strlen($deals_categories->deal_title) > 40){
                        echo substr($deals_categories->deal_title, 0, 38)."...";
                   }else{
                        echo $deals_categories->deal_title;
                   }
                   ?>
             </a>
            <br/>