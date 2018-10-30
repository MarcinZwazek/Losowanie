<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!isset($ListaWylosowanych))
{
$ListaWylosowanych[0]=" jeszcze nie ma, proszę wylosuj";
}
if(!isset($CyfryUzytkownika))
{

  for($a=1;$a<9;$a++)
  {
     $CyfryUzytkownika[$a]="-";

  }
 
}
if(!isset($trafione))
{

  $trafione=null;
 
}
?> <!DOCTYPE html>
<html lang="en">
<head>
  <title>Witaj w Losowaniu</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?PHP echo base_url(); ?>application/views/CSS/style.css">
  <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet"> 
    <script> 
      $(document).ready(function(){
           $(".content").animate({
             left: '25%',
             top: '10%',
             fontSize:'2rem',
             height: '150%',
             duration: 5,
             width: '100%'});
          });
      </script> 
</head>
<body>  
       <div class="container-fluid">
	       <video autoplay="" id="bg-video">
            <source src="<?PHP echo base_url(); ?>numbers.mp4" type="video/mp4"/>
          </video>    
          <div class="content" >
  				  <h1 class="header">Witaj,</h1>
  				  <p >Obstaw liczby które wybierze komputer i zagraj</p>
  				  <form name="myForm" action="<?PHP echo base_url();?>index.php/sprawdz" method="POST" onsubmit="return Sprawdz()">
					     <input class="cyfry" type="text" name="cyfra1" maxlength="2" value="<?php  echo $CyfryUzytkownika[1]?>" />
  					   <input class="cyfry" type="text" name="cyfra2" maxlength="2" value="<?php  echo $CyfryUzytkownika[2]?>"/>
  					   <input class="cyfry" type="text" name="cyfra3" maxlength="2" value="<?php  echo $CyfryUzytkownika[3]?>"/>
  					   <input class="cyfry" type="text" name="cyfra4"maxlength="2" value="<?php  echo  $CyfryUzytkownika[4]?>"/>
  					   <input class="cyfry" type="text" name="cyfra5" maxlength="2" value="<?php  echo $CyfryUzytkownika[5]?>"/>
  					   <input class="cyfry" type="text" name="cyfra6" maxlength="2" value="<?php  echo $CyfryUzytkownika[6]?>"/>
  					   <input class="cyfry" type="text" name="cyfra7" maxlength="2" value="<?php  echo $CyfryUzytkownika[7]?>"/>
  					   <input class="cyfry" type="text" name="cyfra8" maxlength="2" value="<?php  echo $CyfryUzytkownika[8]?>"/>
  					   <input id="submit" type="submit" name="wyslij" value="Losuj"/>
  				  </form>
      <br />
  			   <p id="blad">Wylosowane liczby to: </p>
              <p id="liczby">
                <?php foreach ($ListaWylosowanych as $item):?>
                 <?php echo $item;?>
                <?php endforeach;?>
              </p>
            <p>Trafiłeś: <?php echo $trafione ?></p>
          </div>
	       </div>
  <script type="text/javascript">

  
            window.mobilecheck = function() {
                var check = false;
                (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
                return check;
            }

            $(function() {
                var $video = $('#bg');

                if (window.mobilecheck()) {
                    $video.remove();
                    $('#wrapper nav').remove();
                }

                $('#video_button_mute').on('click', function(e) {
                    var $this = $(this), $icon = $('.icon', $this);

                    e.preventDefault();

                    if ($video.prop('muted')) {
                        $video.prop('muted', false);

                        $icon.removeClass('mute').addClass('sound');
                    } else {
                        $video.prop('muted', true);

                        $icon.removeClass('sound').addClass('mute');
                    }
                });

                $('#video_button_quality').on('click', function(e) {
                    var $this = $(this), $icon = $('.icon', $this);

                    e.preventDefault();

                    if ($icon.hasClass('sd')) {
                        $video.find('source').eq(0).attr('src', 'video/hd.webm');
                        $video.find('source').eq(1).attr('src', 'video/hd.mp4');

                        $icon.removeClass('sd').addClass('hd');
                    } else {
                        $video.find('source').eq(0).attr('src', 'video/sd.webm');
                        $video.find('source').eq(1).attr('src', 'video/sd.mp4');

                        $icon.removeClass('hd').addClass('sd');
                    }

                    $video.get(0).load();
                    $video.get(0).play();
                });
            });
        
    function Sprawdz()
    {
     var array=[];
      for(var a=1;a<8;a++)
      {

        var x = document.forms["myForm"]["cyfra"+a].value;
        array[a]=x;   
         if(x>50)
          {
            alert("Liczby z przedziału 0-49");
            return false;

          }     
         if (isNaN(x))
          {
             alert("To musi być liczba");
            return false;
          }
          if (x == "")
          {
          alert("Pole Puste");
          return false;
          }

      }
      
    }
  </script>
</body>
</html> 