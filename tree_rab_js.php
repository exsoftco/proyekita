<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <title></title>
  <link href="https://playground.anychart.com/docs/samples/GANTT_Events_01/iframe" rel="canonical">
  <meta content="Gantt Chart,Gantt Project Chart,Project Management" name="keywords">
  <meta content="AnyChart - JavaScript Charts designed to be embedded and integrated" name="description">
  <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  <link href="https://cdn.anychart.com/releases/8.11.0/css/anychart-ui.min.css?hcode=a0c21fc77e1449cc86299c5faa067dc4" rel="stylesheet" type="text/css">
  <style>html, body, #container {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
}</style>
 </head>
 <body>
  <div id="container"></div>
  
  <table style="width:100%">
  <tr>
    <td>



                    <div class="col-md-6">
                    <p style='color:blue;'>Detail Vendor / Upah , Minggu : 4 <h4 id="itemName"></h4></p>
                     </div>
                    <table class="table table-bordered" id="lima_besar" >
					
                        <thead class="table-grey">
                            <tr>
                            <th><p style="color: black;font-size: 14px;margin-bottom: 5px;">
                            Rekomendasi</p></th>
                            <th><p style="color: black;font-size: 14px;margin-bottom: 5px;">
                            Harga</p></th>
                            <th><p style="color: black;font-size: 14px;margin-bottom: 5px;">
                            Start</p></th>
                            <th><p style="color: black;font-size: 14px;margin-bottom: 5px;">
                            End</p></th>
                            </tr>
                         </thead>
                        <tr>
                            <td width="100px"><p style="color: blue;font-size: 10px;font-weight: bold; margin-bottom: 5px;">
                            TB. Mekar Pertama</p></td>
                            <td><p class="mt-1" style="color: blue;font-size: 10px;font-weight: bold; margin-bottom: 5px;">
                            224.000</p></td>
                            <td width="50px" height="30"><p style="color: blue;font-size: 10px;font-weight: bold; margin-bottom: 5px;">
                            01/03/2023</p></td>
                            <td><p style="color: blue;font-size: 10px;font-weight: bold; margin-bottom: 5px;">
                            11/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            TB. Muria Jaya</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            326.000</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            02/03/2023</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            13/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                             Group Mega Jaya</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            437.500</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            03/03/2023</p></td>
                            <td><p  style="color: black;font-size: 10px;margin-bottom: 5px;">
                            14/03/2023</p></td>
                        </tr>

                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Toko melan D</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            438.600</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            05/03/2023</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            15/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Agen Junto</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            237.500</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            13/03/2023</p></td>
                            <td><p  style="color: black;font-size: 10px;margin-bottom: 5px;">
                            15/03/2023</p></td>
                        </tr>
                   </table>
   
	<td>
                   <div class="col-md-6">
                    <p style='color:blue;'>Deskripsi Material</p>
                    </div>
                  <table class="table table-bordered" id="deskripsi_material">
                   </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;"><b>Stock</b></p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;"><b>72</b></p></td></tr>
                   </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Kondisi</p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">baru</p></td></tr>
                    </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Berat</p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">413 gram</p></td></tr>
                    </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Kategori</p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">gergaji</p></td></tr>                   
                    </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Etalase</p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">TOOLS</p></td></tr>                   
                    </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Gergaji</p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">kayu potong</p></td></tr>                   
                    </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Merk</p></td>
                        <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">keegan atau vpr </p></td></tr>
                    </tr><td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">Ukuran</p></td>
                    <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">18 inch</p></td></tr>

                    </table>	

	</td>
  </tr>
