<!-- ========================== INSERT ================================== -->

<?php
// SQL Insert Quary ----->

// INSERT INTO students (name, roll, class) 
// VALUES ('Sadikul Seikh', '18', 'BCA');


// PHP Insert Quary ------>
$stmt = $conn->prepare("INSERT INTO students (name, roll, class) VALUES (?, ?, ?)");
$stmt->bind_param("sis", $name, $roll, $class);
if ($stmt->execute()) {
    echo "Inserted";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>


<!-- =========================== UPDATE ================================ --> -->

<?php
// SQL Update Query ----->

// UPDATE students 
// SET name = 'Sadikul Seikh', roll = '18', class = 'BCA' 
// WHERE id = 1;


// PHP Update Query ------>
$stmt = $conn->prepare("UPDATE students SET name = ?, roll = ?, class = ? WHERE id = ?");
$stmt->bind_param("sisi", $name, $roll, $class, $id);
if ($stmt->execute()) {
    echo "Record Updated";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>


<!-- ============================= DELETE =============================== -->

<?php
// SQL Delete Query ----->

// DELETE FROM students WHERE id = 1;


// PHP Delete Query ------>
$stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
$stmt->bind_param("i", $id);
if ($stmt->execute()) {
    echo "Record Deleted";
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();
?>

