let url = "https://my.jasminsoftware.com";
let tenant = "224816";
let organization = "224816-0001";
let token = "";

let grantType = "client_credentials";
let clientId = "FEUP-SINF-S"
let clientSecret = "155c857c-00d5-4a43-a92e-3a0e155f3030";
let application = "application";

//Generic API request to path with callback
function request(path, callback) {

	//Setup token request
	var settings = {
		"url": "https://identity.primaverabss.com/connect/token",
		"method": "POST",
		"headers": {
			"Content-Type": "application/x-www-form-urlencoded",
			"Accept": "*/*"
		},
		"data": {
			"grant_type": grantType,
			"client_id": clientId,
			"client_secret": clientSecret,
			"scope": application
		}
	}

	//Request Token
	$.ajax(settings).done(function (response) {
		//Store token
		token = response.token_type + " " + response.access_token;

		//Print current token
		console.log("Current token: " + token);

		//Prepare desired request
		var settings = {
			"url": url + "/api/" + tenant + "/" + organization + path,
			"method": "GET",
			"headers": {
				"Content-Type": "application/x-www-form-urlencoded",
				"Accept": "*/*",
				"Authorization": token
			},
			"data": {
				"grant_type": "client_credentials",
				"client_id": clientId,
				"client_secret": clientSecret,
				"scope": application
			}
		}

		//Perform desired request and callback
		$.ajax(settings).done(function (response) {
			callback(response);
		});
	});
}

//Get Warehouses
function getWarehouses() {
	request("/materialscore/warehouses", function (response) {
		console.log("Get Warehouses Response:");
		console.log(response);
	});
}

//Get Material Items
function getMaterialItems(callback) {
	request("/materialscore/materialsitems", function (response) {
		callback(response);
	});
}

//Get Invoices
function getInvoices(callback) {
	request("/billing/invoices/", function (response) {
		console.log("Get Invoices Response:");
		console.log(response);
		callback(response);
	});
}

//Get Orders
function getOrders(callback) {
	request("/sales/orders", function (response) {
		console.log("Get Orders Response:");
		console.log(response);
		callback(response);
	});
}

//Get Purchase Orders
function getPurchaseOrders(callback) {
	request("/purchases/orders?", function (response) {
		console.log("Get Purchase Orders Response:");
		console.log(response);
		callback(response);
	});
}

//Get Financial Account
function getFinancialAccounts(callcack) {
	request("/financialcore/financialAccounts", function (response) {
		console.log("Get Financial Account Response:");
		console.log(response);
		callback(response);
	});
}

//Get Accounting Summary 
function getAccountingSummary() {
	request("/financialCore/accountingEntries/getAccountingSummaries/odata?$inlinecount=allpages&$top=20&$skip10", function (response) {
		console.log("Get Accounting SummaryResponse:");
		console.log(response);
	});
}

//Get Costumers
function getCostumers() {
	request("/salescore/customerParties?page=1&pageSize=10", function (response) {
		console.log("Get Costumers");
		console.log(response);
	});
}

$(document).ready(function(){
	console.log("ready");
});