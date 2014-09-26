<?php
namespace pdt256\Shipping\RateRequest;

class StubUPS extends Adapter
{
	private $artificial_delay = 0;

	public function __construct($artificial_delay = 0)
	{
		$this->artificial_delay = $artificial_delay;
	}

	public function execute($url, $data = NULL)
	{
		if ($this->artificial_delay > 0) {
			sleep($this->artificial_delay);
		}

		$response = '<?xml version="1.0"?>
<RatingServiceSelectionResponse><Response><ResponseStatusCode>1</ResponseStatusCode><ResponseStatusDescription>Success</ResponseStatusDescription></Response><RatedShipment><Service><Code>03</Code></Service><RatedShipmentWarning>Your invoice may vary from the displayed reference rates</RatedShipmentWarning><RatedShipmentWarning>Missing / Invalid Shipper Number. Returned rates are Retail Rates.</RatedShipmentWarning><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>3.0</Weight></BillingWeight><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>19.10</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>19.10</MonetaryValue></TotalCharges><GuaranteedDaysToDelivery/><ScheduledDeliveryTime/><RatedPackage><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>19.10</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>19.10</MonetaryValue></TotalCharges><Weight>3.0</Weight><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>3.0</Weight></BillingWeight></RatedPackage></RatedShipment><RatedShipment><Service><Code>12</Code></Service><RatedShipmentWarning>Your invoice may vary from the displayed reference rates</RatedShipmentWarning><RatedShipmentWarning>Missing / Invalid Shipper Number. Returned rates are Retail Rates.</RatedShipmentWarning><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>37.18</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>37.18</MonetaryValue></TotalCharges><GuaranteedDaysToDelivery>3</GuaranteedDaysToDelivery><ScheduledDeliveryTime/><RatedPackage><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>37.18</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>37.18</MonetaryValue></TotalCharges><Weight>3.0</Weight><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight></RatedPackage></RatedShipment><RatedShipment><Service><Code>02</Code></Service><RatedShipmentWarning>Your invoice may vary from the displayed reference rates</RatedShipmentWarning><RatedShipmentWarning>Missing / Invalid Shipper Number. Returned rates are Retail Rates.</RatedShipmentWarning><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>49.23</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>49.23</MonetaryValue></TotalCharges><GuaranteedDaysToDelivery>2</GuaranteedDaysToDelivery><ScheduledDeliveryTime/><RatedPackage><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>49.23</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>49.23</MonetaryValue></TotalCharges><Weight>3.0</Weight><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight></RatedPackage></RatedShipment><RatedShipment><Service><Code>13</Code></Service><RatedShipmentWarning>Your invoice may vary from the displayed reference rates</RatedShipmentWarning><RatedShipmentWarning>Missing / Invalid Shipper Number. Returned rates are Retail Rates.</RatedShipmentWarning><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>89.54</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>89.54</MonetaryValue></TotalCharges><GuaranteedDaysToDelivery>1</GuaranteedDaysToDelivery><ScheduledDeliveryTime/><RatedPackage><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>89.54</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>89.54</MonetaryValue></TotalCharges><Weight>3.0</Weight><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight></RatedPackage></RatedShipment><RatedShipment><Service><Code>01</Code></Service><RatedShipmentWarning>Your invoice may vary from the displayed reference rates</RatedShipmentWarning><RatedShipmentWarning>Missing / Invalid Shipper Number. Returned rates are Retail Rates.</RatedShipmentWarning><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>93.28</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>93.28</MonetaryValue></TotalCharges><GuaranteedDaysToDelivery>1</GuaranteedDaysToDelivery><ScheduledDeliveryTime>12:00 Noon</ScheduledDeliveryTime><RatedPackage><TransportationCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>93.28</MonetaryValue></TransportationCharges><ServiceOptionsCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>0.00</MonetaryValue></ServiceOptionsCharges><TotalCharges><CurrencyCode>USD</CurrencyCode><MonetaryValue>93.28</MonetaryValue></TotalCharges><Weight>3.0</Weight><BillingWeight><UnitOfMeasurement><Code>LBS</Code></UnitOfMeasurement><Weight>5.0</Weight></BillingWeight></RatedPackage></RatedShipment></RatingServiceSelectionResponse>';

		return $response;
	}
}