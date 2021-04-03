<?php
if (!defined('ABSPATH')){die('-1');}

add_action('wp_head', 'sgs_ssb_css');

if ( ! function_exists( 'sgs_ssb_css' ) ) {
function sgs_ssb_css(){
	echo '<style>
.sgsssb-social {width: min-content;background: #fff !important;}
.sgsssb-social .sgsssb-link:hover { background:#ccc; }
@media screen and (min-width: 851px){
.sgsssb-social {position: fixed; left: 0; top: 200px; top: calc(50% - 120px); text-align: center; padding: 2px; margin: auto; z-index: 999999999;     border: 0;     padding-bottom: 0px;}
.sgsssb-social .sgsssb-link, .sgsssb-social .sgsssb-link:visited { width:22px; height:auto; line-height: 1; text-align: center; margin: 1.5px auto 1.5px auto; display: inline-block; } 
} 
@media screen and (max-width: 850px){
.sgsssb-social {position: fixed; bottom: 120px; left: 0px; right: unset; text-align: center; padding: 2px; margin: auto; height: auto; top: unset; z-index: 999999999; border: 0;}  
.sgsssb-social .sgsssb-link, .sgsssb-social .sgsssb-link:visited { width: 18px; height: auto; line-height: 1; text-align: center; margin: 1.5px auto 1.5px auto; display: inline-block; }
}
@media print{.sgsssb-social{display: none;}}

.sgsssb-social {
  animation: shaker 5s ease infinite;
  transform-origin: 50% 50%;
}

@keyframes shaker {
   0% { transform:translate(0,0) }
  1.78571% { transform:translate(5px,0) }
  3.57143% { transform:translate(0,0) }
  5.35714% { transform:translate(5px,0) }
  7.14286% { transform:translate(0,0) }
  8.92857% { transform:translate(5px,0) }
  10.71429% { transform:translate(0,0) }
  100% { transform:translate(0,0) }
}
</style>';
}
} // end of if function exists