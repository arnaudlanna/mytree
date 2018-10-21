<div class='container'>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='card card-signin my-1'>
                <div class='card-body'>
                <center>
                <a>
                <img style='height: 80px' src='<?php echo $benefit["logo"]; ?>' alt=''>
                <p style='color: gray; font-size: 28px;'><?php echo $benefit["company"]; ?></p>
                </a>
                </center>
                    <div class='row'>
                    <div class='col-sm-7'>
                    <p style='color: gray;'><?php echo $benefit["benefit"]; ?></p>
                    </div>
                    <div class='col-sm-3'>
                    <p style='color: gray;'><?php echo $benefit["cost"]; ?> Moedas Verdes</p>
                    </div>
                    <div class='col-sm-2'>
                    <button class='btn btn-success'>Obter Benefício!</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>