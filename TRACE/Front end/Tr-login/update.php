<?php
include "db.php";
$data = json_decode(file_get_contents('php://input'), true);
foreach ($data as $item) {
    $id = $item['id'];
    $approval = $item['approval'];
    if ($approval === 'Approved') {
        // update the Approval column
        $query = "UPDATE certificates SET Approval = '$approval' WHERE id = '$id'";
        $result = mysqli_query($con, $query);
        if ($result) {
            // success
            // get the points from the point_alloc table
            $query = "SELECT pa.points FROM point_alloc pa JOIN certificates c ON pa.Activity_head = c.Activity_head AND pa.Activity = c.Activity AND pa.loa = c.loa WHERE c.id = '$id'";
            $result2 = mysqli_query($con, $query);
            if ($result2) {
                $row = mysqli_fetch_array($result2);
                $points = $row['points'];
                // update the points column
                $query = "UPDATE certificates SET points = '$points' WHERE id = '$id'";
                $result3 = mysqli_query($con, $query);
                if (!$result3) {
                    // handle the error
                }
            } else {
                // handle the error
            }
        } else {
            // handle the error
        }
    } elseif ($approval === 'Rejected') {
        // update the Approval column and set points to zero
        $query = "UPDATE certificates SET Approval = '$approval', points = 0 WHERE id = '$id'";
        $result = mysqli_query($con, $query);
        if ($result) {
            // success
        } else {
            // handle the error
        }
    }
}
?>