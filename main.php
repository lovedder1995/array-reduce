# github:lovedder1995/array-reduce#1.0.0

return function ($array, $reducer)
    $index = -1
    return array_reduce($array, function($reduced, $item) use ($array, $reducer, &$index) {
        $index++
        return $reducer($reduced, $item, $index, $array)
    }, $array[0])