</table>

  
  
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-gantt.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-exports.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-ui.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script type="text/javascript">anychart.onDocumentReady(function () {

    // create data
    var data = [
      {
        id: "1",
        id2: "+",
        name: "1.Jasa & Bahan Umum Bekisting",
        actualStart: "2023-01-15",
        actualEnd: "2023-03-10",
		assignee: "Joko",
		harga: "345.000",
		vendor: "sendiri",
        children: [
          {
            id: "1_1",
            name: "1.1.Mandor 1",
			assignee: "Budi",
			harga: "34000",
			harga2: "35.000",
			harga3: "36.000",
			harga4: "37.000",
			harga5: "38.000",
            actualStart: "2023-01-15",
			vendor: "-",
            actualEnd: "2023-01-25",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "1_2",
            name: "1.2.Kenek 1",
			assignee: "Eny",
			harga: "24.500",
			harga2: "25.500",
			harga3: "26.500",
			harga4: "27.500",
			harga5: "28.500",
			vendor: "sendiri",
            actualStart: "2023-01-20",
            actualEnd: "2023-02-04",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "1_3",
            name: "1.3.Tukang Kepala 1",
			assignee: "Edhy",
			vendor: "sendiri",
			harga: "15.000",
 			harga2: "16.000",
			harga3: "17.000",
			harga4: "18.000",
			harga5: "19.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-05",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "1_4",
            name: "1.4.Tukang Serba Bisa 1",
			assignee: "Kartolo",
			vendor: "-",
			harga: "18.000",
			harga2: "19.000",
			harga3: "20.000",
			harga4: "21.000",
			harga5: "22.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-24",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "1_5",
            name: "1.5.Gergaji Kayu",
			assignee: "",
			harga: "17.000",
			harga2: "18.000",
			harga3: "19.000",
			harga4: "20.000",
			harga5: "21.000",
			vendor: "-",
            actualStart: "2023-02-25",
            actualEnd: "2023-03-10",
			rekomendasi1: "Agen Junto",
			rekomendasi2: "Agen Junto2",
			rekomendasi3: "Agen Junto3",
			rekomendasi4: "Agen Junto4",
			rekomendasi5: "Agen Junto5",
			stock:"120",
			kondisi:"bekas",
			berat:"10 kg",
			kategori:"alat potong",
			etalase:"CUTTING TOOLS",
			fungsi:"pemotong kayu",
			merk:"SWAN BRAND",
			ukuran:"15x50cm"
          }
      ]},
	  {
        id: "2",
        id2: "+",
        name: "2.Pemasangan Dinding Bata Merah",
 		assignee: "Agus",
		harga: "157.000",
        actualStart: "2023-01-15",
        actualEnd: "2023-03-10",
        children: [
          {
            id: "2_1",
            name: "2.1.Bata Merah ukuran 5x11x22 cm",
			assignee: "Sirma",
			harga: "90.000",
			harga2: "91.000",
			harga3: "92.000",
			harga4: "93.000",
			harga5: "94.000",
            actualStart: "2023-01-15",
            actualEnd: "2023-01-25",
			rekomendasi1: "Budi Jaya",
			rekomendasi2: "Budi Jaya2",
			rekomendasi3: "Budi Jaya3",
			rekomendasi4: "Budi Jaya4",
			rekomendasi5: "Budi Jaya5",
 			stock:"120.000",
			kondisi:"baru",
			berat:"5 kg",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"MIRI",
			ukuran:"2x3x5cm"
         },
          {
            id: "2_2",
            name: "2.2.Tukang Batu",
			assignee: "Sulistyo",
			harga: "80.000",
			harga2: "81.000",
			harga3: "82.000",
			harga4: "83.000",
			harga5: "84.000",
            actualStart: "2023-01-20",
            actualEnd: "2023-02-04",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "2_3",
            name: "2.3.Semen Tiga Roda",
			assignee: "Sarwendah",
			harga: "60.000",
			harga1: "61.000",
			harga2: "62.000",
			harga3: "63.000",
			harga4: "64.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-05",
			rekomendasi1: "Salak Abadi",
			rekomendasi2: "Salak Abadi2",
			rekomendasi3: "Salak Abadi3",
			rekomendasi4: "Salak Abadi4",
			rekomendasi5: "Salak Abadi5",
  			stock:"1.000",
			kondisi:"baru",
			berat:"50 kg",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"TIGA RODA",
			ukuran:"50x30x5cm"
			},
          {
            id: "2_4",
            name: "2.4.Pasir ",
			assignee: "Suroso",
			harga: "33.000",
			harga2: "34.000",
			harga3: "35.000",
			harga4: "36.000",
			harga5: "37.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-24",
			rekomendasi1: "Permata Bangunan",
			rekomendasi2: "Permata Bangunan2",
			rekomendasi3: "Permata Bangunan3",
			rekomendasi4: "Permata Bangunan4",
			rekomendasi5: "Permata Bangunan5",
  			stock:"1.000 M3",
			kondisi:"baru",
			berat:"",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"",
			ukuran:""
          },
          {
            id: "2_5",
            name: "2.5.Kenek",
 			assignee: "Singgih",
 			harga: "22.000",
 			harga2: "23.000",
 			harga3: "24.000",
 			harga4: "25.000",
 			harga5: "26.000",
            actualStart: "2023-02-25",
            actualEnd: "2023-03-10",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          }
      ]},
	  {
        id: "3",
        id2: "+",
        name: "3.Pemasangan Dinding Bata Merah",
 		assignee: "Aming",
		harga: "157.000",
        actualStart: "2023-01-15",
        actualEnd: "2023-03-10",
        children: [
          {
            id: "3_1",
            name: "3.1.Bata Merah ukuran 5x11x22 cm",
			assignee: "Sirma",
			harga: "90.000",
			harga2: "91.000",
			harga3: "92.000",
			harga4: "93.000",
			harga5: "94.000",
            actualStart: "2023-01-15",
            actualEnd: "2023-01-25",
			rekomendasi1: "Salak Bangunan",
			rekomendasi2: "Salak Bangunan2",
			rekomendasi3: "Salak Bangunan3",
			rekomendasi4: "Salak Bangunan4",
			rekomendasi5: "Salak Bangunan5",
 			stock:"100.000",
			kondisi:"baru",
			berat:"5 kg",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"MIRI",
			ukuran:"2x3x5cm"
          },
          {
            id: "3_2",
            name: "3.2.Tukang Batu",
			assignee: "Sulistyo",
			harga: "80.000",
			harga2: "81.000",
			harga3: "82.000",
			harga4: "83.000",
			harga5: "84.000",
            actualStart: "2023-01-20",
            actualEnd: "2023-02-04",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "3_3",
            name: "3.3.Semen Tiga Roda",
			assignee: "Sarwendah",
			harga: "60.000",
			harga2: "61.000",
			harga3: "62.000",
			harga4: "63.000",
			harga5: "64.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-05",
			rekomendasi1: "Ciputat Jaya",
			rekomendasi2: "Ciputat Jaya2",
			rekomendasi3: "Ciputat Jaya3",
			rekomendasi4: "Ciputat Jaya4",
			rekomendasi5: "Ciputat Jaya5",
  			stock:"4.000",
			kondisi:"baru",
			berat:"50 kg",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"TIGA RODA",
			ukuran:"50x30x5cm"
			},
          {
            id: "3_4",
            name: "3.4.Pasir ",
			assignee: "Suroso",
			harga: "33.000",
			harga2: "34.000",
			harga3: "35.000",
			harga4: "36.000",
			harga5: "37.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-24",
			rekomendasi1: "Muncul Jaya",
			rekomendasi2: "Muncul Jaya2",
			rekomendasi3: "Muncul Jaya3",
			rekomendasi4: "Muncul Jaya4",
			rekomendasi5: "Muncul Jaya5",
  			stock:"900 M3",
			kondisi:"baru",
			berat:"",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"",
			ukuran:""
			},
          {
            id: "3_5",
            name: "3.5.Kenek",
 			assignee: "Suroso",
 			harga: "22.000",
 			harga2: "23.000",
 			harga3: "24.000",
 			harga4: "25.000",
 			harga5: "26.000",
            actualStart: "2023-02-25",
            actualEnd: "2023-03-10",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          }
      ]},
	  
	  	  {
        id: "4",
        id2: "+",
        name: "4.Pemasangan Dinding Bata Merah",
 		assignee: "Anis",
		harga: "157.000",
        actualStart: "2023-01-15",
        actualEnd: "2023-03-10",
        children: [
          {
            id: "4_1",
            name: "4.1.Bata Merah ukuran 5x11x22 cm",
			assignee: "Sirma",
			harga: "90.000",
			harga2: "91.000",
			harga3: "92.000",
			harga4: "93.000",
			harga5: "94.000",
            actualStart: "2023-01-15",
            actualEnd: "2023-01-25",
			rekomendasi1: "Ketimun Jaya",
			rekomendasi2: "Ketimun Jaya2",
			rekomendasi3: "Ketimun Jaya3",
			rekomendasi4: "Ketimun Jaya4",
			rekomendasi5: "Ketimun Jaya5",
 			stock:"150.000",
			kondisi:"baru",
			berat:"5 kg",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"MIRI",
			ukuran:"2x3x5cm"          },
          {
            id: "4_2",
            name: "4.2.Tukang Batu",
			assignee: "Sulistyo",
			harga: "80.000",
			harga2: "81.000",
			harga3: "82.000",
			harga4: "83.000",
			harga5: "84.000",
            actualStart: "2023-01-20",
            actualEnd: "2023-02-04",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          },
          {
            id: "4_3",
            name: "4.3.Semen Tiga Roda",
			assignee: "Sarwendah",
			harga: "60.000",
			harga2: "61.000",
			harga3: "62.000",
			harga4: "63.000",
			harga5: "64.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-05",
			rekomendasi1: "Ketapang Jaya",
			rekomendasi2: "Ketapang Jaya2",
			rekomendasi3: "Ketapang Jaya3",
			rekomendasi4: "Ketapang Jaya4",
			rekomendasi5: "Ketapang Jaya5"
          },
          {
            id: "4_4",
            name: "4.4.Pasir ",
			assignee: "Suroso",
			harga: "33.000",
			harga2: "34.000",
			harga3: "35.000",
			harga4: "36.000",
			harga5: "37.000",
            actualStart: "2023-02-05",
            actualEnd: "2023-02-24",
			rekomendasi1: "Gilimanuk Jaya",
			rekomendasi2: "Gilimanuk Jaya2",
			rekomendasi3: "Gilimanuk Jaya3",
			rekomendasi4: "Gilimanuk Jaya4",
			rekomendasi5: "Gilimanuk Jaya5",
  			stock:"900 M3",
			kondisi:"baru",
			berat:"",
			kategori:"bahan bangunan",
			etalase:"MATERIALS",
			fungsi:"komponen dinding",
			merk:"",
			ukuran:""          },
          {
            id: "4_5",
            name: "4.5.Kenek",
 			assignee: "Suratno",
 			harga: "22.000",
 			harga2: "23.000",
 			harga3: "24.000",
 			harga4: "25.000",
 			harga5: "26.000",
            actualStart: "2023-02-25",
            actualEnd: "2023-03-10",
			rekomendasi1: "",
			rekomendasi2: "",
			rekomendasi3: "",
			rekomendasi4: "",
			rekomendasi5: "",
			stock:"",
			kondisi:"",
			berat:"",
			kategori:"",
			etalase:"",
			fungsi:"",
			merk:"",
			ukuran:""
          }
      ]}

    ];
    
    // create a data tree
    var treeData = anychart.data.tree(data, "as-tree");

    // create a chart
    var chart = anychart.ganttProject();
	
	var g_itemCode = "success";
    
    // set the data
    chart.data(treeData);

  // configure the first data grid column
    column_1 = chart.dataGrid().column(0);
    column_1.setColumnFormat("name", "text");
    column_1.title("Task");
    column_1.title().fontSize(11);

    // configure the second data grid column
    column_2 = chart.dataGrid().column(1);
    column_2.setColumnFormat("assignee", "short-text");
    column_2.title().useHtml(true);
    column_2.title("Assignee");
    column_2.title().fontSize(11);
    column_2.depthPaddingMultiplier(0);
    column_2.collapseExpandButtons(false);

    // add and configure the third data grid column
    column_3 = chart.dataGrid().column(2);
    column_3.setColumnFormat("vendor", "direct-numbering");
    column_3.title().useHtml(true);
    column_3.title("Vendor");
    column_3.title().fontSize(11);
    column_3.title().wordWrap("break-word");
    //column_3.title().padding(7);

    // add and configure the third data grid column
    column_4 = chart.dataGrid().column(3);
    column_4.setColumnFormat("harga", "direct-numbering");
    column_4.title().useHtml(true);
    column_4.title("Harga Vendor");
    column_4.title().fontSize(11);
    column_4.title().wordWrap("break-word");
	column_4.title().hAlign('right');
 //column_4.title().padding(7);

    // configure the scale
    chart.getTimeline().scale().maximum("2023-03-15");

    // set the chart title
    //chart.title().useHtml(true);
    //chart.title("Events: Chart<br><br>");
    //chart.title().padding(11);

    /* listen to the rowMouseOver event
    and update the chart title */
    //chart.listen("rowMouseOver", function (e) {
    //  var itemName = e.item.get("name");
    //  chart.title("Events: Chart<br><br>" +
    //              "< <span style = 'color:#990000'>" +
    //              itemName + "</span>: rowMouseOver >");
    //});

    /* listen to the rowClick event
    and update the chart title */
    chart.listen("rowClick", function (e) {
      var itemName = e.item.get("name");
      var itemCode = e.item.get("id");
      var itemRekomendasi1 = e.item.get("rekomendasi1");
      var itemRekomendasi2 = e.item.get("rekomendasi2");
      var itemRekomendasi3 = e.item.get("rekomendasi3");
      var itemRekomendasi4 = e.item.get("rekomendasi4");
      var itemRekomendasi5 = e.item.get("rekomendasi5");
	  var itemHarga = e.item.get("harga");
	  var itemHarga2 = e.item.get("harga2");
	  var itemHarga3 = e.item.get("harga3");
	  var itemHarga4 = e.item.get("harga4");
	  var itemHarga5 = e.item.get("harga5");
	  var	itemstock=e.item.get("stock");
		var	itemkondisi=e.item.get("kondisi");
		var	itemberat=e.item.get("berat");
		var	itemkategori=e.item.get("kategori");
		var	itemetalase=e.item.get("etalase");
		var	itemfungsi=e.item.get("fungsi");
		var	itemmerk=e.item.get("merk");
		var	itemukuran=e.item.get("ukuran");
		
      var table = document.getElementById("lima_besar"),rIndex;
      var table2 = document.getElementById("deskripsi_material"),rIndex;


		//var mysql = require('mysql');

/* 		var con = mysql.createConnection({
		  host: "localhost",
		  user: "xsoftco1",
		  password: "Jalan__Jambu__35",
		  database: "xsoftco1_esg"
		});

		con.query("SELECT * FROM ms_product", function (err, result, fields) {
		if (err) throw err;
			console.log(result[2].prodname);
			table.rows[1].cells[0].innerHTML = result[2].prodname;
		}); */
	  
	  //chart.title("Events: Chart<br><br>" + "< <span style = 'color:#990000'>" +  itemName + "</span>: rowClick >");
// 	  document.getElementById("itemName").innerHTML=itemName;
 	  //document.getElementById("itemCode").innerHTML=itemCode;
 	  //document.getElementById("nama_toko1").innerHTML=itemName;   
	  
	            table.rows[1].cells[0].innerHTML = itemRekomendasi1;
				table.rows[1].cells[0].style.fontSize = "12px";
				table.rows[1].cells[0].style.fontColor = "blue";
				
	            table.rows[2].cells[0].innerHTML = itemRekomendasi2;
				table.rows[2].cells[0].style.fontSize = "12px";
	            table.rows[3].cells[0].innerHTML = itemRekomendasi3;
				table.rows[3].cells[0].style.fontSize = "12px";
	            table.rows[4].cells[0].innerHTML = itemRekomendasi4;
				table.rows[4].cells[0].style.fontSize = "12px";
	            table.rows[5].cells[0].innerHTML = itemRekomendasi5;
				table.rows[5].cells[0].style.fontSize = "12px";

	            table.rows[1].cells[1].innerHTML = itemHarga;
				table.rows[1].cells[1].style.fontSize = "12px";
	            table.rows[2].cells[1].innerHTML = itemHarga2;
				table.rows[2].cells[1].style.fontSize = "12px";
	            table.rows[3].cells[1].innerHTML = itemHarga3;
				table.rows[3].cells[1].style.fontSize = "12px";
	            table.rows[4].cells[1].innerHTML = itemHarga4;
				table.rows[4].cells[1].style.fontSize = "12px";
	            table.rows[5].cells[1].innerHTML = itemHarga5;
				table.rows[5].cells[1].style.fontSize = "12px";

	            table2.rows[0].cells[1].innerHTML = itemstock;
				table2.rows[0].cells[1].style.fontSize = "12px";
	            table2.rows[1].cells[1].innerHTML = itemkondisi;
				table2.rows[1].cells[1].style.fontSize = "12px";
	            table2.rows[2].cells[1].innerHTML = itemberat;
				table2.rows[2].cells[1].style.fontSize = "12px";
	            table2.rows[3].cells[1].innerHTML = itemkategori;
				table2.rows[3].cells[1].style.fontSize = "12px";
	            table2.rows[4].cells[1].innerHTML = itemetalase;
				table2.rows[4].cells[1].style.fontSize = "12px";
	            table2.rows[5].cells[1].innerHTML = itemfungsi;
				table2.rows[5].cells[1].style.fontSize = "12px";				//table2.rows[1].cells[0].innerHTML = document.getElementById("itemName").value;
	            table2.rows[6].cells[1].innerHTML = itemmerk;
				table2.rows[6].cells[1].style.fontSize = "12px";		            
				table2.rows[7].cells[1].innerHTML = itemukuran;
				table2.rows[7].cells[1].style.fontSize = "12px";	                //table2.rows[1].cells[2].innerHTML = document.getElementById("itemCode").value;
                //table.rows[rIndex].cells[2].innerHTML = document.getElementById("age").value;

	  
	  
	  
	  });

    /* listen to the rowDblClick event
    and update the chart title */
    chart.listen("rowDblClick", function (e) {
      var itemName = e.item.get("name");
     // chart.title("Events: Chart<br><br>" +  "< <span style = 'color:#990000'>" + itemName + "</span>: rowDblClick >");
    });

    /* listen to the rowCollapseExpand event
    and update the chart title */
    chart.listen("rowCollapseExpand", function (e) {
      var itemName = e.item.get("name");
      //chart.title("Events: Chart<br><br>" + "< <span style = 'color:#990000'>" + itemName + "</span>: rowCollapseExpand >");
    });

    // set the container id
    chart.container("container");

    // initiate drawing the chart
    chart.draw();

    // fit elements to the width of the timeline
    chart.fitAll();
});</script>










 </body>
</html>