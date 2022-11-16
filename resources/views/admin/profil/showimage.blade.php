<div class="modal fade" id="showImageModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <img src="" id="image" style="width: 100%; height: 100%;" >
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
</div>

<script>
$(document).ready(function () {
    function showImage(e) {
        let id = e.getAttribute('data-id');
        $.ajax({
                    type: 'POST',
                    url: "http://backend.smk1sumenep.sch.id/api/attendances/"+id,
                    headers: {
                        'Accept':'*/*',
                        'Authorization':'Bearer '+ getCookie('token'),
                    },
                    
    }
});
</script>