<?php
function getFaqs($data)
{
    echo "
    <div class='faq-inner-container align-self-stretch d-flex flex-column flex-md-row'>
        <div class='acc-container-1'>
            <div class='accordion my-1 w-100' id='accordionExample1'>";

    $numOfRows = $data->num_rows; // Use count() to get the number of rows in the $data array
    if ($numOfRows > 0) {
        foreach ($data as $row) {
            $faq_id = $row['id'];
            $faq_title = $row['question'];
            $faq_description = $row['answer'];
            $classNameItem1 = 'accordion-item d-md-none';
            $classNameBtn1 = 'accordion-button collapsed';
            $classNameBody1 = 'accordion-collapse collapse show';
            if (ceil($numOfRows / 2) >= $faq_id) {
                $classNameItem1 = 'accordion-item';
            }
            if ($faq_id != 1) {
                $classNameBtn1 = 'accordion-button collapsed';
                $classNameBody1 = 'accordion-collapse collapse';
            }

            echo "
            <div class='$classNameItem1'>
                <h2 class='accordion-header'>
                    <button class='$classNameBtn1' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapseTwo$faq_id' aria-expanded='false' aria-controls='panelsStayOpen-collapseTwo'>
                        $faq_title
                    </button>
                </h2>
                <div id='panelsStayOpen-collapseTwo$faq_id' class='$classNameBody1' data-bs-parent='#accordionExample1'>
                    <div class='accordion-body'>
                        <code>$faq_description</code>
                    </div>
                </div>
            </div>";
        }
    }

    echo "
            </div>
        </div>
        <div class='acc-container-2 d-none d-md-flex'>
            <div class='accordion my-1 w-100' id='accordionExample2'>";

    if ($numOfRows > 0) {
        foreach ($data as $row) {
            $faq_id = $row['id'];
            $faq_title = $row['question'];
            $faq_description = $row['answer'];
            $classNameItem2 = 'accordion-item';
            $classNameBtn2 = 'accordion-button collapsed';
            $classNameBody2 = 'accordion-collapse collapse show';
            if (ceil($numOfRows / 2) >= $faq_id) {
                $classNameItem2 = 'accordion-item d-none';
            }
            if ($faq_id < $numOfRows) {
                $classNameBtn2 = 'accordion-button collapsed';
                $classNameBody2 = 'accordion-collapse collapse';
            }
            echo "
            <div class='$classNameItem2'>
                <h2 class='accordion-header'>
                    <button class='$classNameBtn2' type='button' data-bs-toggle='collapse' data-bs-target='#panelsStayOpen-collapseTwoMs$faq_id' aria-expanded='false' aria-controls='panelsStayOpen-collapseTwo'>
                        $faq_title
                    </button>
                </h2>
                <div id='panelsStayOpen-collapseTwoMs$faq_id' class='$classNameBody2' data-bs-parent='#accordionExample2'>
                    <div class='accordion-body'>
                        <code>$faq_description</code>
                    </div>
                </div>
            </div>";
        }
    }

    echo "
            </div>
        </div>
    </div>";
}
?>
