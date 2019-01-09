<?php
    class ReportsHtmlHelper {
        
        function categoryAmountReportHtml($array) {
           
            $html = '<table class="table table-striped">';
            $html .= '<h3>quantity of products in each category</h3>';
            $html .= '<thead><tr><td><h4>' . 'category' . '</h4></td><td><h4>' . 'amount of products'. '</h4></td></tr></thead>';
            for($i=0; $i < count($array); $i++) {
                $html .= '<tr>';
                $html .= '<td>' . $array[$i]['category_name'] . '</td>';
                $html .= '<td>' . $array[$i]['amount'] . '</td>';
                $html .= '</tr>';
            }
            $html .= '</table>';
            return $html;
        }
    }
?>