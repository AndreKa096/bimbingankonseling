<!-- /**
 * @Author: Moch Faizal Ansyori
 * @Date:   2017-06-12 20:26:50
 * @Last Modified by:   Moch Faizal Ansyori
 * @Last Modified time: 2017-06-18 07:00:34
 */
 -->
<!-- Modal -->
<form class="cmxform form-horizontal" id="commentForm" method="post" action="<?php echo site_url('Kelas/update'); ?>">
<div id="update" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="color: white;background-color:#fb9800">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
         <!-- BEGIN FORM-->
            <div class="control-group ">
                <label for="firstname" class="control-label">Tingkatan Kelas</label>
                <div class="controls">
                    <input class="span12 " name="tingkatan" type="text" autocomplete="off" value="<?php echo $row['tingkatan_kelas']; ?>" required />
                </div>
            </div>
            <div class="control-group ">
                <label for="firstname" class="control-label">Nama Kelas</label>
                <div class="controls">
                    <input class="span12 " name="nama" type="text" autocomplete="off" value="<?php echo $row['nama_kelas']; ?>" required />
                    <input type="hidden" value="<?php echo $row['id_kelas']; ?>" name="id_">
                </div>
            </div>
        <!-- END FORM-->
      </div>
      <div class="modal-footer">
      	<button class="btn btn-warning" type="submit"><i class="icon-edit"></i> Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
</form>
<script>
	$(document).ready(function(){
		// $("#commentForm").validate();
	});
</script>