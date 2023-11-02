<?php
global $wpdb;
if (isset($_POST['number'])) {

    $new_number = '+91' . $_POST['number'];

    $table_name = $wpdb->prefix . 'sticky_whatsapp';

    $wpdb->replace(
        $table_name,
        array(
            'id' => 1,
            'time' => current_time('mysql'),
            'number' => $new_number,
        )
    );
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/css/intlTelInput.css');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');
    @import url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');


    body {
        height: 100%;
        margin: 0
    }

    a {
        color: #007bff;
        text-decoration: none;
    }

    button:focus,
    input:focus {
        outline: none;
        box-shadow: none;
    }

    a,
    a:hover {
        text-decoration: none;
    }

    body {
        font-family: 'Roboto', sans-serif;
        background-color: #e0e3e8;

    }


    /*------------*/
    .form-area {
        background-color: #fff;
        box-shadow: 0px 5px 10px rgba(90, 116, 148, 0.3);
        padding: 40px;
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-area .form-inner {
        width: 100%;
    }

    .form-control {
        display: block;
        width: 100%;
        height: auto;
        padding: 15px 19px;
        font-size: 1rem;
        line-height: 1.4;
        color: #475F7B;
        background-color: #FFF;
        border: 1px solid #DFE3E7;
        border-radius: .267rem;
        -webkit-transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    .form-control:focus {
        color: #475F7B;
        background-color: #FFF;
        border-color: #5A8DEE;
        outline: 0;
        box-shadow: 0 3px 8px 0 rgb(0 0 0 / 10%);
    }

    .intl-tel-input,
    .iti {
        width: 100%;
    }
</style>
<section class="pt-5 pb-5">
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <h4><a href="#">Sticky WhatsApp</a></h4>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mt-5 mb-5">
                <div class="form-area">
                    <div class="form-inner">
                        <form method="post">
                            <div class="form-group">
                                <?php
                                $table = $wpdb->prefix . "sticky_whatsapp";
                                $data = $wpdb->get_row("SELECT * FROM $table WHERE id = 1");
                                ?>
                                <input type="text" id="mobile_code" class="form-control" placeholder="Phone Number" name="number" value="<?php echo $data->number; ?>">
                                <span>Last Updated: <?php echo date("d/m/Y", strtotime($data->time)); ?></span>
                            </div>
                            <button type="submit" class="btn btn-primary form-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    jQuery("#mobile_code").intlTelInput({
        initialCountry: "in",
        separateDialCode: true,
        onlyCountries: ["in"]
        // utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.4/js/utils.js"
    });
</script>
<?php
