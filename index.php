<?php 

$fgc = file_get_contents("https://api.genelpara.com/embed/korona.json");
$array = json_decode($fgc, true);

?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="ibrahim odev, ibrahim ödev, turkiye, korona, korona turkiye, covid-19 turkiye" />
    <meta name="description" content="Covid-19 Türkiye Verileri Güncel" />
    <meta name="abstract" content="Korona Virüs Covid-19 Web Sitesi" />
    <meta name="author" content="İbrahim Ödev, www.ibrahimodev.tk" />
    <meta name="Copyright" content="@ İbrahim Ödev 2020" />
    <meta http-equiv="content-language" content="tr">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/covid19/style.css" />
    <title>Covid-19 Türkiye</title>
  </head>
  <body>
    <div id="nav-menu" class="nav-menu">
      <h1>Covid-19 TÜRKİYE</h1>
      <ul>
        <li><a href="#toplam">Toplam Veriler</a></li>
        <li><a href="#buhafta">Bu Hafta</a></li>
        <li><a href="/covid19/online-test.html">ONLİNE COVİD 19 TESTİ</a></li>
        <li>
          <a href="https://covid19.saglik.gov.tr/TR-66300/covid-19-nedir-.html"
            >Covid-19 Nedir?</a
          >
        </li>
      </ul>
      <div id="menu" class="menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
    <div id="#" class="gunluk">
      <div class="sabit-baslik">
        <h3><?php echo $array['korona']['tarih'];?> Tarihli Veriler Gösterliyor</h3>
      </div>
      <div class="kutular">
        <div class="kutu">
          <h1 class="baslik">Günlük Test</h1>
          <div class="sayi"><?php echo $array['korona']['gunluk_test'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Günlük Vaka</h1>
          <div class="sayi"><?php echo $array['korona']['gunluk_vaka'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Günlük Vefat</h1>
          <div class="sayi"><?php echo $array['korona']['gunluk_vefat'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Günlük İyileşen</h1>
          <div class="sayi"><?php echo $array['korona']['gunluk_iyilesen'];?></div>
        </div>
      </div>
    </div>
    <div class="toplam">
      <div id="toplam" class="sabit-baslik">
        <h3>Toplam Veriler</h3>
      </div>
      <div class="kutular">
        <div class="kutu">
          <h1 class="baslik">Toplam Test</h1>
          <div class="sayi"><?php echo $array['korona']['toplam_test'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Toplam Vaka</h1>
          <div class="sayi"><?php echo $array['korona']['toplam_hasta'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Toplam Vefat</h1>
          <div class="sayi"><?php echo $array['korona']['toplam_vefat'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Toplam İyileşen</h1>
          <div class="sayi"><?php echo $array['korona']['toplam_iyilesen'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">Ağır Hasta Sayısı</h1>
          <div class="sayi"><?php echo $array['korona']['agir_hasta_sayisi'];?></div>
        </div>
      </div>
    </div>
    <div class="bu-hafta">
      <div id="buhafta" class="sabit-baslik">
        <h3>Bu Hafta'ki Veriler</h3>
      </div>
      <div class="kutular">
        <div class="kutu">
          <h1 class="baslik">ZATÜRRE ORANI</h1>
          <div class="sayi">%<?php echo $array['korona']['hastalarda_zaturre_oran'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">YATAK D. O.</h1>
          <div class="sayi">%<?php echo $array['korona']['yatak_doluluk_orani'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">YOĞUN BAKIM D. O.</h1>
          <div class="sayi">%<?php echo $array['korona']['eriskin_yogun_bakim_doluluk_orani'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">VENTİLATÖR D. O.</h1>
          <div class="sayi">%<?php echo $array['korona']['ventilator_doluluk_orani'];?></div>
        </div>
        <div class="kutu">
          <h1 class="baslik">O. TESPİT SÜRESİ</h1>
          <div class="sayi"><?php echo $array['korona']['ortalama_temasli_tespit_suresi'];?> Saat</div>
        </div>
        <div class="kutu">
          <h1 class="baslik">FİLYASYON ORANI</h1>
          <div class="sayi">%<?php echo $array['korona']['filyasyon_orani'];?></div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>Copyright © 2020 İbrahim Ödev Tüm hakları saklıdır.</p>
      <div>
        <p>
          <a href="/covid19/online-test.html">Online Test</a> veya
          <a href="#">Başa Dön</a>
        </p>
      </div>
    </div>
    <a class="yukari-cik" id="top" href="#nav-menu"><i class="fas fa-angle-up"></i></a>
    <script>
      var menubtn = document.getElementById("menu");
      var container = document.getElementById("nav-menu");
      var mybutton = document.getElementById("top");

      window.onscroll = function() {scrollFunction()};

      function scrollFunction() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          mybutton.style.display = "block";
        } else {
          mybutton.style.display = "none";
        }
      }

      menubtn.addEventListener("click", function(){
        container.classList.toggle('aktif');
      });
    </script>
  </body>
</html>
