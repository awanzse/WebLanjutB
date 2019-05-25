@ -20,9 +20,6 @@ class suratno extends CI_Controller {
	 */
	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->view("data_view");
	}
	public function Biodata()
	{
		echo (
}
  43  application/views/data_view.php 
@@ -0,0 +1,43 @@
<html>
<head>
<title>Membuat Biodata Sederhana</title>
</head>
<body>
<form action="#" style="width: 700px"class="posisi";>
<fieldset class="h"/>
<table style="width: 600px;">
<body style="background-color:green"> </body>
</tr>
<center>
<font size="25px">
<b>BIODATA MAHASISWA</b>
</font>
</center>
<tr>
<td><b>NAMA</b></td>
<td>:   SUCI PRIMADONA</td>
</tr>
<tr>
<td><b>NIM</b></td>
<td>:   1637037</td>
</tr>
<tr>
<td><b>TTL</b></td>
<td>:   Pekanbaru, 27 Juli 1998</td>
</tr>
<tr>
<td><b>ALAMAT</b></td>
<td>:   Jalan Kihajar Dewantara no.43</td>
</tr>
<tr>
<td><b>JENIS KELAMIN</b></td>
<td>:   Perempuan</td>
</tr>
<tr>
<td><b>AGAMA</b></td>
<td>:   Islam</td>
</tr>
<td><b>Motivasi</b></td>
<td>:   Membahagiakan orang tua, keluarga dan calon imam nanti</td>
</tr>
<tr>
    </thead>
    <tbody>
    </body>
</html> 