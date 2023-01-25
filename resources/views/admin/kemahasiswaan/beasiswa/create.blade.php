<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="row">
                <!-- Datatables -->
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">{{ __('Create Beasiswa FST') }}</h6>
                            {{-- <a href="{{ route('visi-misi-tujuan-fst.create') }}" data-toggle="tooltip" data-original-title="Create" class="btn btn-success  py-0"><b style="font-size: 27px">+</b></a> --}}
                        </div>
                        <div class="table-responsive p-3">
                            <form action="{{ route('beasiswa-fst.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col border-right">
                                            <div class="p-3 py-5">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <h4 class="text-right">Beasiswa Fakultas</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label class="labels">Judul</label>
                                                        <input type="text" name="title"
                                                            class="form-control @error('title') is-invalid @enderror"
                                                            placeholder="ex: Jenis beasiswa" value="">
                                                        @error('title')
                                                            <small class="text-danger">{{ $message }}</small>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="row mt-3">
                                                    <div class="col-md-12 mt-2">

                                                        <label class="labels">Konten</label>
                                                        <input type="hidden" name="content" id="content" value="">
                                                        <div id="editor"></div>
                                                        <script>
                                                        $(document).ready(function() {
                                                            var quill = new Quill('#editor', {
                                                                theme: 'snow'
                                                            });
                                                            quill.on('text-change', function(delta, oldDelta, source) {
                                                                document.querySelector("input[name='content']").value = quill.root.innerHTML;
                                                            });
                                                        });
                                                       </script>
                                                       <input type="date" name="date" hidden
                                                       class="form-control @error('date') is-invalid @enderror"
                                                       placeholder="" value="{{ \Carbon\Carbon::now()->toDateString() }}">
                                                    </div>
                                                </div>

                                                <div class="row mt-5">
                                                    <div class="col-md-12 mt-5">
                                                        <input class="form-check-input" name="publish"
                                                                type="checkbox" value="1" id="checkbox-1" />
                                                            <input hidden name="category_profile_id" type="text"
                                                                value="2" />
                                                            <label class="form-check-label" for="checkbox-1">Checklist
                                                                kotak
                                                                disamping untuk mempublish konten ini !! <br>
                                                    </div>
                                                </div>
                                                            <input hidden name="category_profile_id" type="text"
                                                                value="6" />
                                                <div class="mt-5 text-center"><button
                                                        class="btn btn-primary profile-button"type="submit">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

