<div class='text-center scan-types-container' style='background: rgb(240, 208,221); '>
    <h2 class="fw-bold title" style='margin-bottom: 1.1132rem !important;'>
        Types of scans we do
    </h2>
    <div class="ct-scan-types d-flex flex-row justify-content-center align-items-center flex-wrap">
        <?php
        foreach ($scansType as $typesCardData) {
            echo "
                    <div class='ct-scan-cards bg-light rounded d-flex flex-column justify-content-center align-items-center'>
                        <h2 class='ct-scan-cards__title'>{$typesCardData['text']}</h2>
                        <div class='justify-content-center border-2 border-bottom-primary d-flex flex-row align-items-center mt-auto'>
                            <p style='text-decoration: line-through; margin-right: 4px;'>RS {$typesCardData['price']}/-</p>
                            <p>RS {$typesCardData['discount_price']}/-</p>
                        </div>
                        <hr class='hr-line' />
                        <button style='background-color: #802A8F; margin-right: 4px;' class='my-2 border-0 text-white ct-scan-cards__btn' onclick='onClickScan(event)' data-text='{$typesCardData['text']}'>
                            Book Now
                        </button>
                    </div> ";
        }
        ?>
    </div>
</div>