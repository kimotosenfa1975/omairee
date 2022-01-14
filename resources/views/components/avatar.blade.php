<form action="{{ route('mypage.upload') }}" id="avartar" method="POST" enctype="multipart/form-data" style="width:100%">
    @csrf
    <div class="avatar-section">
        <div class="avatar-upload">
            <div class="avatar-edit">
                <input type='file' id="imageUpload" name="file" accept=".png, .jpg, .jpeg" />
                <label for="imageUpload"></label>
            </div>
            <div class="avatar-preview">
                <div id="imagePreview" 
                @if(isset(\Auth::user()->img)) 
                    style="background-image:url(../image/{{\Auth::user()->img}})"
                @endif
                >
                </div>
            </div>
        </div>
    </div>
</form>