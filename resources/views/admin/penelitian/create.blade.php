
<div class="modal fade" id="modalCreateCounseling" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Konseling</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="createCounseling">
            @csrf
            <div class="form-group">
                <label>Siswa</label>
                <select name="student_id" id="student_id" class="form-control student_id">
                    <option value="" selected>Pilih Siswa</option>
                    @foreach ($students as $student)
                      <option value="{{ $student->id }}">{{ $student->name }}
                      </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Metode</label>
                <select name="method" id="method" class="form-control method">
                    <option value="" selected>Pilih Methode</option>
                    <option value="Online" selected>Online</option>
                    <option value="Offline" selected>Offline</option>
                </select>
            </div>
            <div class="form-group">
                <label>Waktu Konseling</label>
                <div class="input-group clockpicker" id="clock">
                    <input type="time" placeholder="00:00" class="form-control" name="time"
                        id="time">
                    <div class="input-group-append">
                    </div>
                </div>
            </div>
            <div class="form-group" id="simple-date1">
                <label for="date">Tanggal</label>
                <div class="input-group date">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                    </div>
                    <input type="text" class="form-control" name="date_counseling" id="date_counseling" autocomplete="off">
                </div>
                <small class="text-danger" id="date-error"></small>
            </div>
            <div class="form-group">
                <label>Tempat</label>
                <input placeholder="Forum atau Ruang BK" type="text" name="place" class="form-control">
            </div>
            <div class="form-group">
                <label>Konselor</label>
                <select name="counselor_id" id="counselor_id" class="form-control counselor_id">
                    <option value="" selected>Pilih Konselor</option>
                    @foreach ($counselors as $counselor)
                      <option value="{{ $counselor->id }}">{{ $counselor->teacher->name }}
                      </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <input type="text" name="description" class="form-control">
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
@include('admin.counselings.scriptcreatedata')
                    