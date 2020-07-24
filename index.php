<?php



	if ( $_POST ){
	
		$adsoyad = htmlspecialchars(trim($_POST['adsoyad']));
		$eposta = htmlspecialchars(trim($_POST['eposta']));
        $konu = htmlspecialchars(trim($_POST['konu']));
		$mesaj = htmlspecialchars(trim($_POST['mesaj']));
	
		include 'class.phpmailer.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->SMTPSecure = 'tls';
		$mail->Username = '';
		$mail->Password = '';
		$mail->SetFrom($mail->Username, $adsoyad);
		$mail->AddAddress($mail->Username, $adsoyad);
		$mail->CharSet = 'UTF-8';
		$mail->Subject = $konu;
		$content = '<div style="background: #eee; padding: 10px; font-size: 14px">'.$mesaj.'</div>';
		$mail->MsgHTML($content);
		if($mail->Send()) {
			// e-posta başarılı ile gönderildi
			echo '<div class="success" style="width:100%; position:absolute; bottom:5px; background:#ddd; text-align:center;">E-posta başarıyla gönderildi. :))</div>';
		} else {
			// bir sorun var, sorunu ekrana bastıralım
			echo '<div class="error">'.$mail->ErrorInfo.'</div>';
		}
	
	}
	
?>


<!DOCTYPE html>

<html lang="tr">
    <head>
        <link rel="shortcut icon" href="img/logo_ico_ips_icon.ico" type="image/x-icon" />
        <meta charset="utf-8">
        <meta name="description" content="Enes Duman Kişisel Web Sayfası">
        <meta name="author" content="Enes Duman">
        <meta name="keywords" content="HTML, CSS, JAVASCRİPT">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        
        <title>Enes Duman Kişisel Web Sayfası</title>
        
      
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
       
    </head>
  
    
    <body>
        <section class="kapsayici">
        <header>
            <div class="container menucontainer">
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png"> </a>
                </div>
                <div class="menü">
                
                <ul>
                    <li> <a href="#mainSlider">ANASAYFA</a> </li>
                    <li> <a href="#hakkimdabas">HAKKIMDA</a> </li>
                    <li> <a href="#projebas">PROJELER</a> </li>
                    <li> <a href="#iletisim">İLETİŞİM</a> </li>
                    </ul>
                </div>
            </div>
                <div class="container hammenu" >
                <div class="logo">
                    <a href="index.php"><img src="img/logo.png"> </a>
                </div>
                <div class="hamburgermenu">
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
                    
                </div>
                    <div class="topnav">
                <div id="myLinks">
                <a href="#mainSlider">ANASAYFA</a> 
                <a href="#hakkimdabas">HAKKIMDA</a> 
                <a href="#projebas">PROJELER</a> 
                <a style="border-bottom:1px solid #500d16;" href="#iletisim">İLETİŞİM</a>
                  
                
                    </div>
                       

  </div>
  

            </div>
        </header>
<!--        MAİN SECTİON-->
        
            
        <section id="mainSlider" class="slider">
        
            <div id="mainCaption" class="caption">
                <h1>Düşüncelerini Değiştirerek Hayatını Değiştirebilirsin</h1>
                <p></p>
            </div>
        </section>
        <!--        FEATURE SECTİON-->
        <section id="features" class="sectionArea">
            <div class="featuresTop">
                <h2 class="sectionHeader">BAŞLIKLAR</h2>
                <p></p>
            </div>
            <div class="featuresBody">
                <div class="container econtainer">
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                                <img src="img/muzikgorsel.jpg">
                            
                            
                            </div>
                            <div class="itemText">
                                <h3>MÜZİK</h3>
                                <p></p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=YXV_OU2loWs" class="btnDetails">Daha Fazla Bilgi</a>
                            </div>
                                 
                        </div>
                        
            </div>  
                    
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                                <img src="img/kampgorsel.jpg">
                            
                            
                            </div>
                            <div class="itemText">
                                <h3>KAMP</h3>
                                <p></p>
                                <a target="_blank" href="https://www.decathlon.com.tr/C-576572-kamp" class="btnDetails">Daha Fazla Bilgi</a>
                            </div>
                                 
                        </div>
                        
            </div>  
                    <div class="col3">
                        <div class="item">
                            <div class="zoom">
                                <img src="img/masatenisi.jpg" >
                                      
                            </div>
                            <div class="itemText">
                                <h3>MASA TENİSİ</h3>
                                <p></p>
                                <a target="_blank" href="https://www.youtube.com/watch?v=-7AuCCmgWTU" class="btnDetails">Daha Fazla Bilgi</a>
                            </div>
                                 
                                 
                        </div>
                    </div>
                </div>
            </div>
        </section>
                 <!--     PARALLAX SECTİON-->
                <section id="parallax" class="sectionArea">
                    <div class="parallaxTop">
                        
                        <p></p>
                    </div>
                </section>
                
                 <!--     ENGİNE SECTİON-->
                
                <section id="index" class="sectionArea">
                    <div class="indexTop">
                        <h2 class="sectionHeader">ATASÖZÜ</h2>
                        <p></p>
                    </div>
                    <div class="indexBody">
                        <div class="container econtainer">
                            <div class="col2 ecol2">
                                <div class="indexContainer">
                                    <img src="img/okul.jpg" class="imageOver">
                                    <div class="indexOverlay">
                                        <div class="indexText">Bir ülkenin geleceği, o ülke insanlarının göreceği eğitime bağlıdır.</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col2 ecol2">
                                <div class="indexContainer">
                                    <img src="img/calisma.jpg" class="imageOver">
                                    <div class="indexOverlay2">
                                        <div class="indexText">Başarıya giden yol, çalışmaktan geçer.<br></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
        
        
        

