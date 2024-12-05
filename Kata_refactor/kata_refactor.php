<?php

function calculateDiscount($type, $amount) {
    if ($type == 'regular') {
        $discount = $amount * 0.05;
    } elseif ($type == 'premium') {
        $discount = $amount * 0.10;
    } elseif ($type == 'vip') {
        $discount = $amount * 0.15;
    } else {
        $discount = 0;
    }

    return $amount - $discount;
}

function calculateDiscountFor($type, $amount) 
{
    $discounts = [0.05, 0.10, 0.15];
    $discountName = ['regular', 'premium', 'vip'];

    for($i = 0; $i < count($discounts); $i++) {
        if($discountName[$i] === $type){
            $discountedAmount = $amount * $discounts[$i];
            return $amount - $discountedAmount;
        }
    }
    return $amount;
}

function calculateDiscountForEach($type, $amount)
{
    $discountType = [
        'regular' => 0.05,
        'premium' => 0.10,
        'vip' => 0.15
    ];
    foreach($discountType as $discount => $value){
        if($discount === $type) {
            $moneyToDiscount = $amount * $value;
            return $amount - $moneyToDiscount;
        }
    }
    return $amount;
}

function calculateDiscountIf($type, $amount)
{
    if($type === 'regular'){
        $discount = $amount * 0.05;
        return $amount - $discount;
    } elseif($type === 'premium'){
        $discount = $amount * 0.10;
        return $amount - $discount;
    } elseif($type === 'vip') {
        $discount = $amount * 0.15;
        return $amount - $discount;
    }else{
        return $amount;
    }
}

function calculateDiscountSwitch($type, $amount) 
{
    switch($type)
    {
        case 'regular':
            $discount = $amount * 0.05;
            return $amount - $discount;
            break;
        case 'premium':
            $discount = $amount * 0.10;
            return $amount - $discount;
            break;
        case 'vip':
            $discount = $amount * 0.15;
            return $amount - $discount;
            break;
        default:
            return $amount;
            break;
    }
}

echo calculateDiscountFor('regular', 1000);
echo "\n";
echo calculateDiscountForEach('premium', 2000);
echo "\n";
echo calculateDiscountSwitch('vip', 3000);
echo "\n";
echo calculateDiscountIf('other', 500);

?>