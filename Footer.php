<!-- Fonction PHP -->
<?php 
    function auto_copyright($startYear = null) {
        $thisYear = date('Y');  
        if (!is_numeric($startYear)) {
            $year = $thisYear; 
        } else {
            $year = intval($startYear);
        }
        if ($year == $thisYear || $year > $thisYear) { 
            echo "© $thisYear"; 
        } else {
            echo "© $year–$thisYear"; 
        }   
    } 
?>
<footer class="footer text-light">
    <div class="text-center py-3">
        <?php auto_copyright();?> | Arigoni Kevin - Développeur web full stack 
    </div>
</footer>