

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
          <a href="<?= base_url('c_tempat_ibadah/masjid'); ?>" class="btn btn-info mb-2"><i class="fa fa-arrow-left"></i> Kembali</a> 
            <!-- <h3 class="font-weight-bold mt-3">Edit Data Masjid</h3> -->
           
<div class="row">
  <div class="col-sm-7">
    

    <div class="card">

            <div class="card-header">
            
                <h4>Pilih lokasi:</h4>      
              
            </div>


                <div id="mapid" style="height: 450px;"></div>
            
    </div>


  </div>

  <div class="col-sm-5">
    

    <div class="card">
            <div class="card-header">
            
                <h4>Isi data:</h4>      
              
            </div>

            <div class="card-body">
            
            <?= form_open_multipart(); ?>
            <input type="hidden" name="id_tempat_ibadah" value=" <?= $tempat_ibadah['ti_id']; ?>">
                
              <label for="basic-url">Tipologi</label>
              <div class="form-group">
                        <select class="custom-select " id="tipologi" name="scrolltip">
                          <?php foreach($list_tipologi as $t ) : ?>
                            <?php if($t == $tempat_ibadah['ti_tipologi']) : ?>
                              <option value="<?= $t; ?>" selected><?= $t; ?></option>
                            <?php else : ?>
                              <option value="<?= $t; ?>"><?= $t; ?></option>
                            <?php endif; ?>
                          <?php endforeach; ?>
                        </select>
              </div>

              <label for="basic-url">Nama Masjid</label>
              <div class="form-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="nama_masjid" value="<?= $tempat_ibadah['ti_nama']; ?>">
                <?= form_error('nama_masjid', '<small class="text-danger">', '</small>'); ?>
              </div>

              <label for="basic-url">Alamat</label>
              <div class="form-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="alamat" value="<?= $tempat_ibadah['ti_alamat']; ?>">
                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
              </div>

              <div class="btn-group">
                <div class="form-group mr-1">
                  <label for="basic-url">Kabupaten</label>
                  <select class="custom-select " id="kabupaten" name="scrollkab" onchange="get_peta_by_kab()">
                   <?php foreach($list_kabupaten as $kab) : ?>
                      <?php if($kab['kab_id'] == $tempat_ibadah['ti_kabupaten']) : ?>
                        <option value="<?= $kab['kab_id']; ?>" selected><?= $kab['kab_nama']; ?></option>
                      <?php else : ?>
                        <option value="<?= $kab['kab_id']; ?>"><?= $kab['kab_nama']; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="form-group">
                <label for="basic-url">Kecamatan</label>
                  <select class="custom-select " id="kecamatan" name="scrollkec">
                    <?php foreach($list_kecamatan as $kec) : ?>
                      <?php if($kec['kec_id'] == $tempat_ibadah['ti_kecamatan']) : ?>
                        <option value="<?= $kec['kec_id']; ?>" selected><?= $kec['kec_nama']; ?></option>
                      <?php else : ?>
                        <option value="<?= $kec['kec_id']; ?>"><?= $kec['kec_nama']; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              
              <div class="btn-group">
                <div class="form-group mr-1">
                  <label for="basic-url">Latitude</label>
                  <input type="text" class="form-control" id="Latitude" aria-describedby="basic-addon3" name="latitude" value="<?= $tempat_ibadah['latitude']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="basic-url">Longitude</label>
                  <input type="text" class="form-control" id="Longitude" aria-describedby="basic-addon3" name="longitude" value="<?= $tempat_ibadah['longitude']; ?>" readonly>
                </div>
              </div>
            </div>
    </div>
  </div>
</div>

<div class="card">
    <div class="card-body">

              <label for="basic-url">Luas tanah</label>
              <div class="form-group">
                <input type="tesxt" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="luas_tanah" value="<?= $tempat_ibadah['ti_luas_tanah']; ?>">
              </div>
              
              <label for="basic-url">Status tanah</label>
              <div class="form-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="status_tanah" value="<?= $tempat_ibadah['ti_status_tanah']; ?>">
              </div>

              <label for="basic-url">Luas bangunan</label>
              <div class="form-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="luas_bangunan" value="<?= $tempat_ibadah['ti_luas_bangunan']; ?>">
              </div>

              <label for="basic-url">Tahun berdiri</label>
              <div class="form-group">
                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="tahun_berdiri" value="<?= $tempat_ibadah['ti_tahun_berdiri']; ?>">
              </div>

              <label for="basic-url">Jamaah</label>
              <div class="form-group">
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="jamaah" value="<?= $tempat_ibadah['ti_jamaah']; ?>">
              </div>

              <label for="basic-url">Imam</label>
              <div class="form-group">
                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="imam" value="<?= $tempat_ibadah['ti_imam']; ?>">
              </div>

              <label for="basic-url">Khatib</label>
              <div class="form-group">
                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="khatib" value="<?= $tempat_ibadah['ti_khatib']; ?>">
              </div>

              <label for="basic-url">Remaja</label>
              <div class="form-group">
                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="remaja" value="<?= $tempat_ibadah['ti_remaja']; ?>">
              </div>

              <label for="basic-url">No. Telepon</label>
              <div class="form-group">
                <input type="number" class="form-control" id="basic-url" aria-describedby="basic-addon3" name="telepon" value="<?= $tempat_ibadah['ti_telepon']; ?>">
              </div>

             

              <label for="basic-url">Foto</label>
              <div class="mb-2">
              <img src="<?= base_url('assets/foto/tempat_ibadah/').$tempat_ibadah['ti_foto']; ?>" width="100" class="card-img" style="width: 10rem;"> 
              </div>
              <div class="custom-file">
                <input type="file" accept="image/*" class="custom-file-input" name="foto">
                <label class="custom-file-label" for="customFile">Pilih foto</label>
              </div>
              <hr>
              <div class="row float-right mr-1"> 
                  <button type="submit" class="btn btn-primary">Simpan</button>   
              </div>
            <?= form_close(); ?>
          </div>

    </div>
  </div>
