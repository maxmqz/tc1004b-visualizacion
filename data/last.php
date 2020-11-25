<?php
    // For database connections
    include_once 'database.php';

    // MySQL select all data
    $sql = "SELECT * FROM $dbname.$tbname ORDER BY ID DESC LIMIT 1";
    
    // Perform Query
    $result = mysqli_query($conn,$sql);
    
    // Parse data as JSON and return it
    $rows = array();
    while($r = mysqli_fetch_assoc($result)) {
        $rows[] = $r;
    }
    echo json_encode($rows);
    
    // Close database connection
    mysqli_close($conn);

?>