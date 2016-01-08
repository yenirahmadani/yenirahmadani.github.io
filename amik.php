<?php
mb_http_input("utf-8");
mb_http_output("utf-8");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #FFFFFF;
	background-image: url(image/e6f123b46ed8.gif);
}
a:link {
	color: #00CC00;
}
-->
</style>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #FF0000;
	font-family: Academy Engraved LET, Andalus, Shruti, Ravie, Raavi, Papyrus, Magneto, Lucida Sans Unicode, Lucida Sans Typewriter, Lucida Handwriting, Lucida Calligraphy, Jokerman, Impact, Harrington, Gigi, Garamond, Futura Md BT, Forte;
	font-size: 18px;
	font-weight: bold;
}
.blink {
        -webkit-animation: blink .75s linear infinite;
        -moz-animation: blink .75s linear infinite;
        -ms-animation: blink .75s linear infinite;
        -o-animation: blink .75s linear infinite;
        animation: blink .75s linear infinite;
        color: #F00;
        font-weight: bold;
    }
    
    @-webkit-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @-moz-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @-ms-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @-o-keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
    
    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 1; }
        50.01% { opacity: 0; }
        100% { opacity: 0; }
    }
   		.profile-sidebar {
  position: relative;
  width: 142px;
  float: left;
}

.profile {
  background: #f6f6f6;
  float: left;
  padding: 4px;
  border-radius: 3px;
  -o-border-radius: 3px;
  -ms-border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
}

.avatar img {
  display: block;
  border-radius: 3px;
  -o-border-radius: 3px;
  -ms-border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
}

.follow button {
  display: block;
  width: 100%;
  border: 0;
  background: #D74937;
  color: white;
  padding: 7px 39px;
  margin: 0;
  border-radius: 3px;
  -o-border-radius: 3px;
  -ms-border-radius: 3px;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  -webkit-transition: all 0.2s ease-in-out;
  -moz-transition: all 0.2s ease-in-out;
  -ms-transition: all 0.2s ease-in-out;
  -o-transition: all 0.2s ease-in-out;
  transition: all 0.2s ease-in-out;
  cursor: pointer;
}

.follow button i {
  font-size: 10px;
  color: #FFFFFF;
}

.follow button:hover {
  background: rgba(214,73,56,0.5);
}

.follow button:active {
  background: #2085d6;
}

.profile-list {
  overflow: hidden;
  width: 100%;
  box-sizing: border-box;
  color: #767b7e;
  font-size: 13px;
}

.profile-list li {
  cursor: pointer;
  background: #ffffff;
  border-top: 1px solid #e5e6e6;
  padding: 15px 10px;
}

.profile-list li:last-child {  
  border-radius: 0 0 3px 3px;;
  -o-border-radius: 0 0 3px 3px;
  -ms-border-radius: 0 0 3px 3px;
  -moz-border-radius: 0 0 3px 3px;
  -webkit-border-radius: 0 0 3px 3px;
}

.profile-list li [class^="icon-"] {
  margin: 0 3px 0 0;
}


.profile-list .profile {
  border-radius: 3px 3px 0 0;
  position: relative;
}

.profile-list li {
  -webkit-transform-origin: 50% 0%;
  -o-transform-origin: 50% 0%;
  transform-origin: 50% 0%;
  -webkit-transform: perspective(250px) rotateX(-90deg);
  -o-transform: perspective(250px) rotateX(-90deg);
  transform: perspective(250px) rotateX(-90deg);
  -moz-box-shadow: 0px 2px 10px rgba(0,0,0,0.05);
}

.profile-list .first {
  -webkit-transition: 0.2s linear 0.8s;
  -o-transition: 0.2s linear 0.8s;
  transition: 0.2s linear 0.8s;
}

.profile-list .first:hover {
  background-color: #4B6DAA;
  color: #fff;
}

.profile-list .second {
  -webkit-transition: 0.2s linear 0.6s;
  -o-transition: 0.2s linear 0.6s;
  transition: 0.2s linear 0.6s;
}

.profile-list .second:hover {
  background-color: #2EACF6;
  color: #fff;	
}

.profile-list .third {
  -webkit-transition: 0.2s linear 0.4s;
  -o-transition: 0.2s linear 0.4s;
  transition: 0.2s linear 0.4s;
}

.profile-list .third:hover {
  background-color: #C70704;
  color: #fff;	
}

.profile-list .fourth {
  -webkit-transition: 0.2s linear 0.2s;
  -o-transition: 0.2s linear 0.2s;
  transition: 0.2s linear 0.2s;
}

