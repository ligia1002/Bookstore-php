<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6 text-center">
        <form class="form-horizontal">
            <fieldset>
                <legend>Contact</legend>
                <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Nume</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textArea" class="col-lg-2 control-label">Text</label>
                    <div class="col-lg-8">
                        <textarea class="form-control" rows="3" id="textArea"></textarea>
                        <span style="color: white" class="help-block">Un bloc mai lung de text de ajutor care se desparte pe o nouă linie și poate să se extindă dincolo de o singură linie.</span>
                    </div>
                    <div class="col-lg-2">
                        <img src="./bootstrap/img/Lidia.jpg" alt="Imagine dreapta" class="img-responsive" style="width: 100%; height: auto; margin-top: 10px;">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button type="submit" class="btn btn-primary">Trimite</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
<?php
  require_once "./template/footer.php";
?>
