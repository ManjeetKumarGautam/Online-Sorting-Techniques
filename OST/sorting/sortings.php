<?php
include('../database/connection.php');
session_start();
if (isset($_POST['sub'])) {
    $_SESSION['range'] = $range = $_POST['range'];
    $_SESSION['num'] = $num = $_POST['numbers'];
    $arr = explode(' ', $num);
    $test_array = $arr;
    $_SESSION['algo'] = $s = $_POST['sorting'];

    switch ($s) {

        case "bubble_sort":
            //Bubble
            $_SESSION['sort'] = "Bubble Sort";
            function bubble_sort($my_array)
            {
                do {
                    $swapped = false;
                    for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                        if ($my_array[$i] > $my_array[$i + 1]) {
                            $temp = $my_array[$i + 1];
                            $my_array[$i + 1] = $my_array[$i];
                            $my_array[$i] = $temp;
                            $swapped = true;
                        }
                    }
                } while ($swapped);
                return $my_array;
            }
            function quick_sort($my_array) //quick
            {
                $lower = array();
                $greater = array();
                if (count($my_array) < 2) {
                    return $my_array;
                }
                $pivot_key = $my_array[0];
                $pivot = array_shift($my_array);
                foreach ($my_array as $val) {
                    if ($val <= $pivot) {
                        $lower[] = $val;
                    } elseif ($val > $pivot) {
                        $greater[] = $val;
                    }
                }
                return array_merge(quick_sort($lower), array($pivot_key => $pivot), quick_sort($greater));
            }
            function merge_sort($my_array) //MERGE
            {
                if (count($my_array) == 1) return $my_array;
                $mid = count($my_array) / 2;
                $left = array_slice($my_array, 0, $mid);
                $right = array_slice($my_array, $mid);
                $left = merge_sort($left);
                $right = merge_sort($right);
                return merge($left, $right);
            }
            function merge($left, $right)
            {
                $res = array();
                while (count($left) > 0 && count($right) > 0) {
                    if ($left[0] > $right[0]) {
                        $res[] = $right[0];
                        $right = array_slice($right, 1);
                    } else {
                        $res[] = $left[0];
                        $left = array_slice($left, 1);
                    }
                }
                while (count($left) > 0) {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
                while (count($right) > 0) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                }
                return $res;
            }


            function insertion_sort($my_array)
            {
                for ($i = 0; $i < count($my_array); $i++) {
                    $val = $my_array[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $my_array[$j] > $val) {
                        $my_array[$j + 1] = $my_array[$j];
                        $j--;
                    }
                    $my_array[$j + 1] = $val;
                }
                return $my_array;
            }

            function selection_sort($data)
            {
                for ($i = 0; $i < count($data) - 1; $i++) {
                    $min = $i;
                    for ($j = $i + 1; $j < count($data); $j++) {
                        if ($data[$j] < $data[$min]) {
                            $min = $j;
                        }
                    }
                    $data = swap_positions($data, $i, $min);
                }
                return $data;
            }

            function swap_positions($data1, $left, $right)
            {
                $backup_old_data_right_value = $data1[$right];
                $data1[$right] = $data1[$left];
                $data1[$left] = $backup_old_data_right_value;
                return $data1;
            }
            //MERGE
            $start4 = microtime(true);
            implode(' ', merge_sort($test_array));
            $end4 = microtime(true);
            $time4 = $end4 - $start4;
            $_SESSION['merge_time'] = $time4;

            //SELECTION
            $start5 = microtime(true);
            implode(' ', selection_sort($test_array));
            $end5 = microtime(true);
            $time5 = $end5 - $start5;
            $_SESSION['selection_time'] = $time5;

            //BUBBLE
            $start1 = microtime(true);
            $_SESSION['result'] =  implode(' ', bubble_sort($test_array));
            $end1 = microtime(true);
            $time1 = $end1 - $start1;
            $_SESSION['buble_time'] = $time1;

            //QUICK
            $start2 = microtime(true);
            implode(' ', quick_sort($test_array));
            $end2 = microtime(true);
            $time2 = $end2 - $start2;
            $_SESSION['quick_time'] = $time2;

            //INSERTION
            $start3 = microtime(true);
            implode(' ', insertion_sort($test_array));
            $end3 = microtime(true);
            $time3 = $end3 - $start3;
            $_SESSION['insertion_time'] = $time3;

            header('Location: ../implement/implement-result.php');
            break;


        case "quick_sort":
            //Quick
            $_SESSION['sort'] = "Quick Sort";

            function bubble_sort($my_array)
            {
                do {
                    $swapped = false;
                    for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                        if ($my_array[$i] > $my_array[$i + 1]) {
                            $temp = $my_array[$i + 1];
                            $my_array[$i + 1] = $my_array[$i];
                            $my_array[$i] = $temp;
                            $swapped = true;
                        }
                    }
                } while ($swapped);
                return $my_array;
            }
            function quick_sort($my_array) //quick
            {
                $lower = array();
                $greater = array();
                if (count($my_array) < 2) {
                    return $my_array;
                }
                $pivot_key = $my_array[0];
                $pivot = array_shift($my_array);
                foreach ($my_array as $val) {
                    if ($val <= $pivot) {
                        $lower[] = $val;
                    } elseif ($val > $pivot) {
                        $greater[] = $val;
                    }
                }
                return array_merge(quick_sort($lower), array($pivot_key => $pivot), quick_sort($greater));
            }
            function merge_sort($my_array) //MERGE
            {
                if (count($my_array) == 1) return $my_array;
                $mid = count($my_array) / 2;
                $left = array_slice($my_array, 0, $mid);
                $right = array_slice($my_array, $mid);
                $left = merge_sort($left);
                $right = merge_sort($right);
                return merge($left, $right);
            }
            function merge($left, $right)
            {
                $res = array();
                while (count($left) > 0 && count($right) > 0) {
                    if ($left[0] > $right[0]) {
                        $res[] = $right[0];
                        $right = array_slice($right, 1);
                    } else {
                        $res[] = $left[0];
                        $left = array_slice($left, 1);
                    }
                }
                while (count($left) > 0) {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
                while (count($right) > 0) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                }
                return $res;
            }


            function insertion_sort($my_array)
            {
                for ($i = 0; $i < count($my_array); $i++) {
                    $val = $my_array[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $my_array[$j] > $val) {
                        $my_array[$j + 1] = $my_array[$j];
                        $j--;
                    }
                    $my_array[$j + 1] = $val;
                }
                return $my_array;
            }

            function selection_sort($data)
            {
                for ($i = 0; $i < count($data) - 1; $i++) {
                    $min = $i;
                    for ($j = $i + 1; $j < count($data); $j++) {
                        if ($data[$j] < $data[$min]) {
                            $min = $j;
                        }
                    }
                    $data = swap_positions($data, $i, $min);
                }
                return $data;
            }

            function swap_positions($data1, $left, $right)
            {
                $backup_old_data_right_value = $data1[$right];
                $data1[$right] = $data1[$left];
                $data1[$left] = $backup_old_data_right_value;
                return $data1;
            }
            //MERGE
            $start4 = microtime(true);
            implode(' ', merge_sort($test_array));
            $end4 = microtime(true);
            $time4 = $end4 - $start4;
            $_SESSION['merge_time'] = $time4;

            //SELECTION
            $start5 = microtime(true);
            implode(' ', selection_sort($test_array));
            $end5 = microtime(true);
            $time5 = $end5 - $start5;
            $_SESSION['selection_time'] = $time5;

            //BUBBLE
            $start1 = microtime(true);
            implode(' ', bubble_sort($test_array));
            $end1 = microtime(true);
            $time1 = $end1 - $start1;
            $_SESSION['buble_time'] = $time1;

            //QUICK
            $start2 = microtime(true);
            $_SESSION['result'] = implode(' ', quick_sort($test_array));
            $end2 = microtime(true);
            $time2 = $end2 - $start2;
            $_SESSION['quick_time'] = $time2;

            //INSERTION
            $start3 = microtime(true);
            implode(' ', insertion_sort($test_array));
            $end3 = microtime(true);
            $time3 = $end3 - $start3;
            $_SESSION['insertion_time'] = $time3;

            header('Location: ../implement/implement-result.php');
            break;


        case "merge_sort":
            //Merge
            $_SESSION['sort'] = "Merge Sort";

            function bubble_sort($my_array)
            {
                do {
                    $swapped = false;
                    for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                        if ($my_array[$i] > $my_array[$i + 1]) {
                            $temp = $my_array[$i + 1];
                            $my_array[$i + 1] = $my_array[$i];
                            $my_array[$i] = $temp;
                            $swapped = true;
                        }
                    }
                } while ($swapped);
                return $my_array;
            }
            function quick_sort($my_array) //quick
            {
                $lower = array();
                $greater = array();
                if (count($my_array) < 2) {
                    return $my_array;
                }
                $pivot_key = $my_array[0];
                $pivot = array_shift($my_array);
                foreach ($my_array as $val) {
                    if ($val <= $pivot) {
                        $lower[] = $val;
                    } elseif ($val > $pivot) {
                        $greater[] = $val;
                    }
                }
                return array_merge(quick_sort($lower), array($pivot_key => $pivot), quick_sort($greater));
            }
            function merge_sort($my_array) //MERGE
            {
                if (count($my_array) == 1) return $my_array;
                $mid = count($my_array) / 2;
                $left = array_slice($my_array, 0, $mid);
                $right = array_slice($my_array, $mid);
                $left = merge_sort($left);
                $right = merge_sort($right);
                return merge($left, $right);
            }
            function merge($left, $right)
            {
                $res = array();
                while (count($left) > 0 && count($right) > 0) {
                    if ($left[0] > $right[0]) {
                        $res[] = $right[0];
                        $right = array_slice($right, 1);
                    } else {
                        $res[] = $left[0];
                        $left = array_slice($left, 1);
                    }
                }
                while (count($left) > 0) {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
                while (count($right) > 0) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                }
                return $res;
            }


            function insertion_sort($my_array)
            {
                for ($i = 0; $i < count($my_array); $i++) {
                    $val = $my_array[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $my_array[$j] > $val) {
                        $my_array[$j + 1] = $my_array[$j];
                        $j--;
                    }
                    $my_array[$j + 1] = $val;
                }
                return $my_array;
            }

            function selection_sort($data)
            {
                for ($i = 0; $i < count($data) - 1; $i++) {
                    $min = $i;
                    for ($j = $i + 1; $j < count($data); $j++) {
                        if ($data[$j] < $data[$min]) {
                            $min = $j;
                        }
                    }
                    $data = swap_positions($data, $i, $min);
                }
                return $data;
            }

            function swap_positions($data1, $left, $right)
            {
                $backup_old_data_right_value = $data1[$right];
                $data1[$right] = $data1[$left];
                $data1[$left] = $backup_old_data_right_value;
                return $data1;
            }
            //MERGE
            $start4 = microtime(true);
            $_SESSION['result'] =  implode(' ', merge_sort($test_array));
            $end4 = microtime(true);
            $time4 = $end4 - $start4;
            $_SESSION['merge_time'] = $time4;

            //SELECTION
            $start5 = microtime(true);
            implode(' ', selection_sort($test_array));
            $end5 = microtime(true);
            $time5 = $end5 - $start5;
            $_SESSION['selection_time'] = $time5;

            //BUBBLE
            $start1 = microtime(true);
            implode(' ', bubble_sort($test_array));
            $end1 = microtime(true);
            $time1 = $end1 - $start1;
            $_SESSION['buble_time'] = $time1;

            //QUICK
            $start2 = microtime(true);
            implode(' ', quick_sort($test_array));
            $end2 = microtime(true);
            $time2 = $end2 - $start2;
            $_SESSION['quick_time'] = $time2;

            //INSERTION
            $start3 = microtime(true);
            implode(' ', insertion_sort($test_array));
            $end3 = microtime(true);
            $time3 = $end3 - $start3;
            $_SESSION['insertion_time'] = $time3;

            header('Location: ../implement/implement-result.php');
            break;

        case "insertion_sort":
            //Insertion
            $_SESSION['sort'] = "Insertion Sort";

            function bubble_sort($my_array)
            {
                do {
                    $swapped = false;
                    for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                        if ($my_array[$i] > $my_array[$i + 1]) {
                            $temp = $my_array[$i + 1];
                            $my_array[$i + 1] = $my_array[$i];
                            $my_array[$i] = $temp;
                            $swapped = true;
                        }
                    }
                } while ($swapped);
                return $my_array;
            }
            function quick_sort($my_array) //quick
            {
                $lower = array();
                $greater = array();
                if (count($my_array) < 2) {
                    return $my_array;
                }
                $pivot_key = $my_array[0];
                $pivot = array_shift($my_array);
                foreach ($my_array as $val) {
                    if ($val <= $pivot) {
                        $lower[] = $val;
                    } elseif ($val > $pivot) {
                        $greater[] = $val;
                    }
                }
                return array_merge(quick_sort($lower), array($pivot_key => $pivot), quick_sort($greater));
            }
            function merge_sort($my_array) //MERGE
            {
                if (count($my_array) == 1) return $my_array;
                $mid = count($my_array) / 2;
                $left = array_slice($my_array, 0, $mid);
                $right = array_slice($my_array, $mid);
                $left = merge_sort($left);
                $right = merge_sort($right);
                return merge($left, $right);
            }
            function merge($left, $right)
            {
                $res = array();
                while (count($left) > 0 && count($right) > 0) {
                    if ($left[0] > $right[0]) {
                        $res[] = $right[0];
                        $right = array_slice($right, 1);
                    } else {
                        $res[] = $left[0];
                        $left = array_slice($left, 1);
                    }
                }
                while (count($left) > 0) {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
                while (count($right) > 0) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                }
                return $res;
            }


            function insertion_sort($my_array)
            {
                for ($i = 0; $i < count($my_array); $i++) {
                    $val = $my_array[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $my_array[$j] > $val) {
                        $my_array[$j + 1] = $my_array[$j];
                        $j--;
                    }
                    $my_array[$j + 1] = $val;
                }
                return $my_array;
            }

            function selection_sort($data)
            {
                for ($i = 0; $i < count($data) - 1; $i++) {
                    $min = $i;
                    for ($j = $i + 1; $j < count($data); $j++) {
                        if ($data[$j] < $data[$min]) {
                            $min = $j;
                        }
                    }
                    $data = swap_positions($data, $i, $min);
                }
                return $data;
            }

            function swap_positions($data1, $left, $right)
            {
                $backup_old_data_right_value = $data1[$right];
                $data1[$right] = $data1[$left];
                $data1[$left] = $backup_old_data_right_value;
                return $data1;
            }
            //MERGE
            $start4 = microtime(true);
            implode(' ', merge_sort($test_array));
            $end4 = microtime(true);
            $time4 = $end4 - $start4;
            $_SESSION['merge_time'] = $time4;

            //SELECTION
            $start5 = microtime(true);
            implode(' ', selection_sort($test_array));
            $end5 = microtime(true);
            $time5 = $end5 - $start5;
            $_SESSION['selection_time'] = $time5;

            //BUBBLE
            $start1 = microtime(true);
            implode(' ', bubble_sort($test_array));
            $end1 = microtime(true);
            $time1 = $end1 - $start1;
            $_SESSION['buble_time'] = $time1;

            //QUICK
            $start2 = microtime(true);
            implode(' ', quick_sort($test_array));
            $end2 = microtime(true);
            $time2 = $end2 - $start2;
            $_SESSION['quick_time'] = $time2;

            //INSERTION
            $start3 = microtime(true);
            $_SESSION['result'] =  implode(' ', insertion_sort($test_array));
            $end3 = microtime(true);
            $time3 = $end3 - $start3;
            $_SESSION['insertion_time'] = $time3;

            header('Location: ../implement/implement-result.php');
            break;


        case "selection_sort":
            //Selection
            $_SESSION['sort'] = "Selection Sort";

            function bubble_sort($my_array)
            {
                do {
                    $swapped = false;
                    for ($i = 0, $c = count($my_array) - 1; $i < $c; $i++) {
                        if ($my_array[$i] > $my_array[$i + 1]) {
                            $temp = $my_array[$i + 1];
                            $my_array[$i + 1] = $my_array[$i];
                            $my_array[$i] = $temp;
                            $swapped = true;
                        }
                    }
                } while ($swapped);
                return $my_array;
            }
            function quick_sort($my_array) //quick
            {
                $lower = array();
                $greater = array();
                if (count($my_array) < 2) {
                    return $my_array;
                }
                $pivot_key = $my_array[0];
                $pivot = array_shift($my_array);
                foreach ($my_array as $val) {
                    if ($val <= $pivot) {
                        $lower[] = $val;
                    } elseif ($val > $pivot) {
                        $greater[] = $val;
                    }
                }
                return array_merge(quick_sort($lower), array($pivot_key => $pivot), quick_sort($greater));
            }
            function merge_sort($my_array) //MERGE
            {
                if (count($my_array) == 1) return $my_array;
                $mid = count($my_array) / 2;
                $left = array_slice($my_array, 0, $mid);
                $right = array_slice($my_array, $mid);
                $left = merge_sort($left);
                $right = merge_sort($right);
                return merge($left, $right);
            }
            function merge($left, $right)
            {
                $res = array();
                while (count($left) > 0 && count($right) > 0) {
                    if ($left[0] > $right[0]) {
                        $res[] = $right[0];
                        $right = array_slice($right, 1);
                    } else {
                        $res[] = $left[0];
                        $left = array_slice($left, 1);
                    }
                }
                while (count($left) > 0) {
                    $res[] = $left[0];
                    $left = array_slice($left, 1);
                }
                while (count($right) > 0) {
                    $res[] = $right[0];
                    $right = array_slice($right, 1);
                }
                return $res;
            }


            function insertion_sort($my_array)
            {
                for ($i = 0; $i < count($my_array); $i++) {
                    $val = $my_array[$i];
                    $j = $i - 1;
                    while ($j >= 0 && $my_array[$j] > $val) {
                        $my_array[$j + 1] = $my_array[$j];
                        $j--;
                    }
                    $my_array[$j + 1] = $val;
                }
                return $my_array;
            }

            function selection_sort($data)
            {
                for ($i = 0; $i < count($data) - 1; $i++) {
                    $min = $i;
                    for ($j = $i + 1; $j < count($data); $j++) {
                        if ($data[$j] < $data[$min]) {
                            $min = $j;
                        }
                    }
                    $data = swap_positions($data, $i, $min);
                }
                return $data;
            }

            function swap_positions($data1, $left, $right)
            {
                $backup_old_data_right_value = $data1[$right];
                $data1[$right] = $data1[$left];
                $data1[$left] = $backup_old_data_right_value;
                return $data1;
            }
            //MERGE
            $start4 = microtime(true);
            implode(' ', merge_sort($test_array));
            $end4 = microtime(true);
            $time4 = $end4 - $start4;
            $_SESSION['merge_time'] = $time4;

            //SELECTION
            $start5 = microtime(true);
            $_SESSION['result'] =  implode(' ', selection_sort($test_array));
            $end5 = microtime(true);
            $time5 = $end5 - $start5;
            $_SESSION['selection_time'] = $time5;

            //BUBBLE
            $start1 = microtime(true);
            implode(' ', bubble_sort($test_array));
            $end1 = microtime(true);
            $time1 = $end1 - $start1;
            $_SESSION['buble_time'] = $time1;

            //QUICK
            $start2 = microtime(true);
            implode(' ', quick_sort($test_array));
            $end2 = microtime(true);
            $time2 = $end2 - $start2;
            $_SESSION['quick_time'] = $time2;

            //INSERTION
            $start3 = microtime(true);
            implode(' ', insertion_sort($test_array));
            $end3 = microtime(true);
            $time3 = $end3 - $start3;
            $_SESSION['insertion_time'] = $time3;

            header('Location: ../implement/implement-result.php');
            break;
    }
}
