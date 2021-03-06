<?php

use DervisGroup\Pesa\Mpesa\Facades\B2C;
use DervisGroup\Pesa\Mpesa\Facades\Identity;
use DervisGroup\Pesa\Mpesa\Facades\STK;
use DervisGroup\Pesa\Mpesa\Library\Simulate;

if (!function_exists('mpesa_balance')) {
    /**
     * @return mixed
     */
    function mpesa_balance()
    {
        return B2C::balance();
    }
}
if (!function_exists('mpesa_send')) {
    /**
     * @param string $phone
     * @param int $amount
     * @param $remarks
     * @return mixed
     */
    function mpesa_send($phone, $amount, $remarks = null)
    {
        return B2C::send($phone, $amount, $remarks);
    }
}
if (!function_exists('mpesa_id_check')) {
    /**
     * @param string $phone
     * @return mixed
     */
    function mpesa_id_check($phone)
    {
        return Identity::validate($phone);
    }
}
if (!function_exists('mpesa_stk_status')) {
    /**
     * @param int $id
     * @return mixed
     */
    function mpesa_stk_status($id)
    {
        return STK::validate($id);
    }
}
if (!function_exists('mpesa_request')) {
    /**
     * @param string $phone
     * @param int $amount
     * @param string|null $reference
     * @param string|null $description
     * @return mixed
     */
    function mpesa_request($phone, $amount, $reference = null, $description = null)
    {
        return STK::push($amount, $phone, $reference, $description);
    }
}
if (!function_exists('mpesa_validate')) {
    /**
     * @param string|int $id
     * @return mixed
     */
    function mpesa_validate($id)
    {
        return STK::validate($id);
    }
}
if (!function_exists('mpesa_simulate')) {
    /**
     * @param int $phone
     * @param string $amount
     * @return mixed
     * @throws \DervisGroup\Pesa\Exceptions\MpesaException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    function mpesa_simulate($phone, $amount)
    {
        return app(Simulate::class)->push($phone, $amount);
    }
}
