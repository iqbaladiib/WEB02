<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <title>Document</title>
</head>
<style>
body#LoginForm{ background-image:url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg"); background-repeat:no-repeat; background-position:center; background-size:cover; padding:10px;}

.form-heading { color:#fff; font-size:23px; text-align:center;}
.panel h2{ color:#444444; font-size:18px; margin:0 0 8px 0;}
.panel p { color:#777777; font-size:14px; margin-bottom:30px; line-height:24px;}
.login-form .form-control {
  background: #f7f7f7 none repeat scroll 0 0;
  border: 1px solid #d4d4d4;
  border-radius: 4px;
  font-size: 14px;
  height: 50px;
  line-height: 50px;
}
.main-div {
  background: #ffffff none repeat scroll 0 0;
  border-radius: 2px;
  margin: 10px auto 30px;
  max-width: 38%;
  padding: 50px 70px 70px 71px;
}

.login-form .form-group {
  margin-bottom:10px;
}
.login-form{ text-align:center;}
.forgot a {
  color: #777777;
  font-size: 14px;
  text-decoration: underline;
}
.login-form  .btn.btn-primary {
  background: #f0ad4e none repeat scroll 0 0;
  border-color: #f0ad4e;
  color: #ffffff;
  font-size: 14px;
  width: 100%;
  height: 50px;
  line-height: 50px;
  padding: 0;
}
.forgot {
  text-align: left; margin-bottom:30px;
}
.botto-text {
  color: #ffffff;
  font-size: 14px;
  margin: auto;
}
.login-form .btn.btn-primary.reset {
  background: #ff9900 none repeat scroll 0 0;
}
.back { text-align: left; margin-top:10px;}
.back a {color: #444444; font-size: 13px;text-decoration: none;}

</style>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Form Nilai</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>ISI FORM</h2>
   <p>Isilah data di bawah ini</p>
   </div>
   <hr> 
    <form id="Login" method="GET" action="nilai_siswa.php">

        <div class="form-group">
            <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nim" placeholder="NIM" name="nim">
        </div>
        <div class="form-group">
            <select name="matkul" class="form-control" id="matkul" >
                <option value="DDP">Dasar-Dasar Pemrograman</option>
                <option value="BDI">Basis Data I</option>
                <option value="WEB1">Pemrograman Web</option>
            </select>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nilaiuts" placeholder="Nilai UTS" name="nilaiuts" value=""size="6">   
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nilaiuas" placeholder="Nilai UAS" name="nilaiuas" value=""size="6">   
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="nilaitugas" placeholder="Nilai Praktikum" name="nilaitugas" value=""size="6">   
        </div>
        <button type="submit" class="btn btn-primary"value="simpan" name="proses">submit</button>

    </form>
    </div>
</div></div></div>


</body>
</html>