.profile-list .fourth:hover {
  background-color: #007AB5;
  color: #fff; 	
}

.profile-sidebar:hover .profile {
  border-radius: 3px 3px 0 0;
  -o-border-radius: 3px 3px 0 0;
  -ms-border-radius: 3px 3px 0 0;
  -moz-border-radius: 3px 3px 0 0;
  -webkit-border-radius: 3px 3px 0 0;
}

.profile-sidebar:hover .profile-list li {
  -webkit-transform: perspective(350px) rotateX(0deg);
  -o-transform: perspective(350px) rotateX(0deg);
  transform: perspective(350px) rotateX(0deg);
  -webkit-transition: 0.2s linear 0s;
  -o-transition: 0.2s linear 0s;
  transition: 0.2s linear 0s;
}

.profile-sidebar:hover .profile-list .second {
  -webkit-transition-delay: 0.2s;
  -o-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

.profile-sidebar:hover .profile-list .third {
  -webkit-transition-delay: 0.4s;
  -o-transition-delay: 0.4s;
  transition-delay: 0.4s;
}

.profile-sidebar:hover .profile-list .fourth {
  transition-delay: 0.6s;
  -o-transition-delay: 0.6s;
  transition-delay: 0.6s;
} 
.style1 {
	font-family: Harrington;
	color: #993333;
}
-->
</style></head>

<body>
<div align="center">
  <table width="988" height="639" border="1">
    <tr>
      <td height="45" colspan="2" background="image/98.jpg" bgcolor="#009966"><div align="center"><img src="image/amik.jpg" width="319" height="147" align="bottom" /></div></td>
    </tr>
    <tr>
      <td height="35" colspan="2" background="image/02.jpg" bgcolor="#0099FF"><ul id="MenuBar1" class="MenuBarHorizontal">
        <li><a href="HOME.php">HOME</a></li>
        <li>PROFIL
          <ul>
            <li><font face="Harrington"color="#CC0033"size="2"><a href="profilme.php">PROFIL ME</a></li>
              <li><a href="amik.php">ABOUT AMIK ROYAL</a></font></li>
            </ul>
        </li>
        <li><a href="galery.php">GALERY</a> </li>
           
      <li><a href="contact.php">CONTACT</a></li>
      </ul>      </td>
    </tr>
    <tr>
      <td width="247" height="409" bgcolor="#00CC33"><table border="10" cellpadding="2" height="300" width="120" bgcolor="green" />      
    <tr><td></center>
<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" direction="up" width="150" height="185" align="center">
<img src="image/b.jpg" height="200" width="150" /><br>
<img src="image/t.jpg" height="200" width="150" /><br>
<br>
<br>
<img src="image/z.jpg" height="186" width="150" /><br>
<img src="image/55463.jpg" height="200" width="150" /><br>
</marquee>
</td>
    </tr>
</table>
      <div class="profile-sidebar unfold">
        <div class="profile">
            <div class="follow">
              <button><i class="icon-plus"></i> Follow</button>
            </div>
        </div>
        <ul class="profile-list">
            <li class="first"><i class="icon-facebook"></i><a href="http://www.facebook.com"> Facebook</li></a>
            <li class="second"><i class="icon-twitter"></i><a href="http://twitter.com"> Twitter</li>
            <li class="third"><i class="icon-pinterest"></i><a href="http://www.gmail.com"> Gmail</li></a>
            <li class="fourth"><i class="icon-linkedin"></i><a href="http://www.blogger.com">Blogger</li></a>
        </ul>
    </div></td>
            <td width="725" bgcolor="#00FF33"><p align="center" class="style1"><strong><em><span class="blink">Sejarah Berdirinya AMIK Royal Kisaran</span></em></strong> </p>
        <p align="justify" class="style1"><br />
          <strong><em>Royal Courses Centre (RCC) adalah  cikal bakal dari Yayasan Pendidikan Royal, berdiri pada tanggal 22 Juni 1995  yang didirikan oleh Anda Putra, SE. beralamat di pusat kota Kisaran, tepatnya  di jalan Tuanku Imam Bonjol Nomor 179 Telepon (0623) 42366 Kisaran. Pada  awalnya, RCC dengan fasilitas dan perlengkapan yang sederhana membuka kursus  komputer, bahasa Inggris, dan akuntansi dengan izin operasional yang dikeluarkan  oleh Kantor Departemen Pendidikan dan Kebudayaan, Kabupaten Asahan. Seiring  dengan perkembangannya maka RCC kemudian memakai izin operasional dari Kantor  Wilayah Departemen Pendidikan dan Kebudayaan Provinsi Sumatra Utara, dan pada  tahun 1997 RCC menambah fasilitas dan perlengkapannya yaitu dengan menambah  komputer sehingga mempunyai dua laboratorium komputer yang masing-masing  laboratorium memiliki 25 unit komputer serta menambah ruang untuk teori  sebanyak 4 ruangan.</em></strong><br />
          <strong><em>Dari tahun 1995 sampai Desember 2007  RCC telah meluluskan 1896 orang untuk program komputer, untuk paket operator  dan aplikasi perkantoran, Akuntansi 210 orang dan Bahasa Inggris 502 orang.  Sejak tahun ajaran 2000 – 2003, untuk kursus Akuntansi dihentikan berhubung  peminatnya sangat minim. Berdasarkan data tersebut di atas dapat dilihat bahwa  antusias peserta didik untuk bidang komputer sangat tinggi .</em></strong> <br />
          <strong><em>Seiring dengan perkembangan dan  kemajuan Royal Courses Centre (RCC) dan rencana mendirikan Akademi Manajemen  Informatika dan Komputer ROYAL (AMIK Royal) dengan jenjang pendidikan Program  Diploma III (D3) maupun yang lebih tinggi, maka kami membentuk Yayasan  Pendidikan Royal dengan Akta No.31 tanggal 26 Maret 2003 melalui Notaris H.  Suryaman Tarigan, S.H., di Kisaran. Kemudian pada 15 Juli 2007 dilakukan  perubahan akta Yayasan Pendidikan Royal dengan Akta No. 06 melalui Notaris  Pagit Maria Tarigan, S.H. di Medan. Adapun perubahan susunan kepengurusan  yayasan sebagai berikut:</em></strong> <br />
            <strong><em>Pembina&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; : Anda  Putra Lubis, S.E.<br />
              Pengurus:<br />
              Ketua&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp; Hj. Halimatussa’diah Panggabean<br />
              Sekretaris &nbsp; :&nbsp;&nbsp; Sudarmin<br />
              Bendahara :&nbsp;&nbsp; Wan Mariatul  Kifti, S.E.<br />
          Pengawas&nbsp;&nbsp; :&nbsp;&nbsp; Layla Nasution.</em></strong> <br />
          <strong><em>Tahun 2003 atas izin Mendiknas  dengan No. Keputusan 133/D/0/2003, AMIK Royal mulai menyelenggarakan program  studi Manajemen Informatika dan Teknik Komputer. Pada tahun 2005, 2007, dan  2009 mendapatkan perpanjangan izin penyelengaraan. Pada 2007 AMIK Royal  mendapat akreditasi dari BAN PT (Badan Akreditasi Nasional Perguruan Tinggi)  dengan:</em></strong> <br />
          <strong><em>1. Nomor:  011/BAN-PT/Ak-VII/Dpl-III/IX/ 2007 untuk Program Studi Manajemen Informatika,</em></strong> <br />
          <strong><em>2. Nomor:  005/BAN-PT/Ak-VII/Dpl-III/VII/ 2007 untuk Program Studi Teknik Komputer.</em></strong> <br />
          <strong><em>Yayasan Pendidikan Royal sudah  berpengalaman sebagai badan Penyelenggara perguruan tinggi AMIK Royal yang  sudah menyelenggarakan 2 program studi yaitu: Manajemen Informatika dan Teknik  Komputer untuk jenjang D3. Berkat dari Tuhan yang Mahaesa dan kerjasama semua  pihak, setiap tahun minat calon mahasiswa meningkat. Pada tahun 2004 bertambah  341%, 2005 bertambah 122%, 2006 bertambah 105%, 2007 meningkat 135%, 2008  meningkat 179%, 2009 bertambah 116%, dan 2010 bertambah 113%. Saat ini (T.A.  2010-2011) mahasiswa AMIK Royal berjumlah 1617 orang. Dari jumlah ini ada 142  orang akan menyelesaikan studinya pada tahun 2010 ini.</em></strong></p>
  <p align="justify" class="style1">Saya juga mengucapkan terimakasih untuk dosen pengampuh pemrograman web DEWI MAHARANI M.Kom,atas ilmu yang telah diberikan.</p>
  </td>
    </tr>
    <tr>
      <td bgcolor="#0099FF"><div align="center"></td>
      <td bgcolor="#0099FF">&nbsp;</td>
    </tr>
  </table>
</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>
