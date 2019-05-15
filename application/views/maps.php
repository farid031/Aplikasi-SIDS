<!DOCTYPE html>
<html>
<head>
	<title>Tugas SIDS</title>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAZEM-2KXHM2uyXewPuwQwIWEQD7RZXuYE"
	  type="text/javascript">
	</script> 
	<script type="text/javascript">
      var map;
      function init(){
        map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 2,
          center: new google.maps.LatLng(20.320795, 90.731386),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var features = [
        <?php foreach($get_data->result() as $row){ ?>
          {
            position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
            type: 'info',
            title : '<?php echo $row->device_id;?>'
          },
        <?php } ?>
        ];

        // Create markers.
        features.forEach(function(feature) {
          <?php foreach ($get_data->result() as $row) {
            if ($row->gender != 'F') {?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/red_flag.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } else { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/blue_flag.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php }
            } ?>
        });
      }
      google.maps.event.addDomListener(window, 'load', init);

      function male(){
        map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 2,
          center: new google.maps.LatLng(20.320795, 90.731386),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var features = [
        <?php foreach($m->result() as $row){ ?>
          {
            position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
            type: 'info',
            title : '<?php echo $row->device_id;?>'
          },
        <?php } ?>
        ];

        // Create markers.
        features.forEach(function(feature) {
          <?php foreach ($m->result() as $row) {
            if ($row->gender != 'F') {?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/red_flag.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } else { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/blue_flag.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php }
            } ?>
        });
      }

      function female(){
        map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 2,
          center: new google.maps.LatLng(20.320795, 90.731386),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var features = [
        <?php foreach($f->result() as $row){ ?>
          {
            position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
            type: 'info',
            title : '<?php echo $row->device_id;?>'
          },
        <?php } ?>
        ];

        // Create markers.
        features.forEach(function(feature) {
          <?php foreach ($f->result() as $row) {
            if ($row->gender != 'F') {?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/red_flag.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } else { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/blue_flag.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php }
            } ?>
        });
      }    

      function umur(){
        map = new google.maps.Map(document.getElementById('maps'), {
          zoom: 2,
          center: new google.maps.LatLng(20.320795, 90.731386),
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var features = [
        <?php foreach($get_data->result() as $row){ ?>
          {
            position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
            type: 'info',
            title : '<?php echo $row->device_id;?>'
          },
        <?php } ?>
        ];

        // Create markers.
        features.forEach(function(feature) {
          <?php foreach ($get_data->result() as $row) {
            if ($row->age >= 11 && $row->age <= 20) {?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/11-20.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 21 && $row->age <= 30) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/21-30.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 31 && $row->age <= 40) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/31-40.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 41 && $row->age <= 50) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/41-50.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 51 && $row->age <= 60) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/51-60.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 61 && $row->age <= 70) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/61-70.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 71 && $row->age <= 80) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/71-80.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php } elseif($row->age >= 81 && $row->age <= 90) { ?>
                var marker = new google.maps.Marker({
                position: new google.maps.LatLng(<?php echo $row->latitude;?>,<?php echo $row->longitude;?>),
                icon: "assets/81-90.png",
                title: '<?php echo "ID Event: $row->event_id".'\n'."ID Device: $row->device_id".'\n'."Gender: $row->gender".'\n'."Age: $row->age"; ?>',
                map: map
              });
              <?php }
            } ?>
        });
      }    
    </script>
</head>
<body>
	<div id="maps" style="width: 100%; height: 500px;"></div>
  <div style="padding-top: 10px;">
    <table>
      <tr>
        <td><button onclick="init()">All Data</button></td>
        <td><button onclick="male()">Male</button></td>
        <td><button onclick="female()">Female</button></td>
        <td><button onclick="umur()">Umur</button></td>
      </tr>
    </table>
  </div>
  <div style="padding-top: 10px;">
    <table border="1px">
      <tr>
        <td style="font-weight: bold;" colspan="2">Jumlah Jenis Kelamin</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Jumlah Male</td>
        <td><?php echo $jml_m; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Jumlah Female</td>
        <td><?php echo $jml_f; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Jumlah Total</td>
        <td><?php echo $jml; ?></td>
      </tr>
    </table>
  </div>
  <div style="padding-top: 10px;">
    <table border="1px">
      <tr>
        <td style="font-weight: bold;" colspan="3">Jumlah Umur</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">11-20 tahun</td>
        <td><?php echo $jml_11_20; ?></td>
        <td><img src="./assets/11-20.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">21-30 tahun</td>
        <td><?php echo $jml_21_30; ?></td>
        <td><img src="./assets/21-30.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">31-40 tahun</td>
        <td><?php echo $jml_31_40; ?></td>
        <td><img src="./assets/31-40.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">41-50 tahun</td>
        <td><?php echo $jml_41_50; ?></td>
        <td><img src="./assets/41-50.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">51-60 tahun</td>
        <td><?php echo $jml_51_60; ?></td>
        <td><img src="./assets/51-60.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">61-70 tahun</td>
        <td><?php echo $jml_61_70; ?></td>
        <td><img src="./assets/61-70.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">71-80 tahun</td>
        <td><?php echo $jml_71_80; ?></td>
        <td><img src="./assets/71-80.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">81-90 tahun</td>
        <td><?php echo $jml_81_90; ?></td>
        <td><img src="./assets/81-90.png"></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Jumlah total</td>
        <td><?php echo $jml; ?></td>
      </tr>
    </table>
    <div style="padding-top: 10px;">
    <table border="1px">
      <tr>
        <td style="font-weight: bold;" colspan="2">Jumlah Grup</td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F23-</td>
        <td><?php echo $jml_g1; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F24-26</td>
        <td><?php echo $jml_g2; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F27-28</td>
        <td><?php echo $jml_g3; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F29-32</td>
        <td><?php echo $jml_g4; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F33-42</td>
        <td><?php echo $jml_g5; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F43+</td>
        <td><?php echo $jml_g6; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">M22-</td>
        <td><?php echo $jml_g7; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">M23-26</td>
        <td><?php echo $jml_g8; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">F27-28</td>
        <td><?php echo $jml_g9; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">M29-31</td>
        <td><?php echo $jml_g10; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">M32-38</td>
        <td><?php echo $jml_g11; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">M39+</td>
        <td><?php echo $jml_g12; ?></td>
      </tr>
      <tr>
        <td style="font-weight: bold;">Jumlah total</td>
        <td><?php echo $jml; ?></td>
      </tr>
    </table>
  </div>
  <div style="padding-top: 10px;">
    <table border="1px">
      <th>No.</th>
      <th>Event ID</th>
      <th>Device ID</th>
      <th>Timestamp</th>
      <th>Latitude</th>
      <th>Longitude</th>
      <th>Gender</th>
      <th>Age</th>
      <th>Group</th>
      <?php $no = 1; 
      foreach ($get_data->result() as $row) { ?>
        <tr>
          <td><?php echo $no++; ?></td>
          <td><?php echo $row->event_id; ?></td>
          <td><?php echo $row->device_id; ?></td>
          <td><?php echo $row->timestamp; ?></td>
          <td><?php echo $row->latitude; ?></td>
          <td><?php echo $row->longitude; ?></td>
          <td><?php echo $row->gender; ?></td>
          <td><?php echo $row->age; ?></td>
          <td><?php echo $row->grup; ?></td>
        </tr>
     <?php } ?>
    </table>
  </div>
</body>
</html>