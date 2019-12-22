<?php


class Queries
{

	public static function insertCustomer($id, $name)
	{
		return "INSERT INTO `customer` VALUES ('{$id}', '{$name}')";
	}

	public static function getCustomers()
	{
		return "SELECT * FROM `customer`";
	}

	public static function getCustomerById($id)
	{
		return "SELECT * FROM `customer` WHERE `id` = '{$id}'";
	}

	public static function insertProduct($id, $description, $e_description)
	{
		return "INSERT INTO `product` VALUES ('{$id}', '{$description}', '{$e_description}')";
	}

	public static function getProducts()
	{
		return "SELECT * FROM `product`";
	}

	public static function getProductById($id)
	{
		return "SELECT * FROM `product` WHERE `id` = '{$id}'";
	}

	public static function insertSaftFile($start_date, $end_date, $total_price)
	{
		return "INSERT INTO `saft` VALUES (default, '{$start_date}', '{$end_date}', $total_price)";
	}

	public static function getSaftFiles()
	{
		return "SELECT * FROM `saft`";
	}

	public static function getSaftFilesByDates($start_date, $end_date)
	{
		return "MAKE A QUERY";
	}

	public static function getSaftFileById($id)
	{
		return "SELECT * FROM `saft` WHERE `id` = '{$id}'";
	}

	public static function insertInvoice($saft_id, $customer_id, $product_id, $number, $quantity)
	{
		return "INSERT INTO `invoice` VALUES (default, '{$saft_id}', '{$customer_id}', '{$product_id}', '{$number}', '{$quantity}')";
	}

	public static function getInvoices()
	{
		return "SELECT * FROM `invoice`";
	}

	public static function getInvoiceById($id)
	{
		return "SELECT * FROM `invoice` WHERE `id` = '{$id}'";
	}

	public static function insertCost($date, $price)
	{
		return "INSERT INTO `cost` VALUES (default, '{$date}', '{$price}')";
	}

	public static function getCosts()
	{
		return "SELECT * FROM `cost`";
	}

}





?>