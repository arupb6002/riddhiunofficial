<?php
session_start();

// List of valid username => password pairs
$users = [
    "admin" => "yourpassword",
    "Arup" => "Arup12",
    "Amlan" => "Amlan12",

    // ADD MORE BELOW
    "User1" => "Pass1",
    "User2" => "Pass2",
    "User3" => "Pass3",
    "User4" => "Pass4",
    "User5" => "Pass5",
    "User6" => "Pass6",
    "User7" => "Pass7",
    "User8" => "Pass8",
    "User9" => "Pass9",
    "User10" => "Pass10",
    "User11" => "Pass11",
    "User12" => "Pass12",
    "User13" => "Pass13",
    "User14" => "Pass14",
    "User15" => "Pass15",
    "User16" => "Pass16",
    "User17" => "Pass17",
    "User18" => "Pass18",
    "User19" => "Pass19",
    "User20" => "Pass20",
    "User21" => "Pass21",
    "User22" => "Pass22",
    "User23" => "Pass23",
    "User24" => "Pass24",
    "User25" => "Pass25",
    "User26" => "Pass26",
    "User27" => "Pass27",
    "User28" => "Pass28",
    "User29" => "Pass29",
    "User30" => "Pass30",
    "User31" => "Pass31",
    "User32" => "Pass32",
    "User33" => "Pass33",
    "User34" => "Pass34",
    "User35" => "Pass35",
    "User36" => "Pass36",
    "User37" => "Pass37",
    "User38" => "Pass38",
    "User39" => "Pass39",
    "User40" => "Pass40",
    "User41" => "Pass41",
    "User42" => "Pass42",
    "User43" => "Pass43",
    "User44" => "Pass44",
    "User45" => "Pass45",
    "User46" => "Pass46",
    "User47" => "Pass47",
    "User48" => "Pass48",
    "User49" => "Pass49",
    "User50" => "Pass50"
];

// Handle login
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (isset($users[$username]) && $users[$username] === $password) {
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("Location: panel.php");
        exit();
    } else {
        header("Location: login.html?error=1");
        exit();
    }
}
?>