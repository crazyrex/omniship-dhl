<?php
/**
 * Created by PhpStorm.
 * User: joro
 * Date: 10.5.2017 г.
 * Time: 14:33 ч.
 */

namespace Omniship\Dhl;

use Omniship\Dhl\Http\CancelBillOfLadingRequest;
use Omniship\Dhl\Http\CreateBillOfLadingRequest;
use Omniship\Dhl\Http\ShippingServicesRequest;
use Omniship\Dhl\Http\TrackingParcelRequest;
use Omniship\Common\AbstractGateway;

class Gateway extends AbstractGateway
{

    private $message_reference;

    private $name = 'Dhl';

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getDefaultParameters()
    {
        return array(
            'username' => '',
            'password' => '',
            'shipper_account_number' => '',
            'billing_account_number' => '',
            'duty_account_number' => '',
        );
    }

    /**
     * @return mixed
     */
    public function getUsername() {
        return $this->getParameter('username');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setUsername($value) {
        return $this->setParameter('username', $value);
    }

    /**
     * @return mixed
     */
    public function getPassword() {
        return $this->getParameter('password');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setPassword($value) {
        return $this->setParameter('password', $value);
    }

    /**
     * @return mixed
     */
    public function getShipperAccountNumber() {
        return $this->getParameter('shipper_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setShipperAccountNumber($value) {
        return $this->setParameter('shipper_account_number', $value);
    }

    /**
     * @return mixed
     */
    public function getBillingAccountNumber() {
        return $this->getParameter('billing_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setBillingAccountNumber($value) {
        return $this->setParameter('billing_account_number', $value);
    }

    /**
     * @return mixed
     */
    public function getDutyAccountNumber() {
        return $this->getParameter('duty_account_number');
    }

    /**
     * @param $value
     * @return $this
     */
    public function setDutyAccountNumber($value) {
        return $this->setParameter('duty_account_number', $value);
    }

    /**
     * @param array $parameters
     * @return ShippingServicesRequest
     */
    public function getServices(array $parameters = []) {
        return $this->createRequest(ShippingServicesRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param array $parameters
     * @return TrackingParcelRequest
     */
    public function trackingParcel(array $parameters = []) {
        return $this->createRequest(TrackingParcelRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param array $parameters
     * @return CreateBillOfLadingRequest
     */
    public function createBillOfLading(array $parameters = []) {
        return $this->createRequest(CreateBillOfLadingRequest::class, $this->getParameters() + $parameters);
    }

    /**
     * @param $bol_id
     * @param null $cancelComment
     * @return CancelBillOfLadingRequest
     */
    public function cancelBillOfLading($bol_id, $cancelComment=null) {
        $this->setBolId((float)$bol_id)->setCancelComment($cancelComment);
        return $this->createRequest(CancelBillOfLadingRequest::class, $this->getParameters());
    }

    /**
     * Supports Cash On Delivery
     *
     * @return boolean True if this gateway supports the Cash On Delivery
     */
    public function supportsCashOnDelivery()
    {
        return true;
    }
    /**
     * Supports Insurance
     *
     * @return boolean True if this gateway supports the Insurance
     */
    public function supportsInsurance()
    {
        return true;
    }
    /**
     * Supports Declared
     *
     * @return boolean True if this gateway supports the Declared
     */
    public function supportsDeclared()
    {
        return true;
    }

}