</div>
    







        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
<script> 



    var edit_lat = $("#Latitude").val();
    var edit_long = $("#Longitude").val();


    function get_peta_by_kab() {

      var id_kab = $("#kabupaten").val();
        

      if(id_kab.length != 0){
        // console.log("ini kab ="+id_kab);
        get_kab_by_id(id_kab);
      }
      else{
        // console.log("kosong");
        getData_peta();
      }

    }

 getData_peta();

  function get_kab_by_id(kab){
    
    $.ajax({
          url: "<?php echo base_url(); ?>c_dashboard/load_kab_by",
          type: "post",
          data: {id_kab: kab},
          dataType: "json",
          success: function(data) {
              // console.log(data.kab_latitude);
              getData_peta_kab(data.kab_latitude, data.kab_longitude);
          }
    });

  }

  
  function getData_peta_kab(lat, long){

    document.getElementById('mapid').innerHTML = "<div id='data_peta' style='height: 450px;'></div>";

    var curLocation=[edit_lat, edit_long];
    if (curLocation[0]==0 && curLocation[1]==0) {
      curLocation =[lat, long]; 
    }else{
      curLocation =[edit_lat, edit_long];
    }

    var mymap = L.map('data_peta').setView([lat, long], 12);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
          id: 'mapbox/streets-v11'
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    var marker = new L.marker(curLocation, {
      draggable:'true'
    });

    marker.on('dragend', function(event) {
    var position = marker.getLatLng();
    marker.setLatLng(position,{
      draggable : 'true'
      }).bindPopup(position).update();
      $("#Latitude").val(position.lat);
      $("#Longitude").val(position.lng).keyup();
      console.log(position.lat, position.lng)

    });

    $("#Latitude, #Longitude").change(function(){
      var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
      marker.setLatLng(position, {
      draggable : 'true'
      }).bindPopup(position).update();
      mymap.panTo(position);
    });
    mymap.addLayer(marker);
       



}


function getData_peta(){
  $.ajax({
        url: "<?php echo base_url(); ?>c_dashboard/load_data_to_tabel",
        type: "post",
        
        dataType: "json",
        success: function(data) {
            // console.log(data);
  
          document.getElementById('mapid').innerHTML = "<div id='data_peta' style='height: 450px;'></div>";
        
          var curLocation=[edit_lat, edit_long];
          if (curLocation[0]==0 && curLocation[1]==0) {
            curLocation =[-8.58280355011038, 116.13464826731037]; 
          }else{
            curLocation =[edit_lat, edit_long];
          }

          var mymap = L.map('data_peta').setView([-8.58280355011038, 116.13464826731037], 12);
          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
              attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11'
          }).addTo(mymap);

          mymap.attributionControl.setPrefix(false);
          var marker = new L.marker(curLocation, {
            draggable:'true'
          });

          marker.on('dragend', function(event) {
          var position = marker.getLatLng();
          marker.setLatLng(position,{
            draggable : 'true'
            }).bindPopup(position).update();
            $("#Latitude").val(position.lat);
            $("#Longitude").val(position.lng).keyup();
            console.log(position.lat, position.lng)

          });

          $("#Latitude, #Longitude").change(function(){
            var position =[parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
            marker.setLatLng(position, {
            draggable : 'true'
            }).bindPopup(position).update();
            mymap.panTo(position);
          });
          mymap.addLayer(marker);


        }

  });


}






</script>

<script> 
  $(document).ready(function(){
            $('#kabupaten').change(function(){
                var id = $(this).val();
                // console.log("ajax kecamatan = "+id); 
                $.ajax({
                  type: "POST",
                  url: "<?= base_url('c_tempat_ibadah/getKecamatan'); ?>",
                  data: {id : id},
                  dataType : "JSON",
                  success: function(response){
                    $('#kecamatan').html(response);
                    // console.log(response);
                  }
                
                });
            });
        });

</script>