<!--        MAİN SECTİON-->
        
        
        <!--       HAKKIMDA SECTİON-->
            <div id="hakkimdabas" class="hakkimdabas"></div>
        
        <section id="hakkimda" class="sectionArea"> 
             <div class="hakkimdaTop">
                 <h1>ENES DUMAN KİMDİR ?</h1>
            </div>  
            
            <section  class="tanitim">
                
        <div class="baslik"> 
            <div class="container">
                <div class="col2">
                    <aside class="ustaside">
                        <div class="tanitimfoto">
                                <img src="img/profil.jpg">
                        </div>
                    
                    <div class="itemText">
                        <div class="item">
                            <h1>
                                Hobiler
                            </h1>
                            <h3>
                                <li>Müzik</li>
                                <li>Gitar</li>
                                <li>Kamp</li>
                                <li>Kitap</li>
                                <li>Yolculuk</li>
                                
                            </h3>
                        </div>
                        
                    </div>
             </aside>
                    <aside class="altaside">
                    
                        <div class="hakkimdaText">
                            <h2> Merhaba ben Enes Duman.7 Kasım 1997 tarihinde Bolu'da doğdum. Eee haliyle Boluluyum :) Bu web sitesinde biraz kendimden bahsetmek istedim. Abant İzzet baysal Üniversitesi'nde Bilgisayar programcılığı okuyorum. Bölümümü seviyorum ve bunun üzerine bir şeyler yapmaya çalışıyorum. İnsan için sadece iş olmayan şeyler daha da güzeldirler. Mesela bilgisayar kadar müziği de seviyorum. Gitar çalıyorum ve genellikle müzikle yaşıyorum. Bir şeyler başarmak yanında ve arkanda birilerinin olduğunu bilmekle başlıyor. Bu yüzden herkese teşekkür ediyorum. </h2>
                        </div>
                    
                    <div class="col4">
                        <div class="video muzikvideo">
                            <video src="video/muzik.mp4" id="backgroundVideo2" class="video1" controls>
                                    
                                    <source src="video/muzik.mp4" type="video.mp4" />
                                    <source src="video/muzik.mp4" type="video.ogg" />
                            </video>
                        </div>
                    </div>
                                            </aside>

                </div>
            </div>
        </div>
                
            </section>
            <section id="foto" class="fotoalbüm">
            <div class="hakkimdaFoto">
                <h3 class="sectionHeader">FOTOĞRAF ALBÜMÜ</h3>
                </div>
                </section>
            
            <div class="hakkimdaBody">
                
               <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/aile.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Duman Ailesi..</h3>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/kendim2.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Sahneden bi tane kare..</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/arkadas.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Canlarımm</h3>
                        </div>
                    </div>
                </div>
            </div>
                <div class="hakkimdaBody">
                
               <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/alicinar.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Ali Çınar</h3>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/omeruras.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Ömer Uras</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/kendim.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3> </h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hakkimdaBody">
                
               <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/arkadas2.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Konser Günü</h3>
                        </div>
                    </div>
                </div>
                <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/kamp.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Doğa ve kamp</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col3">
                    <div class="item">
                        <div class="zoom">
                            <img src="img/mehmetleben.jpg">
                            
                        </div>  
                        <div class="itemText">
                            <h3>Buda burda dursun</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
                <!--       OKUL SECTİON-->
        <section id="okul" class="sectionArea">
            <div class="okulTop">
                <h2 class="sectionHeader">OKULLAR</h2>
            </div>
            <div class="okulBody">
                <div class="container econtainer">
                    <div class="col2 ecol2">
                        <div class="okulImage">
                            <img src="img/ilkokul.jpg">
                        </div>
                        <div class="okulText">
                            <p class="date">2003 - 2011</p>
                            <h4>İLKOKUL</h4>
                            <p>Sakarya İlköğretim Okulu</p>
                            <a target="_blank" href="http://bolusakaryailkokulu.meb.k12.tr/">Daha Fazla</a>
                        </div>
                    </div>
                    <div class="col2 ecol2">
                        <div class="okulImage">
                            <img src="img/lise.jpg">
                        </div>
                        <div class="okulText">
                            <p class="date">2011 - 2015</p>
                            <h4>LİSE</h4>
                            <p>Bolu Anadolu İmam-Hatip Lisesi</p>
                            <a target="_blank" href="http://boluanadoluihl.meb.k12.tr/">Daha Fazla</a>
                        </div>
                    </div>
                </div>
                <div class="container ">
                    <div class="col3 ">
                        <div class="okulImage2">
                            <img src="img/universite.jpg">
                        </div>
                        <div class="okulText2">
                            <p class="date">2017 - ∞</p>
                            <h4>ÜNİVERSİTE</h4>
                            <p>Abant İzzet Baysal Üniversitesi</p>
                            <a target="_blank" href="https://btbmyo.ibu.edu.tr/bolumlerimiz/bilgisayar-teknolojileri-bolumu">Daha Fazla</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
            
            
            
            
            
            
            
            <!--     PROJE SECTİON  -->
            <div id="projebas" class="hakkimdabas"></div>
            
            <section id="proje" class="sectionArea">
                <div class="projeTop">
                    <h2 class="sectionHeader">PROJELER</h2>
                </div>
            <div class="projeBody">
                <div class="container">
                    <div class="col5">
                        <div class="aciklama">
                            <h4> 
                                <li>KÜPÇÜK</li>
                                <li>C# ve Unity Fizik motoru</li>
                            </h4>
                        </div>
                        <video class="video2" id="backgroundVideo" controls>
                            <source src="video/kupcuk.mp4" type="video/mp4" />
                            <source src="video/kupcuk.ogg" type="video/ogg" />
  
                            </video>
                    </div>
                </div>
            </div>
            
            </section>
            
            
            
            
        <section id="iletisim" class="iletisimbody">
            <div class="container4">
                <div class="iletisimbaslik">
                    <h2 class="sectionHeader">İLETİŞİM</h2>
                </div>
        <form class="form" action="" id="contact" method="post">
           
            <div class="form-control">
                <input id="isimsoyisim" name="adsoyad" class="tamekraninp" placeholder="Adınız Soyadınız" type="text" required >
            </div>
            <div class="form-control ikili">
                <input id="email" name="eposta" class="yarimekraninp" placeholder="E-Posta Adresiniz" type="email" required>
                  <input id="konu" name="konu" placeholder="Konu" type="text" required>
            </div>
            
            <div class="form-control">
                <textarea id="mesaj" name="mesaj" placeholder="Lütfen Mesajınızı Buraya Yazın.." required></textarea>
            </div>
            
                  <div class="form-control">
                <button name="submit" type="submit" id="submit">GÖNDER</button>
            </div>
          
        </form>
    </div>    
        </section>    
            
            
    
        
        
        
        
        
                <!--     FOOTER SECTİON-->
                
                <footer class="secitonArea">
                    <div class="container eecontainer">
                        <div class="col3 ecol3">
                            <div class="footerItem">
                                <h3>Siteye Hoşgeldiniz</h3>
                                <a href="index.php"><img src="img/logo2.png"></a>
                                <p>Her zaman çalışmak kurtarır</p>
                            </div>
                        </div>
                        <div class="col3">
                            <div class="footerItem">
                                <h3 >LİNKLER</h3>
                                <ul class="footerLinks">
                                    <li><a href="#mainSlider">ANASAYFA</a></li>
                                    <li><a href="#hakkimdabas">HAKKIMDA</a></li>
                                    <li> <a href="#projebas">PROJELER</a> </li>
                                    <li><a href="#iletisim">İLETİŞİM</a></li>
                                </ul>                                
                            </div>
                        </div>
                        <div class="col3">
                            <div class="footerItem">
                                <h3>SOSYAL MEDYA</h3>
                                <ul class="socialLinks">
                                <li><a target="_blank" href="https://twitter.com/Dumann97"><i class="fa fa-twitter"></i></a> </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/enesdumannn/">
                                    <i class="fa fa-instagram"></i>
                                </a>
                                    </li>
                                <li><a target="_blank" href="https://www.facebook.com/Duman14"><i class="fa fa-facebook"></i></a> </li>       
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
           <script>
    
function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
      x.style.padding = "0 0";
  } else {
    x.style.display = "block";
      x.style.padding = "25px 0";
  }
}
</script>
            </section>
        </body>
        
</html>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        