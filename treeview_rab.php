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
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-base.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-gantt.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-exports.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script src="https://cdn.anychart.com/releases/8.11.0/js/anychart-ui.min.js?hcode=a0c21fc77e1449cc86299c5faa067dc4"></script>
  <script type="text/javascript">anychart.onDocumentReady(function () {

    // create data
    var data = [
      {
        id: "1",
        name: "1.Jasa & Bahan Umum Bekisting",
        actualStart: "2018-01-15",
        actualEnd: "2018-03-10",
		assignee: "Joko",
		harga: "345.000",
		vendor: "sendiri",
        children: [
          {
            id: "1_1",
            name: "1.1.Mandor 1",
			assignee: "Budi",
			harga: "34.000",
            actualStart: "2018-01-15",
			vendor: "-",
            actualEnd: "2018-01-25"
          },
          {
            id: "1_2",
            name: "1.2.Kenek 1",
			assignee: "Eny",
			harga: "24.500",
			vendor: "sendiri",
            actualStart: "2018-01-20",
            actualEnd: "2018-02-04"
          },
          {
            id: "1_3",
            name: "1.3.Tukang Kepala 1",
			assignee: "Edhy",
			vendor: "sendiri",
			harga: "15.000",
           actualStart: "2018-02-05",
            actualEnd: "2018-02-05"
          },
          {
            id: "1_4",
            name: "1.4.Tukang Serba Bisa 1",
			assignee: "Kartinah",
			vendor: "-",
			harga: "18.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-24"
          },
          {
            id: "1_5",
            name: "1.5.Gergaji Kayu",
			assignee: "Heru",
			harga: "17.000",
			vendor: "-",
            actualStart: "2018-02-25",
            actualEnd: "2018-03-10"
          }
      ]},
	  {
        id: "2",
        name: "2.Pemasangan Dinding Bata Merah",
 		assignee: "Anis",
		harga: "157.000",
        actualStart: "2018-01-15",
        actualEnd: "2018-03-10",
        children: [
          {
            id: "2_1",
            name: "2.1.Bata Merah ukuran 5x11x22 cm",
			assignee: "Sirma",
			harga: "90.000",
            actualStart: "2018-01-15",
            actualEnd: "2018-01-25"
          },
          {
            id: "2_2",
            name: "2.2.Tukang Batu",
			assignee: "Sulistyo",
			harga: "80.000",
            actualStart: "2018-01-20",
            actualEnd: "2018-02-04"
          },
          {
            id: "2_3",
            name: "2.3.Semen Tiga Roda",
			assignee: "Sarwendah",
			harga: "60.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-05"
          },
          {
            id: "2_4",
            name: "2.4.Pasir ",
			assignee: "Suroso",
			harga: "33.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-24"
          },
          {
            id: "2_5",
            name: "2.5.Kenek",
 			assignee: "Singgih",
 			harga: "22.000",
            actualStart: "2018-02-25",
            actualEnd: "2018-03-10"
          }
      ]},
	  {
        id: "3",
        name: "3.Pemasangan Dinding Bata Merah",
 		assignee: "Anis",
		harga: "157.000",
        actualStart: "2018-01-15",
        actualEnd: "2018-03-10",
        children: [
          {
            id: "3_1",
            name: "3.1.Bata Merah ukuran 5x11x22 cm",
			assignee: "Sirma",
			harga: "90.000",
            actualStart: "2018-01-15",
            actualEnd: "2018-01-25"
          },
          {
            id: "3_2",
            name: "3.2.Tukang Batu",
			assignee: "Sulistyo",
			harga: "80.000",
            actualStart: "2018-01-20",
            actualEnd: "2018-02-04"
          },
          {
            id: "3_3",
            name: "3.3.Semen Tiga Roda",
			assignee: "Sarwendah",
			harga: "60.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-05"
          },
          {
            id: "3_4",
            name: "3.4.Pasir ",
			assignee: "Suroso",
			harga: "33.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-24"
          },
          {
            id: "3_5",
            name: "3.5.Kenek",
 			assignee: "Singgih",
 			harga: "22.000",
            actualStart: "2018-02-25",
            actualEnd: "2018-03-10"
          }
      ]},
	  
	  	  {
        id: "4",
        name: "4.Pemasangan Dinding Bata Merah",
 		assignee: "Anis",
		harga: "157.000",
        actualStart: "2018-01-15",
        actualEnd: "2018-03-10",
        children: [
          {
            id: "4_1",
            name: "4.1.Bata Merah ukuran 5x11x22 cm",
			assignee: "Sirma",
			harga: "90.000",
            actualStart: "2018-01-15",
            actualEnd: "2018-01-25"
          },
          {
            id: "4_2",
            name: "4.2.Tukang Batu",
			assignee: "Sulistyo",
			harga: "80.000",
            actualStart: "2018-01-20",
            actualEnd: "2018-02-04"
          },
          {
            id: "4_3",
            name: "4.3.Semen Tiga Roda",
			assignee: "Sarwendah",
			harga: "60.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-05"
          },
          {
            id: "4_4",
            name: "4.4.Pasir ",
			assignee: "Suroso",
			harga: "33.000",
            actualStart: "2018-02-05",
            actualEnd: "2018-02-24"
          },
          {
            id: "4_5",
            name: "4.5.Kenek",
 			assignee: "Singgih",
 			harga: "22.000",
            actualStart: "2018-02-25",
            actualEnd: "2018-03-10"
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
    chart.getTimeline().scale().maximum("2018-03-15");

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
      //chart.title("Events: Chart<br><br>" + "< <span style = 'color:#990000'>" +  itemName + "</span>: rowClick >");
 	  document.getElementById("itemName").innerHTML=itemName;
 	  document.getElementById("itemCode").innerHTML=itemCode;
 	  document.getElementById("g_itemCode").innerHTML=itemCode;   });

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

<script>
//var p1 = "success";
</script>

<?php
echo "<script>document.writeln(g_itemCode);</script>";
?>
<table style="width:100%">
  <tr>
    <td>



                    <div class="col-md-6">
                    <p style='color:blue;'>Detail Vendor / Upah , Minggu : 4 <h4 id="itemName"></h4><//p>
                     </div>
                    <table class="table table-bordered" >
					
                        <thead class="table-grey">
                                        <tr>
                                            <th><center><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            Rekomendasi</p></center></th>
                                            <th><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            Harga</p></th>
                                            <th><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            Start</p></th>
                                            <th><p style="color: black;font-size: 12px;margin-bottom: 5px;">
                            End</p></th>
                                        </tr>
                         </thead>
                        <tr>
                            <td width="100px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;"><?php 
							echo "<script>document.writeln(g_itemCode);</script>;" ?></p></td>
                            <td><p class="mt-1" style="color: black;font-size: 10px;margin-bottom: 5px;">
                            224.000</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            01/03/2023</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            11/03/2023</p></td>
                        </tr>
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Dist. hapapis</p></td>
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
                        <tr>
                            <td width="100px"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            Budi Jaya</p></td>
                            <td><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            257.500</p></td>
                            <td width="50px" height="30"><p style="color: black;font-size: 10px;margin-bottom: 5px;">
                            12/03/2023</p></td>
                            <td><p  style="color: black;font-size: 10px;margin-bottom: 5px;">
                            21/03/2023</p></td>
                        </tr>
                   </table>
   
	<td>
                   <div class="col-md-6">
                    <p style='color:blue;'>Deskripsi Material</p>
                    </div>
                  <table class="table table-bordered" >
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








 </body>
</html>