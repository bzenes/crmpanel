<?php require_once "header.php"; ?>
<div class="content-body">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Not Ekle</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <form action="#" class="form-profile" id="add-note-form">
                            <div class="form-group">
                                <input type="text" class="form-control input-default" name="title" placeholder="Başlık">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="note" id="textarea" cols="30" rows="2" placeholder="Yeni not oluştur"></textarea>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="submit" class="btn btn-primary px-3 mb-3" id="addNoteBtn" name="addNote" value="Gönder"/>
                            </div>
                        </form>
                        <div id="alert"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once "footer.php"; ?>