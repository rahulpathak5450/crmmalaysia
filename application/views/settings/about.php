<div class="card card-block">
    <div id="notify" class="alert alert-success" style="display:none;">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <div class="message"></div>
    </div>
    <form method="post" id="product_action" class="card-body">
        <div class="card-body">
            <h5>About</h5>
            <hr>
            <div class="form-group row">
                <div class="col-sm-12 text-center">
                    <h3>GATO BMS</h3><h5>V 1.1</h5> <h6>
                        Copyright <?= date('Y') ?> <a
                                href="https://gato.com.my"><h4>Gato Business Management System</h4></a>
                    </h6>
                </div>
            </div>
        </div>
    </form>
</div>
<script type="text/javascript">
    $("#time_update").click(function (e) {
        e.preventDefault();
        var actionurl = baseurl + 'settings/dtformat';
        actionProduct(actionurl);
    });
</script>
