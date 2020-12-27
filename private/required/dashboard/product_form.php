

<form action="" method="POST" enctype="multipart/form-data">
                                
    <div class="form-row">
        <div class="col-12 col-sm-6 mb-3">
            <label for="name">Product name</label>
            <input type="text" class="form-control" id="name" placeholder="product name" name="name" required>
        </div>
        <div class="col-12 col-sm-6 mb-3">
            <label for="model">Product model/number </label>
            <input type="text" class="form-control" id="model" placeholder="product model" name="model" required>
        </div>

        <div class="col-md-12 mb-3 bg-light pt-3 pb-1 pl-3 pr-3 border-alert">
            <div class="row">
                <?php
                    $radio_product_list = [
                        "battery" => "battery",
                        "bluetooth_airpord" => "bluetooth airpord",
                        "bluetooth_dongal" => "bluetooth dongal",
                        "bluetooth_earphone" => "bluetooth earphone",
                        "bluetooth_headphone" => "bluetooth headphone",
                        "bluetooth_speaker" => "bluetooth_speaker",
                        "car_charger" => "car chager",
                        "car_reader" => "car reader",
                        "car_stand" => "car stand",
                        "hands_free" => "hands free",
                        "otg_connector" => "otg connector",
                        "power_bank" => "power bank",
                        "selfie_stick" => "selfie stick",
                        "usb_cable" => "usb cable",
                        "usb_charger" => "usb charger"
                    ];
                ?>
                <?php 
                    foreach($radio_product_list as $value_data => $product_type){
                ?>
                    <div class="col-4 mb-3">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" value="<?=$value_data?>" id="<?=$value_data?>" name="category" required>
                            <label class="custom-control-label" for="<?=$value_data?>"><?=$product_type?></label>
                        </div>
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>

        <div class="custom-file mb-3">
            <label class="" for="img"></label>
            <input type="file" name="file" class="" id="img" required>
        </div>

        <div class="col-md-6 mb-3">
            <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input" value="1" id="active student" name="active" required>
                <label class="custom-control-label" for="active student">currently active</label>
            </div>
        </div>
            
        <div class="col-md-6 mb-3">
            <div class="custom-control custom-radio mb-3">
                <input type="radio" class="custom-control-input" value="0" id="not active student" name="active" required>
                <label class="custom-control-label" for="not active student">currently not active</label>
            </div>
        </div>

        <input class="btn btn-primary btn-lg" type="submit" name="submit">

    </div>
    
</form>