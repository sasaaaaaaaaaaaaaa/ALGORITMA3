<?php
//Default
$nilai = 100;

switch (true) {
    case ($nilai >= 90):
        echo "Grade A";
        break;
    case ($nilai >= 80):
        echo "Grade B";
        break;
    case ($nilai >= 70):
        echo "Grade C";
        break;
    case ($nilai >= 60):
        echo "Grade D";
        break;
    default:
        echo "Grade E";
}
print_r ("<p><strong>by :alika naswa sabilaa");