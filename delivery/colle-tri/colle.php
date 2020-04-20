<?php


function find_smallest_index($map) {
    $index = 0;
    $index_min = 0;
    while ($index < count($map)) {
        if ($map[$index] < $map[$index_min])
            $index_min = $index;
        $index++;
    }
    return $index_min;
}

function sort_selection(array &$map) {
    $tmp = [];

    while (count($map) > 0) {

        // FIND SMALLEST INDEX
        $index = array_search(min($map), $map);
        $index2 = find_smallest_index($map);
        echo 'Indexes found : ' . $index . ' || ' . $index2 . PHP_EOL;


        // PUSH SMALLEST VALUE
        array_push($tmp, $map[$index]);
        echo "Value : " . $map[$index] . ' pushed' . PHP_EOL;


        // REMOVE ELEM
        unset($map[$index]);
        $map = array_values($map);
        echo "value removed && array reindex" . PHP_EOL;
    }
    $map = $tmp;
}


function sort_insertion(array &$map) {
    $tmp = [];

    while (count($map) > 0) {

        // GET FIRST VALUE
        $value = $map[0];

        // GET INDEX
        $index = 0;
        while ($index < count($tmp) && $tmp[$index] <= $value) {
            $index++;
        }

        // PUSH VALUE
        array_splice($tmp, $index, 0, $value);
        echo 'Value : ' . $value . ' inserted at index : ' . $index . PHP_EOL;

        // REMOVE ELEM
        unset($map[0]);
        $map = array_values($map);
        echo "value removed && array reindex" . PHP_EOL;
    }
    $map = $tmp;
}

function sort_bubble(array &$map) {
    $limit = count($map);
    while ($limit > 0) {
        $j = 0;
        while ($j < $limit - 1) {
            if ($map[$j] > $map[$j + 1]) {
                $tmp_value = $map[$j];
                $map[$j] = $map[$j + 1];
                $map[$j + 1] = $tmp_value;
            }
            $j++;
        }
        $limit--;
    }
}


$array = [1, 5, 4, 32, 2, 2, -1, 0, 4];

