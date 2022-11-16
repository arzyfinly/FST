
<div class="modal fade" id="modalCreateSecretary" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buat Sekretaris Kelas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="createSecretary">
            @csrf
            <div class="form-group">
              <label for="select2SinglePlaceholder">Kelas</label> <br>
              <select style="width: 100%" name="class_id" id="select2SinglePlaceholder" class=" form-control form-control-sm select-student class_id">
                  <option value="" selected>Pilih Kelas</option>
                  @foreach ($classes as $class)
                      <option value="{{ $class->id }}">{{ $class->name }}
                      </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Siswa</label>
                <select name="student_id" id="select2Single" class=" form-control form-control-sm student">
                  <option value="" selected>Pilih Siswa</option>
                  
              </select>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" id="submit" class="btn btn-primary">Buat</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>

<script>
  $(document).ready(function() {
      $('.class_id').on('change', function() {
          var classId = $(this).val();
              $.ajax({
                  url: "http://backend.smk1sumenep.sch.id/api/attendances/students/"+ classId,
                  type: "GET",
                  headers: {
                      'Accept':'*/*',
                      'Authorization':'Bearer '+ getCookie('token'),
                  },
                  cache: false,
                  contentType: false,
                  processData: false,
                  dataType: "json",
                  success:function(response) {
                      console.log(response);
                      $(".student").empty();
                      $(".student").append('<option value="0" disabled="true" selected="true">Pilih Siswa</option>');
                      $.each(response.student,function(key, value){
                          $(".student").append('<option value="'+value.id+'">'+value.name+'</option>');
                      });
                  }
              });
      });
  });
  </script>
@include('admin.class-secretaries.scriptcreatedata')
                    